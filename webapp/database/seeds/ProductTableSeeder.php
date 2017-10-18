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
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'https://boliviancookbook.files.wordpress.com/2014/01/blog19.jpg',
				'precio' =>'5',
				'estado' =>'1',
				'idlocal'=>'1'
			],



			[
				
				'idproducto' => '2',
				'codigo' => '12346',
				'nombre' => 'Tucumana Especial',
				'slug' => 'tucumana-especial',
				'stock' =>'20',
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'http://www.sintagmas.com.ar/imagen/S525037empanadas.jpg',
				'precio' =>'6',
				'estado' =>'1',
				'idlocal'=>'1'
			],
			[
				
				'idproducto' => '3',
				'codigo' => '003',
				'nombre' => 'Salteña',
				'slug' => 'Salteña',
				'stock' =>'15',
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'http://sitios.entravision.com/img/upload/cc_galeria03_1.jpg',
				'precio' =>'5',
				'estado' =>'1',
				'idlocal'=>'2'
			],
			[
				
				'idproducto' => '4',
				'codigo' => '004',
				'nombre' => 'Hamburguesa',
				'slug' => 'Hamburguesa',
				'stock' =>'15',
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'http://diferenciaentre.info/wp-content/uploads/2016/07/hamburguesa.jpg',
				'precio' =>'19',
				'estado' =>'1',
				'idlocal'=>'3'
			],
			[
				
				'idproducto' => '5',
				'codigo' => '005',
				'nombre' => 'Pizza',
				'slug' => 'Pizza',
				'stock' =>'15',
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'https://ugc.kn3.net/i/origin/http://servinox.com.mx/blog/wp-content/uploads/2015/03/4b7d08_25661c7cb90c4a2a95f28b05c7fe11fb.jpg',
				'precio' =>'14',
				'estado' =>'1',
				'idlocal'=>'4'
			],
			[
				
				'idproducto' => '6',
				'codigo' => '006',
				'nombre' => 'Alitas de Pollo',
				'slug' => 'Alitas de Pollo',
				'stock' =>'15',
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'https://vivisaludable.com/wp-content/uploads/2016/05/Alitas-de-pollo.jpg',
				'precio' =>'15',
				'estado' =>'1',
				'idlocal'=>'5'
			],
			[
				
				'idproducto' => '7',
				'codigo' => '007',
				'nombre' => 'Combo Fiesta',
				'slug' => 'Combo Fiesta',
				'stock' =>'15',
				'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'imagen' =>'http://www.lajunglaplazadecomidas.com/wp-content/uploads/2012/08/COMBO-CUARTO-POLLO-presa-640x400.jpg',
				'precio' =>'23',
				'estado' =>'1',
				'idlocal'=>'5'
			],

			);

			Product::Insert($data);
	}

}
