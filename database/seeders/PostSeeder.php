<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    }
}
