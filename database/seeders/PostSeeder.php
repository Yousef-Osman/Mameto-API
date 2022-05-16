<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            
            'user_id' => 2,
            'group_id' => 1,
            'content' => 'انا ام جديدة وطفلى بيعيط كتير بليل اعمل ايه؟',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);

        DB::table('posts')->insert([
            
            'user_id' => 2,
            'group_id' => 2,
            'content' => 'بوست تجريبى رقم 2',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);

        DB::table('posts')->insert([
            
            'user_id' => 3,
            'group_id' => 1,
            'content' => 'بوست تجريبى رقم 3',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);
    }
}
