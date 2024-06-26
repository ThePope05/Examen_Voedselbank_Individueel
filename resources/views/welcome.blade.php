<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Voedselbank Maaskantje</title>
    </head>
    <body>
        <div>
            <h1>Welkom bij Voedselbank Maaskantje</h1>
            <a href="{{ route('allergies.index') }}">Overzicht Gezinsallergieën</a>
        </div>
    </body>
</html>
