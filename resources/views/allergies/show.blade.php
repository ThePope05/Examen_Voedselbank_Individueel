<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gezinsallergieën Details</title>
</head>

<body>
    @if (session('success'))
    <div class="success-message" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    
    @if ($errors->has('warning'))
    <div class="warning-message" id="warningMessage">
        {{ $errors->first('warning') }}
    </div>
    @endif

    <script>
        // JavaScript to hide the success and warning messages after 3 seconds
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
            var warningMessage = document.getElementById('warningMessage');
            if (warningMessage) {
                warningMessage.style.display = 'none';
            }
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>

    <h1>Allergieën van {{ $gezin->naam }}</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Allergieën</th>
                <th>Wijzig Allergie</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gezin->personen as $persoon)
            <tr>
                <td>{{ $persoon->voornaam }} {{ $persoon->tussenvoegsel }} {{ $persoon->achternaam }}</td>
                <td>
                    @foreach($persoon->allergieen as $allergie)
                    {{ $allergie->naam }}
                    @endforeach
                </td>
                <td><a href="{{ route('allergies.edit', ['gezin' => $gezin->id, 'persoon' => $persoon->id]) }}">Wijzig Allergie</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('allergies.index') }}">Terug naar overzicht</a>
</body>

</html>
