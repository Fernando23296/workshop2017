<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class StoreTableSeeder extends Seeder
{

	public function run()
	{
		$data = array(

			[
				'idlocal' => '1',
				'nombre' => 'Tucumanas La Marta',
				'slug' => 'tucumanas-la-martita',
				'imagen' => 'http://volketa.org/wp-content/uploads/2011/05/empanadas1.jpg',
				'descripcion' => 'Las mas ricas tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],

			[
				'idlocal' => '2',
				'nombre' => 'Tucumanas Clemencia',
				'slug' => 'tucumanas-clemencia',
				'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/03/36/0f/ab/el-caminito-empanadas.jpg',
				'descripcion' => 'Las primeras tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],


			);

			Store::Insert($data);
	}

}

