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
            'user_id' => 3,
            'post_id' => 1,
            'content' => '1 كومنت تجريبى',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id' => 1,
            'content' => '2 كومنت تجريبى',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'post_id' => 3,
            'content' => '3 كومنت تجريبى',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);

        DB::table('comments')->insert([
            'user_id' => 3,
            'post_id' => 2,
            'content' => '4 كومنت تجريبى',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);
    }
}
