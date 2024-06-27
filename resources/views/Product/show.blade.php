<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="flex w-screen h-screen justify-center align-middle items-center">
    <div class="w-3/5 shadow-xl p-6">
        <div class="flex justify-between">
            <h1 class="text-green-600 underline text-2xl">Overzicht Producten</h1>
        </div>

        <table>
            <tr>
                <th class="border-1 text-left">Naam: </th>
                <td class="border-1 text-left">{{ $leverancier->naam }}</td>
            </tr>
            <tr>
                <th class="border-1 text-left">Leveranciernummer: </th>
                <td class="border-1 text-left">{{ $leverancier->leverancier_nummer }}</td>
            </tr>
            <tr>
                <th class="border-1 text-left">Leveranciertype: </th>
                <td class="border-1 text-left">{{ $leverancier->leverancier_type }}</td>
            </tr>
        </table>
        <table class="w-full mt-4">
            <thead>
                <tr>
                    <th class="border-1 px-1">Naam</th>
                    <th class="border-1 px-1">Soort Allergie</th>
                    <th class="border-1 px-1">Barcode</th>
                    <th class="border-1 px-1">Houdbaarheidsdatum</th>
                    <th class="border-1 px-1">Wijzig Product</th>
                </tr>
            </thead>
            <tbody>
                @if (count($leverancier->products) > 0)
                @foreach ($leverancier->products as $product)
                <tr>
                    <td class="border-1 px-1">{{ $product->naam }}</td>
                    <td class="border-1 px-1">{{ ($product->soort_allergie) ? $product->soort_allergie : '~~~~~' }}</td>
                    <td class="border-1 px-1">{{ $product->barcode }}</td>
                    <td class="border-1 px-1">{{ $product->houdbaarheidsdatum }}</td>

                    <td class="border-1 px-1 w-full inline-flex justify-center">
                        <a href="{{ route('product.edit', $product->id) }}" class="text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor">
                                <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="border-1">
                    <td colspan="7" class="bg-yellow-100 rounded-lg py-4 text-center text-yellow-700">Er zijn geen leveranciers bekent van het geselecteerde leverancierstype</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="flex justify-end space-x-4">
            <a href="{{ route('leverancier.index') }}" class="bg-blue-600 text-white rounded px-2 py-1 mt-4">Terug</a>
            <a href="{{ route('leverancier.index') }}" class="bg-blue-600 text-white rounded px-2 py-1 mt-4">Home</a>
        </div>
    </div>
</body>