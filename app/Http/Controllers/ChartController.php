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
       

    $chart = Charts::database(Product::all(), 'bar', 'google')
    ->title('Tipos de Productos en Stock')
    ->elementLabel("Total")
    ->dimensions(1000, 500)
    ->responsive(false)	
    ->groupBy('stock');

    	return view('chart', ['chart' => $chart]);
    
	
    


    }



}
