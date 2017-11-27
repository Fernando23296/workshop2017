<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(

			[
				'tipo_rol' => 'administrador',
				'valor' => '1',
			],
			[
				'tipo_rol' => 'usuario',
				'valor' => '2',
			],
			[
				'tipo_rol' => 'cliente',
				'valor' => '3',
			],
			);

			Admin::Insert($data);

    }
    }
}
