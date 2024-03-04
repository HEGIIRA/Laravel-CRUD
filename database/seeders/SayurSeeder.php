<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SayurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sayurs')->insert(array(
            array(
                'nama-sayur' => 'jengkol', 
                'harga' => '1jt'
            ),
            array(
                'nama-sayur' => 'bayam', 
                'harga' => '2jt'
            ),
            array(
                'nama-sayur' => 'jamur', 
                'harga' => '3jt'
            ),
           
        ));
    }
}
