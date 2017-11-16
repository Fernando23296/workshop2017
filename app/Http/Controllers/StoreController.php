<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function index()
    {
    	$products= Product::all();
    	//dd($stores);
    	return view('store.index',compact('products'));

        
      
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	//dd($store);
    	return view('store.show',compact('product'));
    }
    public function index1()
    {
        $stores= Store::all();
        //dd($stores);
        return view('store.locales',compact('stores'));

        
      
    }
}
