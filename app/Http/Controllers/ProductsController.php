<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;

use App\Http\Requests\ProductsFormRequest;

use App\Models\Product;

use App\Models\Store;

use DB;

class ProductsController extends Controller
{
    public function __construct()
    {

    }
    public function index($request)
    {
        if ($request)
        {
            $products=DB::table('products as a')
            ->join('stores as c', 'a.idlocal','=','c.idlocal')
            ->select('a.idproducto','a.nombre','a.codigo','a.slug','a.stock',
            'c.nombre as stores','a.descripcion','a.imagen','a.precio','a.estado','a.nombre','c.slug')
            ->where('c.nombre','LIKE','%'.$request.'%')
            ->orderBy('a.idproducto','desc')
            ->paginate(7);
            return view('store.products.index',["products"=>$products,"searchText"=>$request]);
        }
    }
    public function create()
    {
        $stores=DB::table('stores')->where('condicion','=','1')->get();       
        return view("store.products.create",["stores"=>$stores]);
    }
    public function store (ProductsFormRequest $request)
    {
        $products= new Product;
        
        $products->codigo=$request->get('codigo');
        $products->nombre=$request->get('nombre');
        $products->slug=$request->get('slug');
        $products->stock=$request->get('stock');
        $products->descripcion=$request->get('descripcion');
        $products->estado='Activo';
        $products->idlocal=$request->get('idlocal');

        	if(Input::hasfile('imagen')){
        		$file=Input::file('imagen');
        		$file->move(public_path().'/imagenes/products/',$file->getClientOriginalName());
        		$products->imagen=$file->getClientOriginalName();
            }
        $products->precio=$request->get('precio');
        $products->save();
        return Redirect::to('store/show');

    }
    public function show($id)
    {
        return view("store.products.show",["products"=>Product::findOrFail($id)]);
    }
   
    public function edit($id)
    {
        $products = Product::find($id);
        $stores=DB::table('stores')->where('condicion','=','1')->get();
        return view('store.products.edit1',["products"=>$products,"stores"=>$stores]);
    }
    
    public function update(ProductsFormRequest $request,$id)
    {
        
        $products=Product::findOrFail($id);
        $products->codigo=$request->get('codigo');
        $products->nombre=$request->get('nombre');
        $products->slug=$request->get('slug');
        $products->stock=$request->get('stock');
        $products->descripcion=$request->get('descripcion');
        

            if(Input::hasfile('imagen')){
                $file=Input::file('imagen');
                $file->move(public_path().'/imagenes/products/',$file->getClientOriginalName());
                $products->imagen=$file->getClientOriginalName();
            }
        $products->precio=$request->get('precio');
        $products->idlocal=$request->get('idlocal');
        $products->update();
        return Redirect::to('store/show');
    }

    /*public function destroy($id)
    {
        $products=Product::findOrFail($id);
        $products->estado='Inactivo';
        $products->update();
        return Redirect::to('store/products');
    }*/
    
    
    
    
}
