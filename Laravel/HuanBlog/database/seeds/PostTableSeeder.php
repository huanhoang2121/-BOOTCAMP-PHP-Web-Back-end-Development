<?php

use Illuminate\Database\Seeder;
use App\Summernote;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $dataArray = [];
        for ($i = 0; $i < 2; $i++) {
            array_push($dataArray, [
                'title' => str_random(10),
                'image' => str_random(10),
                'add_date' => date("Y-m-d", mt_rand(1, time())),
                'category_id' => random_int(1, 5),
                'content' => str_random(100)
            ]);
        }
        DB::table('posts')->insert($dataArray);
    }
}
