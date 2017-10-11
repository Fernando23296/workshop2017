<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function index()
    {
    	$stores= Store::all();
    	//dd($stores);
    	return view('store.index',compact('stores'));
    }
}
