<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Deporte',
        ]);
        Category::create([
            'name' => 'Aventura',
        ]);
        Category::create([
            'name' => 'Cultural',
        ]);
        Category::create([
            'name' => 'Gastronomía',
        ]);
        Category::create([
            'name' => 'Historia',
        ]);
        Category::create([
            'name' => 'Naturaleza',
        ]);
        Category::create([
            'name' => 'Relax',
        ]);
        Category::create([
            'name' => 'Vida Nocturna',
        ]);
        Category::create([
            'name' => 'Familia',
        ]);
        Category::create([
            'name' => 'Fotografía',
        ]);
        Category::create([
            'name' => 'Eventos',
        ]);
        Category::create([
            'name' => 'Turismo Responsable',
        ]);
    }
}
