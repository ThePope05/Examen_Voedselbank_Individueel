<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<div class="container">
    <h1 class="text-success">Wijzig Product Details {{ $product->product->naam }}</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form>
        <div class="row mb-3">
            <label for="productnaam" class="col-sm-2 col-form-label">Productnaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="productnaam" id="productnaam"
                    value="{{ $product->product->naam }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="houdbaarheidsdatum" class="col-sm-2 col-form-label">Houdbaarheidsdatum</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="houdbaarheidsdatum" id="houdbaarheidsdatum"
                    value="{{ $product->product->houdbaarheidsdatum }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="barcode" class="col-sm-2 col-form-label">Barcode</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="barcode" id="barcode" min="1000000000000"
                    max="9999999999999" value="{{ $product->product->barcode }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="magazijnlocatie" class="col-sm-2 col-form-label">Magazijn Locatie</label>
            <div class="col-sm-10">
                <select class="form-select" id="magazijnlocatie" name="magazijnlocatie">
                    <option value="Berlicum">Berlicum</option>
                    <option value="Den Bosch">Den Bosch</option>
                    <option value="Gemonde">Gemonde</option>
                    <option value="Heeswijk Dinther">Heeswijk Dinther</option>
                    <option value="Middelrode">Middelrode</option>
                    <option value="Rosmalen">Rosmalen</option>
                    <option value="Schijndel">Schijndel</option>
                    <option value="Sint-MichelsGestel">Sint-MichelsGestel</option>
                    <option value="Vught">Vught</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ontvangstdatum" class="col-sm-2 col-form-label">Ontvangstdatum</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="ontvangstdatum" id="ontvangstdatum"
                    value="{{ $product->magazijn->ontvangstdatum }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="aantal" class="col-sm-2 col-form-label">Aantal uitgeleverde producten</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="aantal" id="aantal"
                    max="{{ $product->magazijn->aantal }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="uitleveringsdatum" class="col-sm-2 col-form-label">uitleveringsdatum</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="uitleveringsdatum" id="uitleveringsdatum">
            </div>
        </div>
        <div class="row mb-3">
            <label for="voorraad" class="col-sm-2 col-form-label">Aantal op voorraad</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="voorraad" id="voorraad"
                    value="{{ $product->magazijn->aantal }}">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Wijzig Product Details</button>
        <a href="/voorraad/{{ $product->id }}/show" class="btn btn-primary">Terug</a>
        <a href="/" class="btn btn-primary">Home</a>
    </form>
</div>

@if (session('success'))
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('voorraad.show', $product->id) }}";
        }, 3000); // 3 seconds
    </script>
@endif
