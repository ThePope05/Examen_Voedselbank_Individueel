<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wijzig Allergie</title>
</head>
<body>
    <h1>Wijzig Allergie voor {{ $persoon->voornaam }} {{ $persoon->tussenvoegsel }} {{ $persoon->achternaam }}</h1>
    
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    
    <form id="wijzigAllergieForm" action="{{ route('allergies.update', ['gezin' => $gezinId, 'persoon' => $persoon->id]) }}" method="POST">
        @csrf
        <label for="allergie_id">Allergie:</label>
        <select name="allergie_id" id="allergie_id">
            @foreach($allergieen as $allergie)
                <option value="{{ $allergie->id }}" {{ $persoon->allergieen->contains($allergie->id) ? 'selected' : '' }}>
                    {{ $allergie->naam }}
                </option>
            @endforeach
        </select>
        <button type="submit" id="wijzigAllergieButton">Wijzig Allergie</button>
    </form>

    <a href="{{ route('allergies.show', $gezinId) }}">Terug naar allergieën overzicht</a>
</body>
</html>
