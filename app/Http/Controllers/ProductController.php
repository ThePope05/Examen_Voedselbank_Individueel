<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function show($leverancier_id)
    {
        $leverancier = Leverancier::find($leverancier_id);
        return view('product.show', ['leverancier' => $leverancier]);
    }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        return view('product.form', ['product' => $product]);
    }

    public function update(Request $request, $product_id)
    {
        $product = Product::find($product_id);

        //Wij valideren de nieuwe datum die mag maar max 7 dagen in de toekomst liggen
        try {
            $request->validate([
                'houdbaarheidsdatum' => 'required|date|after_or_equal:' . Carbon::parse($product->houdbaarheidsdatum)->toDateString() . '|before_or_equal:' . Carbon::parse($product->houdbaarheidsdatum)->addDays(7)->toDateString()
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('error', 'De houdbaarheidsdatum is niet gewijzigd')->with('message', 'De houdbaarheidsdatum mag met maximaal 7 dagen verlengd worden.');
        }

        //Wij updaten de houdbaarheidsdatum van het product
        $product->houdbaarheidsdatum = $request->houdbaarheidsdatum;
        $product->save();

        //Wij sturen de gebruiker terug naar de detailpagina van het product
        return redirect()->back()->with('success', 'De houdbaarheidsdatum is gewijzigd');
    }
}
