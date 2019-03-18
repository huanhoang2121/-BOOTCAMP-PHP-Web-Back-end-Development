<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name            = "Sức khỏe";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Giải trí";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Văn hóa";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Kinh doanh";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Giáo dục";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Thể thao";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Xã hội";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->name            = "Thế giới";
        $category->created_at      = date('Y-m-d H:i:s');
        $category->save();
    }
}
