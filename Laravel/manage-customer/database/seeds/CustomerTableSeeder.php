<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{

    public function run()
    {
        $dataArray = [];
        for ($i = 0; $i < 10; $i++) {
            array_push($dataArray, [
                'name' => str_random(5),
                'dob' => date("Y-m-d", mt_rand(1, time())),
                'email' => str_random(10) . '@gmail.com',
                'city_id' => random_int(1, 5),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        DB::table('customers')->insert($dataArray);
    }
}
