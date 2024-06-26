<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\Leverancier();
    }

    public function index(Request $request)
    {
        $zoeknaam = ($request->zoeknaam ? $request->zoeknaam : '');
        $leveranciers = $this->model->getLeveranciers($zoeknaam);
        $leverancierTypes = $this->model->getLeverancierTypes();
        return view('leverancier.index', ['leveranciers' => $leveranciers, 'zoeknaam' => $zoeknaam, 'leverancierTypes' => $leverancierTypes]);
    }
}
