@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    window.location.href = "{{ route('contacts.edit', $contact->id) }}";
                }, 3000); // Redirect to edit page after 3 seconds
            </script>
            @endif

            <div class="card">
                <div class="card">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">Klant Details - <span style="color: green; font-weight: bold;">{{ $contact->gezins->first()->persoons->first()->voornaam ?? '' }} {{ $contact->gezins->first()->persoons->first()->tussenvoegsel ?? '' }} {{ $contact->gezins->first()->persoons->first()->achternaam ?? '' }}</span></div>
                            <div class="card-body">


                                <div class="form-group row">
                                    <label for="voornaam" class="col-md-4 col-form-label text-md-right">Voornaam</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->gezins->first()->persoons->first()->voornaam ?? '' }}</p>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="tussenvoegsel" class="col-md-4 col-form-label text-md-right">Tussenvoegsel</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->gezins->first()->persoons->first()->tussenvoegsel ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="achternaam" class="col-md-4 col-form-label text-md-right">Achternaam</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->gezins->first()->persoons->first()->achternaam ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="geboortedatum" class="col-md-4 col-form-label text-md-right">Geboortedatum</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->gezins->first()->persoons->first()->geboortedatum ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="typepersoon" class="col-md-4 col-form-label text-md-right">Type persoon</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->gezins->first()->persoons->first()->type_persoon ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="vertegenwoordiger" class="col-md-4 col-form-label text-md-right">Vertegenwoordiger</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->gezins->first()->persoons->where('is_vertegenwoordiger', true)->first()->voornaam ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="straat" class="col-md-4 col-form-label text-md-right">StraatNaam</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->straat ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="huisnummer" class="col-md-4 col-form-label text-md-right">Huisnummer</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->huisnummer ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="toevoeging" class="col-md-4 col-form-label text-md-right">Toevoeging</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->toevoeging ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="postcode" class="col-md-4 col-form-label text-md-right">Postcode</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->postcode ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="woonplaats" class="col-md-4 col-form-label text-md-right">Woonplaats</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->woonplaats ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mailadres</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->email ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobiel" class="col-md-4 col-form-label text-md-right">Mobiel</label>
                                    <div class="col-md-6">
                                        <p>{{ $contact->mobiel ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Wijzig</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ route('contacts.index', $contact->id) }}" class="btn btn-primary">Terug</a>
                                        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection