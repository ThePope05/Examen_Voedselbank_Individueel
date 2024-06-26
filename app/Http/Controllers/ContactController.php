<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
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
                    // Define valid postcodes for Maaskantje
                    $validPostcodes = [
                        '5271TH', '5271TJ', '5271ZE', '5271ZH'
                    ];

                    // Check if the entered postcode is in Maaskantje
                    if (!in_array($value, $validPostcodes)) {
                        $fail('De postcode komt niet uit de regio Maaskantje.');
                    }
                },
            ],
            'woonplaats' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobiel' => 'required|string|max:20',
        ], [
            'postcode.in' => 'De postcode komt niet uit de regio Maaskantje.',
        ]);

        try {
            $contact = Contact::findOrFail($id);
            $contact->update($request->all());

            // Flash the success message to the session
            session()->flash('success', 'De klantgegevens zijn gewijzigd');

            // Redirect back to the edit page
            return redirect()->route('contacts.edit', $contact->id);
        } catch (\Exception $e) {
            // Handle any exceptions or errors
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'De contactgegevens van de geselecteerde klant kunnen niet gewijzigd.']);
        }
    }
}
