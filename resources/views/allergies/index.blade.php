<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overzicht Gezinsallergieën</title>
</head>
<body>
    @if (session('success'))
    <div class="success-message" id="successMessage">
        {{ session('success') }}
    </div>
    @endif
    <script>
        // JavaScript to hide the success message after 3 seconds
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
    <h1>Overzicht Gezinsallergieën</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Omschrijving</th>
                <th>Volwassenen</th>
                <th>Kinderen</th>
                <th>Baby's</th>
                <th>Vertegenwoordiger</th>
                <th>Allergie Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gezinnen as $gezin)
                <tr>
                    <td>{{ $gezin->naam }}</td>
                    <td>{{ $gezin->omschrijving }}</td>
                    <td>{{ $gezin->aantal_volwassenen }}</td>
                    <td>{{ $gezin->aantal_kinderen }}</td>
                    <td>{{ $gezin->aantal_babys }}</td>
                    <td>
                        @php
                            $vertegenwoordiger = $gezin->personen->firstWhere('is_vertegenwoordiger', 1);
                        @endphp
                        {{ $vertegenwoordiger ? $vertegenwoordiger->voornaam . ' ' . $vertegenwoordiger->tussenvoegsel . ' ' . $vertegenwoordiger->achternaam : 'N/A' }}
                    </td>
                    <td><a href="{{ route('allergies.show', $gezin->id) }}">Allergie Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
