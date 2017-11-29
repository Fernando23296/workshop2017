<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Models\Product;
use App\Models\User;
use App\Models\Store;
class chartController extends Controller
{
    //
    public function index()
    {
       

    $chart = Charts::database(Product::all(), 'donut', 'google')
    ->title('Tipos de Productos en Stock')
    ->elementLabel("Total")
    ->dimensions(1000, 500)
    ->responsive(false)	
    ->groupBy('stock');



    
    $bar = Charts::database(Product::all(), 'bar', 'google')
    ->title('Tipos de Productos')
    ->elementLabel("Total")
    ->dimensions(1000, 500)
    ->responsive(false) 
    ->groupBy('tipo');

    $precio = Charts::database(Product::all(), 'pie', 'google')
    ->title('Precios')
    ->elementLabel("precio")
    ->dimensions(1000, 500)
    ->responsive(false) 
    ->groupBy('precio');

   

	
      return view('chart',['chart' => $chart, 'bar' => $bar, 'precio' => $precio,]);


    }



}
