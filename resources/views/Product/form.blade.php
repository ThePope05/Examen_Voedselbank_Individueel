<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="flex w-screen h-screen justify-center align-middle items-center">
    <div class="w-2/5 shadow-xl p-6">
        <div class="flex justify-between">
            <h1 class="text-green-600 underline text-2xl">Wijzig Product</h1>
        </div>

        @if (session('error'))
        <p class="bg-red-100 mt-6 px-4 py-4 text-red-900 rounded-lg">{{ session('error') }}</p>
        @endif

        @if (session('success'))
        <p class="bg-green-100 mt-6 px-4 py-4 text-green-900 rounded-lg">{{ session('success') }}</p>
        @endif

        <form action="{{ route('product.update', $product->id) }}" method="POST" class="mt-6">
            @csrf
            @method('PUT')
            <div>
                <label for="houdbaarheidsdatum" class="font-bold">Houdbaarheidsdatum: </label>
                <input type="date" name="houdbaarheidsdatum" value="{{ $product->houdbaarheidsdatum }}" class="border-2  px-2 py-1 rounded">
            </div>
            @if (session('message'))
            <p class="mt-6 text-red-600">{{ session('message') }}</p>
            @endif
            <div class="flex justify-between space-x-4 mt-6">
                <button type="submit" class="bg-zinc-700 text-white rounded px-2 py-1">Wijzig Houdbaarheidsdatum</button>
                <div class="space-x-4">
                    <a href="{{ route('product.show', $product->leveranciers->first()->id) }}" class="bg-blue-600 text-white rounded px-2 py-1 mt-4">Terug</a>
                    <a href="{{ route('leverancier.index') }}" class="bg-blue-600 text-white rounded px-2 py-1 mt-4">Home</a>
                </div>
            </div>
        </form>
    </div>
</body>