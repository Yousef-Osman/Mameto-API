<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialists')->insert([
            'phone' => '01211111111',
            'job_name'=> 'اخصائى اطفال',
            'bio'=> 'ملخص السيرة الذاتية يضاف الى هذه الخانة',
            'workplace'=> 'مستشفى الصفوة',
            'national_id'=>'29002120403876',
            'user_id'=> 3,
            'created_at' => Carbon::parse('2022-05-15'),
            'updated_at' => Carbon::parse('2022-05-15'),
        ]);
    }
}
