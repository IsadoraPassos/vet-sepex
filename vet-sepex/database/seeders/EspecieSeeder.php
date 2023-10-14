<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especie')->insert(['nome' => 'Gato',]);
        DB::table('especie')->insert(['nome' => 'Cachorro',]);
        DB::table('especie')->insert(['nome' => 'Ave',]);
    }
}
