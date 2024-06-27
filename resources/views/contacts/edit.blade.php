@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Wijzig Contactgegevens</h2>

    @if (session('success'))
    <div class="alert alert-success">
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

        <div class="form-group">
            <label for="voornaam">Voornaam</label>
            <input type="text" class="form-control" id="voornaam" name="voornaam" value="{{ $contact->gezins->first()->persoons->first()->voornaam ?? '' }}">
        </div>

        <div class="form-group">
            <label for="tussenvoegsel">Tussenvoegsel</label>
            <input type="text" class="form-control" id="tussenvoegsel" name="tussenvoegsel" value="{{ $contact->gezins->first()->persoons->first()->tussenvoegsel ?? '' }}">
        </div>

        <div class="form-group">
            <label for="achternaam">Achternaam</label>
            <input type="text" class="form-control" id="achternaam" name="achternaam" value="{{ $contact->gezins->first()->persoons->first()->achternaam ?? '' }}">
        </div>

        <div class="form-group">
            <label for="geboortedatum">Geboortedatum</label>
            <input type="date" class="form-control" id="geboortedatum" name="geboortedatum" value="{{ $contact->gezins->first()->persoons->first()->geboortedatum ?? '' }}">
        </div>

        <div class="form-group">
            <label for="typepersoon">Type Persoon</label>
            <input type="text" class="form-control" id="typepersoon" name="typepersoon" value="{{ $contact->gezins->first()->persoons->first()->type_persoon ?? '' }}">
        </div>

        <div class="form-group">
            <label for="vertegenwoordiger">Vertegenwoordiger</label>
            <input type="text" class="form-control" id="vertegenwoordiger" name="vertegenwoordiger" value="{{ $contact->gezins->first()->persoons->where('is_vertegenwoordiger', true)->first()->voornaam ?? '' }}">
        </div>

        <div class="form-group">
            <label for="straat">Straat</label>
            <input type="text" class="form-control" id="straat" name="straat" value="{{ old('straat', $contact->straat) }}">
        </div>

        <div class="form-group">
            <label for="huisnummer">Huisnummer</label>
            <input type="text" class="form-control" id="huisnummer" name="huisnummer" value="{{ old('huisnummer', $contact->huisnummer) }}">
        </div>

        <div class="form-group">
            <label for="toevoeging">Toevoeging</label>
            <input type="text" class="form-control" id="toevoeging" name="toevoeging" value="{{ old('toevoeging', $contact->toevoeging) }}">
        </div>

        <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="text" class="form-control @error('postcode') is-invalid @enderror" id="postcode" name="postcode" value="{{ old('postcode', $contact->postcode) }}">
            @error('postcode')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="woonplaats">Woonplaats</label>
            <input type="text" class="form-control" id="woonplaats" name="woonplaats" value="{{ old('woonplaats', $contact->woonplaats) }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}">
        </div>

        <div class="form-group">
            <label for="mobiel">Mobiel</label>
            <input type="text" class="form-control" id="mobiel" name="mobiel" value="{{ old('mobiel', $contact->mobiel) }}">
        </div>

        <button type="submit" class="btn btn-primary">Wijzig Klant Details</button>
        <div class="col-md-6 text-right">
            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary">Terug</a>
            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
        </div>
    </form>
</div>
@endsection