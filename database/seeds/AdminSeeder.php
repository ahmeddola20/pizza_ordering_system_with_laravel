<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Admin','email'=>'admin@admin.com' , 'password' =>bcrypt(1234567890)]);
       // Admin::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'phone' => '0101111002', 'password' => bcrypt(1234567890)]);
    }
}
