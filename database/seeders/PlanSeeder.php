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
            'name' => 'Parchaito',
            'user_id' => 1,
            'categories_id' => '1',
            'url_img' => 'img/prueba.jpg',
        ]);
        Plan::create([
            'name' => 'Fuchibol',
            'user_id' => 1,
            'categories_id' => '2',
            'url_img' => 'img/prueba.jpg',
        ]);
        Plan::create([
            'name' => 'Quemar la u',
            'user_id' => 1,
            'categories_id' => '3',
            'url_img' => 'img/prueba.jpg',
        ]);
    }
}
