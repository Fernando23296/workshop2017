<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct()
    {
    	if(!\Session::has('cart')) \Session::put('cart',array());
    }

    //SHOW CART
    public function show()
    {
    	return \Session::get('cart');
    }


    //ADD ITEM

    public function add(Product $product)
    {
    	$cart = \Session::get('cart');
    	$product->quantity=1;
    	$cart[$product->slug] = $product;
    
    	\Session::put('cart', $cart);
		
		return redirect()->route('cart-show');

    }
    
    //DELETE ITEM
    
    //UPDATE ITEM
    
    //TRASH CART

    //TOTAL
}
