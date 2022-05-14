<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'Name' => 'Admin',
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);

        DB::table('roles')->insert([
            'Name' => 'Specialist',
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);

        DB::table('roles')->insert([
            'Name' => 'Parent',
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);
    }
}
