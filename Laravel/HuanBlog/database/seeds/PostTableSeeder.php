<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        for ($i = 0; $i < 2; $i++) {
            array_push($dataArray, [
                'title' => str_random(10),
                'image' => str_random(10),
                'add_date' => date("Y-m-d", mt_rand(1, time())),
                'content' => str_random(100)
            ]);
        }
        DB::table('posts')->insert($dataArray);
    }
}
