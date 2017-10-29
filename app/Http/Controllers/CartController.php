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
        if(!\Session::has('cart')) \Session ::put('cart', array());
    }
    
    public function show()
    {
        //return \Session::get('cart');
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart', compact('cart','total'));
    }
    public function add(Product $product)
    {
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

// Delete item
    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
// Update item 
    public function update(Product $product, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
// Trash cart
    public function trash()
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }
// Total
    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precio * $item->quantity;
        }

        return $total;
    }
    
}