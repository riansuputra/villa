<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Villa;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Villa::create([
            'name' => 'Villa Paradise',
            'description' => 'Luxury villa with private pool',
            'address' => 'Bali',
            'whatsapp' => '628123456789',
            'map_url' => 'https://maps.google.com'
        ]);
    }
}
