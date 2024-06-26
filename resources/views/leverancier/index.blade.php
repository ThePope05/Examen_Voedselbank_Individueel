<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div>
        <h1>Overzicht Leveranciers</h1>

        <form method="GET" action="{{ route('leverancier.index.zoeknaam') }}">
            <select name="zoeknaam">
                <option value="">Alle</option>
                @foreach ($leverancierTypes as $leverancierType)
                <option value="{{ $leverancierType->leverancier_type }}">{{ $leverancierType->leverancier_type }}</option>
                @endforeach
            </select>
            <button type="submit">Filter</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Contactpersoon</th>
                <th>Email</th>
                <th>Mobiel</th>
                <th>Leveranciernummer</th>
                <th>leverancier_type</th>
                <th>Product Details</th>
            </tr>
        </thead>
        <tbody>
            @if (count($leveranciers) > 0)
            @foreach ($leveranciers as $leverancier)
            <tr>
                <td>{{ $leverancier->naam }}</td>
                <td>{{ $leverancier->contact_persoon }}</td>
                <td>{{ $leverancier->contacts->first()->email }}</td>
                <td>{{ $leverancier->contacts->first()->mobiel }}</td>
                <td>{{ $leverancier->leverancier_nummer }}</td>
                <td>{{ $leverancier->leverancier_type }}</td>
                <td>
                    <a href="{{ route('product.show', $leverancier->id) }}">Details</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7">Er zijn geen leveranciers bekent van het geselecteerde leverancierstype</td>
            </tr>
            @endif
        </tbody>
    </table>
</body>