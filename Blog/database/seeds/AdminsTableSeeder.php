<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name            = "Hoàng Văn Huấn";
        $admin->email           = "huanhoang2121@gmail.com";
        $admin->password        = Hash::make("12345678");
        $admin->created_at      = date('Y-m-d H:i:s');
        $admin->save();
    }
}
