<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            
            'user_id' => 2,
            'post_id' => 1,
            'content' => 'كومنت تجريبى',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);
    }
}
