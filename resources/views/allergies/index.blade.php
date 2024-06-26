<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Overzicht Gezinsallergieën</title>
</head>
<body>
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
                    <td><a href="#">Allergie Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
