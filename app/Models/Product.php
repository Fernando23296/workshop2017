<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    
    protected $primaryKey='idproducto';
    
    public $timestamps = false;
    
    protected $fillable=[
    	
    	'codigo',
    	'nombre',
    	'slug',
    	'stock',
    	'descripcion',
    	'imagen',
    	'precio',
    	'estado',
    	'idlocal'

    ];
    protected $guarded=[

    ];
}
