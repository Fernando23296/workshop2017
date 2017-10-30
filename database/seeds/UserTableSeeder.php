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
				'email' => 'iki@gmail.com',
				'password' =>\Hash::make('123456'),
				'created_at'=>new DateTime,
				'updated_at'=>new DateTime
			],
			[
				'name' => 'bruno',
				'email' => 'bruno@gmail.com',
				'password' =>\Hash::make('123456'),
				'created_at'=>new DateTime,
				'updated_at'=>new DateTime
			],
			);

			User::Insert($data);

    }
}
