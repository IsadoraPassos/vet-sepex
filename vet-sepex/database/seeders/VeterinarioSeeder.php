<?php

namespace Database\Seeders;

use App\Models\Veterinario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeterinarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Veterinario::factory()->count(3)->create();
    }
}
