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
				'slug' => 'Activo',
				'imagen' => 'https://rinconnorteno.com.ar/wordpress/wp-content/uploads/2016/05/slides01-1.jpg',
				'descripcion' => 'Las mas ricas tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],

			[
				'idlocal' => '2',
				'nombre' => 'local Clemencia',
				'slug' => 'Activo',
				'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/03/36/0f/ab/el-caminito-empanadas.jpg',
				'descripcion' => 'Las primeras tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],
			[
				'idlocal' => '3',
				'nombre' => 'local maria',
				'slug' => 'Inactivo',
				'imagen' => 'https://images0.tablondeanuncios.com/imagenesdin/81/93/foto819381.jpg',
				'descripcion' => 'Las primeras tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],
			[
				'idlocal' => '4',
				'nombre' => 'local Carlos',
				'slug' => 'Activo',
				'imagen' => 'https://images01.olx-st.com/ui/57/18/22/42/o_1496083982_3fd81a385cd734fb41e63eeced5dca68.jpg',
				'descripcion' => 'Las primeras tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],
			[
				'idlocal' => '5',
				'nombre' => 'local Raul',
				'slug' => 'Inactivo',
				'imagen' => 'http://www.turronesagut.com/modules//smartblog/images/17-single-default.jpg',
				'descripcion' => 'Las primeras tucumanas de la calle 2 de obrajes.',
				'condicion' =>'1'
			],


			);

			Store::Insert($data);
	}

}

