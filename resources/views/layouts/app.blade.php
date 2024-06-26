<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Klanten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-gyO5u7D+N3vrkwkOXtF7+B7ZKmA16XT9iJA4DVR0q4oAtQ+xOaqsfP5lgCXXvY/mY3q5AW7+Yz2j1KoXHpQa8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('contacts.index') }}">Contact Management</a>
    </nav>

    @yield('content')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-N/M/hk8MabE5XC5N80/OlX0lLvei8rH1Pn+Wp7Eel36A+z6eBwL0spjT0XZmsS0JGu6Ej1F5cEzsyhbBtAmf7Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>