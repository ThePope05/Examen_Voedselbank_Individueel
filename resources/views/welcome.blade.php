<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="flex w-screen h-screen justify-center pt-8 items-start">
    <div>
        <h1 class="text-3xl font-medium">Homepage voedselbank maaskantje</h1>
        <a href="{{ route('leverancier.index') }}" class="text-blue-600 underline rounded my-8">Overzicht Leveranciers</a>
    </div>
</body>

</html>