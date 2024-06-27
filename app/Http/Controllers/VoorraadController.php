<?php

namespace App\Http\Controllers;

use App\Models\ProductPerMagazijn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VoorraadController extends Controller
{
    /**
     * Toon een lijst van de resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Haal alle producten op uit de database
         * en geef deze door aan de view
         * @var ProductPerMagazijn $products
         */

        $products = ProductPerMagazijn::all();
        return view('voorraad.index', compact('products'));
    }

    public function filterByCategorie(Request $request)
    {
        /**
         * Valideer de request
         * @var Request $request
         */
        $request->validate([
            'filter_categorie' => 'required|integer',
        ]);

        /**
         * Haal alle producten op uit de database
         * waarvan de categorie_id gelijk is aan de filter_categorie
         * en geef deze door aan de view
         * @var ProductPerMagazijn $products
         * @var Request $request
         * @var int $filterCategorie
         */
        $filterCategorie = $request->input('filter_categorie');

        $products = ProductPerMagazijn::all()->where('product.categorie_id', $filterCategorie);
        return view('voorraad.index', compact('products'));
    }

    public function show($id)
    {
        /**
         * Haal een product op uit de database
         * waarvan de id gelijk is aan de product_id
         * en geef deze door aan de view
         * @var ProductPerMagazijn $product
         * @var int $id
         */
        $product = ProductPerMagazijn::findOrFail($id);
        return view('voorraad.show', compact('product'));
    }

    public function edit($id)
    {
        /**
         * Haal een product op uit de database
         * waarvan de id gelijk is aan de product_id
         * en geef deze door aan de view
         * @var ProductPerMagazijn $product
         * @var int $id
         */
        $product = ProductPerMagazijn::findOrFail($id);
        return view('voorraad.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Valideer de ingevoerde gegevens
        $request->validate([
            'locatie' => 'required|string|max:255',
            'aantal_uitgeleverd' => 'nullable|integer',
            'uitleveringsdatum' => 'nullable|date',
            'aantal' => 'required|integer',
        ]);

        try {
            // Zoek het product op basis van ID
            $product = ProductPerMagazijn::findOrFail($id);

            // Trek het aantal uitgeleverde producten af van het totale aantal
            if ($request->filled('aantal_uitgeleverd')) {
                $aantalUitgeleverd = $request->input('aantal_uitgeleverd');
                $nieuwAantal = $product->magazijn->aantal - $aantalUitgeleverd;

                // Controleer of het nieuwe aantal niet negatief wordt
                if ($nieuwAantal < 0) {
                    return redirect()->back()
                        ->withInput()
                        ->withErrors(['error' => 'Het aantal uitgeleverde producten mag niet hoger zijn dan het aantal producten in voorraad.']);
                }

                $product->magazijn->aantal = $nieuwAantal;
            }

            // Werk de productgegevens bij met de overige gegevens
            $product->locatie = $request->input('locatie');
            $product->magazijn->uitleveringsdatum = $request->input('uitleveringsdatum');
            $product->magazijn->save();
            $product->product->save();

            // Flash een succesbericht naar de sessie
            session()->flash('success', 'De productgegevens zijn gewijzigd');

            // Redirect terug naar de bewerkingspagina van het product
            return redirect()->route('voorraad.edit', $product->id);
        } catch (\Exception $e) {
            // Log de fout om te helpen bij debuggen
            Log::error('Error updating product: ' . $e->getMessage());

            // Behandel eventuele uitzonderingen of fouten die kunnen optreden
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'De productgegevens van het geselecteerde product kunnen niet gewijzigd worden.']);
        }
    }
}
