<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminTableSeeder extends Seeder
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
				'name' => 'bruno',
				'email' => 'fernando23296@gmail.com',
				'password' =>\Hash::make('123456'),
				'job_title' => 'Developer',
				'created_at'=>new DateTime,
				'updated_at'=>new DateTime
			],
			);

			Admin::Insert($data);

    }
}
