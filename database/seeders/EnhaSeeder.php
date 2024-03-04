<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enhas')->insert(array(
            array(
                'nama' => 'Jay', 
                'posisi' => 'Rapper'
            ),
            array(
                'nama' => 'Ni-Ki', 
                'posisi' => 'Dancer'
            ),
            array(
                'nama' => 'Sunghoon', 
                'posisi' => 'Singer'
            ),
        ));
    }
}
