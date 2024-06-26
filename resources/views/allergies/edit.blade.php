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

    @if ($hoogRisico)
        <div id="anafylactischWaarschuwing" style="display: none; color: red;">
            Voor het wijzigen van deze allergie wordt geadviseerd eerst een arts te raadplegen vanwege een hoog risico op een anafylactische shock.
        </div>
    @endif

    <a href="{{ route('allergies.show', $gezinId) }}">Terug naar allergieën overzicht</a>

    <script>
        // JavaScript om de waarschuwing weer te geven als het anafylactisch risico hoog is
        document.getElementById('wijzigAllergieButton').addEventListener('click', function(event) {
            if ({{ $hoogRisico ? 'true' : 'false' }}) {
                event.preventDefault(); // Voorkom dat het formulier wordt ingediend
                document.getElementById('anafylactischWaarschuwing').style.display = 'block'; // Toon de waarschuwing
                setTimeout(function() {
                    document.getElementById('anafylactischWaarschuwing').style.display = 'none'; // Verberg de waarschuwing na 3 seconden
                }, 3000);
            }
        });
    </script>
</body>
</html>
