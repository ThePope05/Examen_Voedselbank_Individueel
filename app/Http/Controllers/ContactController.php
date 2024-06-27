<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    // Methode om alle contacten op te halen en naar de index view te sturen
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Methode om een specifiek contact op basis van ID op te halen en naar de show view te sturen
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    // Methode om een specifiek contact op basis van ID op te halen en naar de edit view te sturen
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $validatedData = $request->validate([
            'voornaam' => 'required|string|max:255',
            'tussenvoegsel' => 'nullable|string|max:255',
            'achternaam' => 'required|string|max:255',
            'geboortedatum' => 'required|date',
            'typepersoon' => 'required|string|max:255',
            'vertegenwoordiger' => 'required|string|max:255',
            'straat' => 'required|string|max:255',
            'huisnummer' => 'required|string|max:10',
            'toevoeging' => 'nullable|string|max:255',
            'postcode' => [
                'required',
                'string',
                'max:10',
                function ($attribute, $value, $fail) {
                    // Valid postcodes for Maaskantje
                    $validPostcodes = [
                        '5271TH', '5271TJ', '5271ZE', '5271ZH'
                    ];

                    // Check if the entered postcode is valid for Maaskantje
                    if (!in_array($value, $validPostcodes)) {
                        $fail('De postcode komt niet uit de regio Maaskantje.');
                    }
                },
            ],
            'woonplaats' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobiel' => 'required|string|max:20',
        ]);

        try {
            // Find the contact by ID and update its details
            $contact = Contact::findOrFail($id);
            $contact->voornaam = $request->input('voornaam');
            $contact->tussenvoegsel = $request->input('tussenvoegsel');
            $contact->achternaam = $request->input('achternaam');
            $contact->geboortedatum = $request->input('geboortedatum');
            $contact->typepersoon = $request->input('typepersoon');
            $contact->vertegenwoordiger = $request->input('vertegenwoordiger');
            $contact->straat = $request->input('straat');
            $contact->huisnummer = $request->input('huisnummer');
            $contact->toevoeging = $request->input('toevoeging');
            $contact->postcode = $request->input('postcode');
            $contact->woonplaats = $request->input('woonplaats');
            $contact->email = $request->input('email');
            $contact->mobiel = $request->input('mobiel');
            $contact->save();

            // Flash success message to session
            Session::flash('success', 'De klantgegevens zijn succesvol gewijzigd.');

            // Redirect to edit page after successful update
            return redirect()->route('contacts.edit', $contact->id);
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Er is een fout opgetreden bij het wijzigen van de klantgegevens.']);
        }
    }
}
