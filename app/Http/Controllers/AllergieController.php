<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use App\Models\Gezin;
use App\Models\Allergie;
use Illuminate\Http\Request;

class AllergieController extends Controller
{
    /**
     * Toon een overzicht van gezinnen met allergieën.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allergieen = Allergie::all(); // Haal alle allergieën op uit de database
        $gezinnen = Gezin::with(['personen.allergieen'])->get(); // Haal alle gezinnen op uit de database
        return view('allergies.index', compact('allergieen', 'gezinnen'));
    }

    public function filter(Request $request)
    {
        $allergieId = $request->input('allergie_id');

        if ($allergieId) {
            $gezinnen = Gezin::whereHas('personen.allergieen', function ($query) use ($allergieId) {
                $query->where('allergie_id', $allergieId);
            })->get();
        } else {
            // Als er geen allergie is geselecteerd, toon dan alle gezinnen
            $gezinnen = Gezin::with('personen.allergieen')->get();
        }

        $allergieen = Allergie::all(); // Haal alle allergieën op uit de database

        if ($gezinnen->isEmpty() && $allergieId) {
            return redirect()->route('allergies.index')->with('error', 'Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.');
        }

        return view('allergies.index', compact('allergieen', 'gezinnen'));
    }


    /**
     * Toon de details van een gezin inclusief allergieën.
     *
     * @param  int  $gezinId
     * @return \Illuminate\Http\Response
     */
    public function show($gezinId)
    {
        $gezin = Gezin::with('personen.allergieen')->findOrFail($gezinId);
        return view('allergies.show', compact('gezin'));
    }

    /**
     * Toon het formulier voor het bewerken van de allergie van een persoon.
     *
     * @param  int  $gezinId
     * @param  int  $persoonId
     * @return \Illuminate\Http\Response
     */
    public function edit($gezinId, $persoonId)
    {
        $persoon = Persoon::with('allergieen')->findOrFail($persoonId);
        $allergieen = Allergie::all();

        // Check anafylactisch risico
        $hoogRisico = $persoon->allergieen->contains(function ($allergie) {
            return $allergie->anafylactisch_risico === 'hoog';
        });

        if ($hoogRisico) {
            return redirect()->route('allergies.show', $gezinId)->withErrors([
                'warning' => 'Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een hoog risico op een anafylactische shock.'
            ]);
        }

        return view('allergies.edit', compact('persoon', 'allergieen', 'gezinId', 'hoogRisico'));
    }


    /**
     * Werk de allergie van een persoon bij.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $gezinId
     * @param  int  $persoonId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gezinId, $persoonId)
    {
        $request->validate([
            'allergie_id' => 'required|exists:allergie,id',
        ]);

        $persoon = Persoon::findOrFail($persoonId);
        $allergie = Allergie::findOrFail($request->allergie_id);

        // Controleer het anafylactisch risico
        if ($allergie->anafylactisch_risico == 'hoog') {
            // Toon een waarschuwing
            return redirect()->back()->withErrors(['warning' => 'Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een hoog risico op een anafylactische shock.']);
        }

        $persoon->allergieen()->sync([$request->allergie_id]);

        return redirect()->route('allergies.show', $gezinId)
            ->with('success', 'De wijziging is doorgevoerd.');
    }
}
