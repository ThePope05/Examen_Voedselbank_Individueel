<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>


<div class="container">
    <div class="container text-center">
        <div class="row">
            <div class="col-7">
                <h1 class="text-success">Overzicht productvoorraden</h1>
            </div>
            <div class="col-2">
                <form action="{{ route('voorraad.filterByCategorie') }}" method="GET">
                    <select class="form-select" id="filter_categorie" name="filter_categorie">
                        <option selected disabled>Selecteer Categorie</option>
                        <option value="1" f>AGF</option>
                        <option value="2">KV</option>
                        <option value="3">ZPE</option>
                        <option value="4">BB</option>
                        <option value="5">FSKT</option>
                        <option value="6">PRW</option>
                        <option value="7">SSKO</option>
                        <option value="8">SKCC</option>
                        <option value="9">BHV</option>
                    </select>
            </div>
            <div class="col-1">
                <input class="btn btn-secondary" type="submit" value="Toon Voorraad">
                </form>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Productnaam</th>
                <th>Categorie</th>
                <th>Eenheid</th>
                <th>Aantal</th>
                <th>Houdbaarheidsdatum</th>
                <th>Magazijn</th>
                <th>Voorraad Details</th>
            </tr>
        </thead>
        <tbody>
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product->naam }}</td>
                        <td>{{ $product->product->categorie->naam }}</td>
                        <td>{{ $product->magazijn->verpakkingseenheid }}</td>
                        <td>{{ $product->magazijn->aantal }}</td>
                        <td>{{ $product->product->houdbaarheidsdatum }}</td>
                        <td>{{ $product->locatie }}</td>
                        <td class="text-center">
                            <a href="/voorraad/{{ $product->id }}/show">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                    <path
                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                    <path
                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                    <path
                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <div class="alert alert-warning text-center" role="alert">
                    Er zijn geen producten bekend die horen bij de geselecteerde productcategorie
                </div>
            @endif
        </tbody>
    </table>
    <a href="/" class="btn btn-primary">Home</a>
</div>
