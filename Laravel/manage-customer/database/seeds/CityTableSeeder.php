<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run()
    {
        $dataArray = [];
        for ($i = 0; $i < 5; $i++) {
            array_push($dataArray, [
                'name' => str_random(10)
            ]);
        }
        DB::table('cities')->insert($dataArray);
    }
}
