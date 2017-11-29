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
				'idrol_usuario' => '1',
				'idrol' => '1',
				'iduser' => '1',
			],
			[
				'idrol_usuario' => '1',
				'idrol' => '2',
				'iduser' => '2',
			],
			[
				'idrol_usuario' => '1',
				'idrol' => '1',
				'iduser' => '2',
			],
			);

			Roles::Insert($data);

    }
    }
}
