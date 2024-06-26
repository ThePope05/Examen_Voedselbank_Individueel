<?php

namespace App\Http\Controllers;

use App\Models\ProductPerMagazijn;
use Illuminate\Http\Request;

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
}
