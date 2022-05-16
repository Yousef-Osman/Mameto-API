<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KidsAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kids_areas')->insert([
            'name' => 'حضانة السلام',
            'phone' => '01211111111',
            'open_time' => Carbon::createFromTime(6, 0, 0),
            'close_time' => Carbon::createFromTime(16, 15, 0),
            'child_min_age' => 3,
            'child_max_age' => 8,
            'address' => 'جليم شارع عبد السلام عارف',
            'city' => 'الاسكندرية',
            'owner_name' => 'خالد يوسف',
            'owner_phone' => '01011111111',
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);
    }
}
