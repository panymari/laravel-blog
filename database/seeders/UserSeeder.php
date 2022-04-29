<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                "avatar" => "uploads/admin.png",
            ],
            [
                'name' => 'user_name1',
                'email' => 'user1@gmail.com',
                'password' => 'password1223',
                "avatar" => "uploads/user1.png",
            ],
            [
                'name' => 'user_name2',
                'email' => 'user2@gmail.com',
                'password' => 'password656',
                "avatar" => "uploads/user2.png",
            ],
            [
                'name' => 'user_name3',
                'email' => 'user3@gmail.com',
                'password' => 'password8767',
                "avatar" => "uploads/user3.png",
            ],
            [
                'name' => 'user_name4',
                'email' => 'user4@gmail.com',
                'password' => 'password4545',
                "avatar" => "uploads/user4.png",
            ],
        ]);
    }
}
