<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>


<div class="container">
    <h1 class="text-success">Product Details {{ $product->product->naam }}</h1>
    <table class="table table-bordered">
        <tr>
            <th>Productnaam</th>
            <td>{{ $product->product->naam }}</td>
        </tr>
        <tr>
            <th>Houdbaarheidsdatum</th>
            <td>{{ $product->product->houdbaarheidsdatum }}</td>
        </tr>
        <tr>
            <th>Barcode</th>
            <td>{{ $product->product->barcode }}</td>
        </tr>
        <tr>
            <th>Magazijn locatie</th>
            <td>{{ $product->locatie }}</td>
        </tr>
        <tr>
            <th>Ontvangstdatum</th>
            <td>{{ $product->magazijn->ontvangstdatum }}</td>
        </tr>
        <tr>
            <th>Uitleveringsdatum</th>
            <td>{{ $product->magazijn->uitleveringsdatum }}</td>
        </tr>
        <tr>
            <th>Aantal op voorraad</th>
            <td>{{ $product->magazijn->aantal }}</td>
        </tr>
    </table>
    <a href="/voorraad/{{ $product->id }}/edit" class="btn btn-primary">Wijzig</a>
    <a href="/voorraad" class="btn btn-primary">Terug</a>
    <a href="/" class="btn btn-primary">Home</a>
</div>
