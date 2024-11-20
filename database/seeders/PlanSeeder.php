<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Exploración Cultural en Cartagena',
            'user_id' => 1,
            'url_img' => 'img/plan1.png',
        ]);

        Plan::create([
            'name' => 'Aventura en las Islas del Rosario',
            'user_id' => 1,
            'url_img' => 'img/plan2.png',
        ]);

        Plan::create([
            'name' => 'Gastronomía y Tradición',
            'user_id' => 1,
            'url_img' => 'img/plan3.png',
        ]);
    }
}
