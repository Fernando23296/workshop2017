<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;





use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductsFormRequest;

use DB;

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
    public function local()
    {
        $stores= Store::all();
        //dd($stores);
        return view('store.locales',compact('stores'));
 
    }
    public function localproducto($request)
    {
        if ($request)
        {
            
            $products=DB::table('products as a')
            ->join('stores as c', 'a.idlocal','=','c.idlocal')
            ->select('a.idproducto','a.nombre','a.codigo','a.slug','a.stock',
            'c.nombre as stores','a.descripcion','a.imagen','a.precio','a.estado')
            ->where('c.nombre','LIKE','%'.$request.'%')
            ->orwhere('a.codigo','LIKE','%'.$request.'%')
            ->orderBy('a.idproducto','desc')
            ->paginate(7);
           return view('store.storeProduct',compact('products'));
        }
        

        
      
    }
    
    public function localshow()
    {
        $stores= Store::all();
        //dd($stores);
        return view('store.showlocal',compact('stores'));
 
    }

}
