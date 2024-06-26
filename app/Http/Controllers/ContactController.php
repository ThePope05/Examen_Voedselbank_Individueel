<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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

    // Methode om contactgegevens bij te werken op basis van een HTTP Request
    public function update(Request $request, $id)
    {
        // Valideer de ingevoerde gegevens met behulp van Laravel validatieregels
        $request->validate([
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
                    // Definieer geldige postcodes voor Maaskantje
                    $validPostcodes = [
                        '5271TH', '5271TJ', '5271ZE', '5271ZH'
                    ];

                    // Controleer of de ingevoerde postcode in Maaskantje voorkomt
                    if (!in_array($value, $validPostcodes)) {
                        $fail('De postcode komt niet uit de regio Maaskantje.');
                    }
                },
            ],
            'woonplaats' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobiel' => 'required|string|max:20',
        ], [
            'postcode.in' => 'De postcode komt niet uit de regio Maaskantje.', // Aangepaste foutmelding voor postcode validatie
        ]);

        try {
            // Zoek het contact op basis van ID en update de gegevens met de ontvangen request data
            $contact = Contact::findOrFail($id);
            $contact->update($request->all());

            // Flash een succesbericht naar de sessie
            session()->flash('success', 'De klantgegevens zijn gewijzigd');

            // Redirect terug naar de bewerkingspagina van het contact
            return redirect()->route('contacts.edit', $contact->id);
        } catch (\Exception $e) {
            // Behandel eventuele uitzonderingen of fouten die kunnen optreden
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'De contactgegevens van de geselecteerde klant kunnen niet gewijzigd.']);
        }
    }
}
