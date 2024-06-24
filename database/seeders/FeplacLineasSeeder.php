<?php

namespace Database\Seeders;

use App\Models\FeplacLineas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeplacLineasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeplacLineas::create(['nombre' => 'Blend']);
        FeplacLineas::create(['nombre' => 'Étnica']);
        FeplacLineas::create(['nombre' => 'Hilados']);
        FeplacLineas::create(['nombre' => 'Nature']);
        FeplacLineas::create(['nombre' => 'Nórdica']);
        FeplacLineas::create(['nombre' => 'Urban Concept']);
    }
}
