<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    //to run this function use (php artisan db:seed --class=UserSeeder)
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Maha',
            'last_name' => 'Ahmed',
            'email' => 'user2@email.com',
            'password' => Hash::make('123456'),
            'role_id' => 2,
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Soha',
            'last_name' => 'Ashraf',
            'email' => 'user3@email.com',
            'password' => Hash::make('password'),
            'role_id' => 3,
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);
    }
}
