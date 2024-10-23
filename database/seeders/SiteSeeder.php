<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'name' => 'Centro Histórico',
            'eslogan' => 'El corazón de Cartagena.',
            'introduction' => 'Descubre la magia del centro histórico de Cartagena.',
            'history' => 'Fundado en 1533, el centro histórico es un sitio lleno de historia y cultura.',
            'extra' => 'Pasea por sus coloridas calles y disfruta de la arquitectura colonial.',
            'url_img' => 'img/prueba2.png',
        ]);

        Site::create([
            'name' => 'Castillo San Felipe de Barajas',
            'eslogan' => 'La fortaleza más grande de América.',
            'introduction' => 'Una impresionante obra de ingeniería militar del siglo XVII.',
            'history' => 'Construido para proteger la ciudad de los ataques, es un símbolo de resistencia.',
            'extra' => 'Ofrece vistas panorámicas de la ciudad y el mar.',
            'url_img' => 'img/prueba3.png',
        ]);

        Site::create([
            'name' => 'Islas del Rosario',
            'eslogan' => 'Un paraíso natural.',
            'introduction' => 'Disfruta de playas de arena blanca y aguas cristalinas.',
            'history' => 'Declaradas Parque Nacional Natural, son ideales para el ecoturismo.',
            'extra' => 'Actividades como snorkeling y buceo son imperdibles.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Site::create([
            'name' => 'La Heroica',
            'eslogan' => 'La ciudad amurallada.',
            'introduction' => 'Un destino lleno de historia, cultura y belleza arquitectónica.',
            'history' => 'Cartagena fue un puerto clave durante la colonización española.',
            'extra' => 'Visita sus museos y disfruta de su vibrante vida nocturna.',
            'url_img' => 'img/prueba2.png',
        ]);

        Site::create([
            'name' => 'Playa Blanca',
            'eslogan' => 'Un rincón de tranquilidad.',
            'introduction' => 'Relájate en una de las playas más hermosas de Cartagena.',
            'history' => 'Un lugar ideal para disfrutar del sol y el mar.',
            'extra' => 'Gastronomía local y deportes acuáticos están disponibles.',
            'url_img' => 'img/prueba2.png',
        ]);

        Site::create([
            'name' => 'Convento de la Popa',
            'eslogan' => 'La vista más alta de Cartagena.',
            'introduction' => 'Un lugar de paz y espiritualidad con vistas espectaculares.',
            'history' => 'Construido en el siglo XVII, es un símbolo de la fe cartagenera.',
            'extra' => 'Visita su hermoso claustro y la iglesia.',
            'url_img' => 'img/prueba2.png',
        ]);
    }
}
