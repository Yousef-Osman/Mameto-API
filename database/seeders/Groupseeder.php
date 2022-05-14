<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Groupseeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            'Name' => 'General Group',
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);

        DB::table('groups')->insert([
            'Name' => 'Parents Group',
            'created_at' => Carbon::parse('2022-05-14'),
            'updated_at' => Carbon::parse('2022-05-14'),
        ]);
    }
}
