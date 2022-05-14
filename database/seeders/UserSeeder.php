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
            'name' => 'user3',
            'email' => 'user3@email.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);
    }
}
