@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Wijzig Klant Details - <span style="color: green; font-weight: bold;">{{ $contact->gezins->first()->persoons->first()->voornaam ?? '' }} {{ $contact->gezins->first()->persoons->first()->tussenvoegsel ?? '' }} {{ $contact->gezins->first()->persoons->first()->achternaam ?? '' }}</span></div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="voornaam" class="col-md-4 col-form-label text-md-right">Voornaam</label>
                            <div class="col-md-6">
                                <input id="voornaam" type="text" class="form-control" name="voornaam" value="{{ old('voornaam', $contact->gezins->first()->persoons->first()->voornaam ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tussenvoegsel" class="col-md-4 col-form-label text-md-right">Tussenvoegsel</label>
                            <div class="col-md-6">
                                <input id="tussenvoegsel" type="text" class="form-control" name="tussenvoegsel" value="{{ old('tussenvoegsel', $contact->gezins->first()->persoons->first()->tussenvoegsel ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="achternaam" class="col-md-4 col-form-label text-md-right">Achternaam</label>
                            <div class="col-md-6">
                                <input id="achternaam" type="text" class="form-control" name="achternaam" value="{{ old('achternaam', $contact->gezins->first()->persoons->first()->achternaam ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="geboortedatum" class="col-md-4 col-form-label text-md-right">Geboortedatum</label>
                            <div class="col-md-6">
                                <input id="geboortedatum" type="date" class="form-control" name="geboortedatum" value="{{ old('geboortedatum', $contact->gezins->first()->persoons->first()->geboortedatum ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="typepersoon" class="col-md-4 col-form-label text-md-right">Type persoon</label>
                            <div class="col-md-6">
                                <input id="typepersoon" type="text" class="form-control" name="typepersoon" value="{{ old('typepersoon', $contact->gezins->first()->persoons->first()->type_persoon ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vertegenwoordiger" class="col-md-4 col-form-label text-md-right">Vertegenwoordiger</label>
                            <div class="col-md-6">
                                <input id="vertegenwoordiger" type="text" class="form-control" name="vertegenwoordiger" value="{{ old('vertegenwoordiger', $contact->gezins->first()->persoons->where('is_vertegenwoordiger', true)->first()->voornaam ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="straat" class="col-md-4 col-form-label text-md-right">StraatNaam</label>
                            <div class="col-md-6">
                                <input id="straat" type="text" class="form-control" name="straat" value="{{ old('straat', $contact->straat ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="huisnummer" class="col-md-4 col-form-label text-md-right">Huisnummer</label>
                            <div class="col-md-6">
                                <input id="huisnummer" type="text" class="form-control" name="huisnummer" value="{{ old('huisnummer', $contact->huisnummer ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="toevoeging" class="col-md-4 col-form-label text-md-right">Toevoeging</label>
                            <div class="col-md-6">
                                <input id="toevoeging" type="text" class="form-control" name="toevoeging" value="{{ old('toevoeging', $contact->toevoeging ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">Postcode</label>
                            <div class="col-md-6">
                                <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode', $contact->postcode ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="woonplaats" class="col-md-4 col-form-label text-md-right">Woonplaats</label>
                            <div class="col-md-6">
                                <input id="woonplaats" type="text" class="form-control" name="woonplaats" value="{{ old('woonplaats', $contact->woonplaats ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mailadres</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $contact->email ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobiel" class="col-md-4 col-form-label text-md-right">Mobiel</label>
                            <div class="col-md-6">
                                <input id="mobiel" type="text" class="form-control" name="mobiel" value="{{ old('mobiel', $contact->mobiel ?? '') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Wijzig Klantgegevens</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary">Terug</a>
                                <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
<script>
    setTimeout(function() {
        window.location.href = "{{ route('contacts.show', $contact->id) }}";
    }, 3000); // 3 seconds
</script>
@endif

@endsection