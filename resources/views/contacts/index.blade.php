@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #f8f9fa;">
                    <span style="color: #28a745;">Overzicht Klanten</span> <!-- Titel van de pagina -->
                    <div class="float-right">
                        <select id="postcode-select">
                            <option value="">Selecteer Postcode</option>
                            <option value="5271ZH" selected>5271ZH</option>
                            @foreach ($contacts->unique('postcode') as $contact)
                            <option value="{{ $contact->postcode }}" @if ($contact->postcode == '5271ZH') selected @endif>{{ $contact->postcode }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-secondary" onclick="filterByPostcode()">Toon Klanten</button> <!-- Knop om klanten te filteren -->
                    </div>
                </div>
                <div class="card-body">
                    <div id="no-contacts-message" class="alert alert-warning" style="display: none;">Er zijn geen klanten bekend die de geselecteerde postcode hebben</div> <!-- Waarschuwingsbericht als er geen klanten zijn met de geselecteerde postcode -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Naam Gezin</th>
                                <th>Vertegenwoordiger</th>
                                <th>E-mailadres</th>
                                <th>Mobiel</th>
                                <th>Adres</th>
                                <th>Woonplaats</th>
                                <th>Klant Details</th>
                            </tr>
                        </thead>
                        <tbody id="contact-table">
                            @foreach ($contacts as $contact)
                            @php
                            $gezins = $contact->gezins;
                            $gezinNames = $gezins->pluck('naam')->join(', ');
                            $vertegenwoordigers = $gezins->flatMap->persoons->where('is_vertegenwoordiger', true)->pluck('voornaam')->join(', ');
                            @endphp
                            @if ($vertegenwoordigers)
                            <tr data-postcode="{{ $contact->postcode }}">
                                <td>{{ $gezinNames }}</td>
                                <td>{{ $vertegenwoordigers }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->mobiel }}</td>
                                <td>{{ $contact->straat }} {{ $contact->huisnummer }}{{ $contact->toevoeging ? ' '.$contact->toevoeging : '' }}</td>
                                <td>{{ $contact->woonplaats }}</td>
                                <td>
                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-file-alt"></i> <!-- FontAwesome notepad icon -->
                                    </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function filterByPostcode() {
        var selectedPostcode = document.getElementById('postcode-select').value;
        var rows = document.querySelectorAll('#contact-table tr');
        var noContactsMessage = document.getElementById('no-contacts-message');
        var hasVisibleRow = false;

        rows.forEach(row => {
            if (selectedPostcode === "" || row.getAttribute('data-postcode') === selectedPostcode) {
                row.style.display = '';
                if (row.style.display === '') {
                    hasVisibleRow = true;
                }
            } else {
                row.style.display = 'none';
            }
        });

        if (!hasVisibleRow) {
            noContactsMessage.style.display = 'block'; // Toon waarschuwingsbericht als geen resultaten worden getoond
        } else {
            noContactsMessage.style.display = 'none';
        }
    }
</script>
@endsection