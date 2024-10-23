<?php

namespace Database\Seeders;

use App\Models\Activities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activities::create([
            'title' => 'Salir',
            'categories_id' => '1',
            'rating' => '3',
            'information_below' => 'No sé',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Excursión a la naturaleza',
            'categories_id' => '2',
            'rating' => '4',
            'information_below' => 'Explora los hermosos paisajes.',
            'url_img' => 'img/prueba2.png',
        ]);

        Activities::create([
            'title' => 'Visita a museos',
            'categories_id' => '3',
            'rating' => '5',
            'information_below' => 'Conoce la historia de la región.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Cata de comida local',
            'categories_id' => '4',
            'rating' => '5',
            'information_below' => 'Degusta los platos típicos de la zona.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Recorrido histórico',
            'categories_id' => '5',
            'rating' => '4',
            'information_below' => 'Aprende sobre la historia del lugar.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Senderismo',
            'categories_id' => '6',
            'rating' => '5',
            'information_below' => 'Disfruta de la naturaleza en un camino.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Día de playa',
            'categories_id' => '7',
            'rating' => '4',
            'information_below' => 'Relájate en la playa y disfruta del sol.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Fiesta en la noche',
            'categories_id' => '8',
            'rating' => '5',
            'information_below' => 'Disfruta de la vida nocturna local.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Actividades familiares',
            'categories_id' => '9',
            'rating' => '4',
            'information_below' => 'Diversión para toda la familia.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Fotografía de paisajes',
            'categories_id' => '10',
            'rating' => '5',
            'information_below' => 'Captura la belleza del lugar.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Concierto en vivo',
            'categories_id' => '11',
            'rating' => '4',
            'information_below' => 'Disfruta de música en un ambiente local.',
            'url_img' => 'img/prueba3.png',
        ]);

        Activities::create([
            'title' => 'Voluntariado',
            'categories_id' => '12',
            'rating' => '3',
            'information_below' => 'Participa en actividades de turismo responsable.',
            'url_img' => 'img/prueba3.png',
        ]);
    }
}
