<?php

use Illuminate\Database\Seeder;
use App\Models\user;
class UserTableSeeder extends Seeder
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
				'name' => 'erick',
				'last_name' => 'quisbert',
				'email' => 'iki@gmail.com',
				'user' => 'erickiki',
				'password' =>\Hash::make('123456'),
				'type' =>'admin',
				'active' =>'1',
				'address' =>'calle cap. luis rivero, kollasuyo la portada',
				'created_at'=>new DateTime,
				'updated_at'=>new DateTime
			],
			[
				'name' => 'bruno',
				'last_name' => 'silva',
				'email' => 'bruno@gmail.com',
				'user' => 'brunosilva',
				'password' =>\Hash::make('123456'),
				'type' =>'user',
				'active' =>'1',
				'address' =>'calle cap. luis rivero, kollasuyo la portada',
				'created_at'=>new DateTime,
				'updated_at'=>new DateTime
			],
			);

			User::Insert($data);

    }
}
