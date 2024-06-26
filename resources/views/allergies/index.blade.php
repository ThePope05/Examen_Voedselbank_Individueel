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
    @if (session('error'))
    <div class="error-message">
        {{ session('error') }}
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

    <!-- Dropdown voor allergieën -->
    <form action="{{ route('allergies.filter') }}" method="GET">
        <label for="allergie_id">Selecteer allergie:</label>
        <select name="allergie_id" id="allergie_id">
            <option value="">Alle allergieën</option>
            @foreach($allergieen as $allergie)
            <option value="{{ $allergie->id }}" {{ request('allergie_id') == $allergie->id ? 'selected' : '' }}>
                {{ $allergie->naam }}
            </option>
            @endforeach
        </select>
        <button type="submit">Toon Gezinnen</button>
    </form>

    @if ($gezinnen->isEmpty() && request()->has('allergie_id'))
    <div class="error-message">
        Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.
    </div>
    @endif



    <script>
        // JavaScript om het formulier automatisch in te dienen wanneer een allergie wordt geselecteerd
        document.getElementById('allergie_id').addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    </script>

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