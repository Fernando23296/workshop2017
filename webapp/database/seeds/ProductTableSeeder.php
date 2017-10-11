<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{

	public function run()
	{
		$data = array(

			[
				'idproducto' => '1',
				'codigo' => '12345',
				'nombre' => 'Tucumana',
				'slug' => 'tucumana',
				'stock' =>'15',
				'descripcion' =>'Empanada cubierta de carne',
				'imagen' =>'http://www.sintagmas.com.ar/imagen/S525037empanadas.jpg',
				'estado' =>'1',
				'idlocal'=>'1'
			],



			[
				
				'idproducto' => '2',
				'codigo' => '12346',
				'nombre' => 'Tucumana Especial',
				'slug' => 'tucumana-especial',
				'stock' =>'20',
				'descripcion' =>'Empanada cubierta de carne y huevo',
				'imagen' =>'http://www.sintagmas.com.ar/imagen/S525037empanadas.jpg',
				'estado' =>'1',
				'idlocal'=>'2'
			],


			);

			Product::Insert($data);
	}

}
