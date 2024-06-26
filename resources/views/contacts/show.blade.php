<!-- resources/views/contacts/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contact Details
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Naam Gezin</th>
                                <td>
                                    @foreach ($contact->gezins as $gezin)
                                    {{ $gezin->naam }}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Vertegenwoordiger</th>
                                <td>
                                    @foreach ($contact->gezins as $gezin)
                                    @foreach ($gezin->persoons->where('is_vertegenwoordiger', true) as $vertegenwoordiger)
                                    {{ $vertegenwoordiger->voornaam }}
                                    @endforeach
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>E-mailadres</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th>Mobiel</th>
                                <td>{{ $contact->mobiel }}</td>
                            </tr>
                            <tr>
                                <th>Adres</th>
                                <td>{{ $contact->straat }} {{ $contact->huisnummer }}{{ $contact->toevoeging ? ' '.$contact->toevoeging : '' }}</td>
                            </tr>
                            <tr>
                                <th>Woonplaats</th>
                                <td>{{ $contact->woonplaats }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection