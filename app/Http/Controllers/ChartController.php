<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Models\Product;
class chartController extends Controller
{
    //
    public function index()
    {
        $chart = Charts::database(Product::all(), 'pie', 'google')
    ->title('Products')
    ->elementLabel("Total")
    ->dimensions(1000, 500)
    ->responsive(false)
    ->groupBy('nombre');

        return view('chart', ['chart' => $chart]);
    }
}
