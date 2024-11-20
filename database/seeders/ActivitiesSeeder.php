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
            'title' => 'Paseo en Chiva Rumbera',
            'rating' => '3',
            'information_below' => 'Disfruta de un paseo acompañado de buena música',
            'url_img' => 'img/chiva.jpg',
        ]);

        Activities::create([
            'title' => 'Excursión a la naturaleza',
            'rating' => '4',
            'information_below' => 'Explora los hermosos paisajes.',
            'url_img' => 'img/paseo.jpg',
        ]);

        Activities::create([
            'title' => 'Visita a museos',
            'rating' => '5',
            'information_below' => 'Conoce la historia de la región.',
            'url_img' => 'img/paseomuseo.jpg',
        ]);

        Activities::create([
            'title' => 'Cata de comida local',
            'rating' => '5',
            'information_below' => 'Degusta los platos típicos de la zona.',
            'url_img' => 'img/comida.jpg',
        ]);

        Activities::create([
            'title' => 'Recorrido histórico',
            'rating' => '4',
            'information_below' => 'Aprende sobre la historia del lugar.',
            'url_img' => 'img/histo.jpg',
        ]);

        Activities::create([
            'title' => 'Senderismo',
            'rating' => '5',
            'information_below' => 'Disfruta de la naturaleza en un camino.',
            'url_img' => 'img/sende.jpg',
        ]);

        Activities::create([
            'title' => 'Día de playa',
            'rating' => '4',
            'information_below' => 'Relájate en la playa y disfruta del sol.',
            'url_img' => 'img/playa.jpg',
        ]);

        // Activities::create([
        //     'title' => 'Fiesta en la noche',
        //     'rating' => '5',
        //     'information_below' => 'Disfruta de la vida nocturna local.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Actividades familiares',
        //     'rating' => '4',
        //     'information_below' => 'Diversión para toda la familia.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Fotografía de paisajes',
        //     'rating' => '5',
        //     'information_below' => 'Captura la belleza del lugar.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Concierto en vivo',
        //     'rating' => '4',
        //     'information_below' => 'Disfruta de música en un ambiente local.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Voluntariado',
        //     'rating' => '3',
        //     'information_below' => 'Participa en actividades de turismo responsable.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Paseo en bote',
        //     'rating' => '4',
        //     'information_below' => 'Navega por las aguas cristalinas de Cartagena.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Excursión en kayak',
        //     'rating' => '5',
        //     'information_below' => 'Explora los manglares y playas cercanas en kayak.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Tour de grafitis',
        //     'rating' => '5',
        //     'information_below' => 'Explora el arte urbano y conoce su historia.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Clase de cocina local',
        //     'rating' => '5',
        //     'information_below' => 'Aprende a cocinar platos tradicionales de Cartagena.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Recorrido por fortalezas',
        //     'rating' => '4',
        //     'information_below' => 'Descubre las fortalezas y murallas históricas de Cartagena.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Avistamiento de aves',
        //     'rating' => '4',
        //     'information_below' => 'Descubre la diversidad de aves en su hábitat natural.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Día de spa en la playa',
        //     'rating' => '5',
        //     'information_below' => 'Relájate con masajes y un día de spa frente al mar.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Fiesta en barco',
        //     'rating' => '5',
        //     'information_below' => 'Disfruta de una fiesta en barco con música en vivo.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Parque acuático familiar',
        //     'rating' => '4',
        //     'information_below' => 'Diversión en el agua para todas las edades.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Safari fotográfico',
        //     'rating' => '5',
        //     'information_below' => 'Captura la vida silvestre y la naturaleza de Cartagena.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Concierto al aire libre',
        //     'rating' => '4',
        //     'information_below' => 'Disfruta de música en vivo en un entorno espectacular.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);

        // Activities::create([
        //     'title' => 'Limpieza de playas',
        //     'rating' => '3',
        //     'information_below' => 'Participa en actividades de limpieza y preservación de playas.',
        //     'url_img' => 'img/prueba.jpg',
        // ]);
    }
}
