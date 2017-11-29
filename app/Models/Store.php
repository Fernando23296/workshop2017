<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table='stores';
    
    protected $primaryKey='idlocal';
    
    public $timestamps = false;
    
    protected $fillable=[
    	
    	'nombre',
    	'slug',
    	'imagen',
    	'descripcion',
    	'condicion'

    ];
    protected $guarded=[

    ];
}
