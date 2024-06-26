<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use App\Models\Gezin;
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
        // Haal alle gezinnen op met hun personen en allergieën
        $gezinnen = Gezin::with(['personen.allergieen'])->get();

        return view('allergies.index', compact('gezinnen'));
    }
}
