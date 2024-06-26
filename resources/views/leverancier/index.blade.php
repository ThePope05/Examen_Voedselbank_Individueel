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
            <h1 class="text-green-600 underline text-2xl">Overzicht Leveranciers</h1>

            <form method="GET" action="{{ route('leverancier.index.zoeknaam') }}" class="space-x-8">
                <select name="zoeknaam" class="border-2  px-2 py-1 rounded">
                    <option value="">Selecteer Leveranciertype</option>
                    @foreach ($leverancierTypes as $leverancierType)
                    <option value="{{ $leverancierType->leverancier_type }}">{{ $leverancierType->leverancier_type }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-zinc-700 text-white rounded px-2 py-1">Toon leveranciers</button>
            </form>
        </div>
        <table class="w-full mt-4">
            <thead>
                <tr>
                    <th class="border-1 px-1">Naam</th>
                    <th class="border-1 px-1">Contactpersoon</th>
                    <th class="border-1 px-1">Email</th>
                    <th class="border-1 px-1">Mobiel</th>
                    <th class="border-1 px-1">Leveranciernummer</th>
                    <th class="border-1 px-1">leverancier_type</th>
                    <th class="border-1 px-1">Product Details</th>
                </tr>
            </thead>
            <tbody>
                @if (count($leveranciers) > 0)
                @foreach ($leveranciers as $leverancier)
                <tr>
                    <td class="border-1 px-1">{{ $leverancier->naam }}</td>
                    <td class="border-1 px-1">{{ $leverancier->contact_persoon }}</td>
                    <td class="border-1 px-1">{{ $leverancier->contacts->first()->email }}</td>
                    <td class="border-1 px-1">{{ $leverancier->contacts->first()->mobiel }}</td>
                    <td class="border-1 px-1">{{ $leverancier->leverancier_nummer }}</td>
                    <td class="border-1 px-1">{{ $leverancier->leverancier_type }}</td>
                    <td class="border-1 px-1 inline-flex w-full justify-center">
                        <a href="{{ route('product.show', $leverancier->id) }}" class="text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor">
                                <path d="M560-564v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-600q-38 0-73 9.5T560-564Zm0 220v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-380q-38 0-73 9t-67 27Zm0-110v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-490q-38 0-73 9.5T560-454ZM260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z" />
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
            @if ($zoeknaam != '')
            <a href="{{ route('leverancier.index') }}" class="bg-blue-600 text-white rounded px-2 py-1 mt-4">Terug</a>
            @endif
            <a href="{{ route('home') }}" class="bg-blue-600 text-white rounded px-2 py-1 mt-4">Home</a>
        </div>
    </div>
</body>