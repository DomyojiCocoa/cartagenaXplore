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
            'categories_id' => '1',
            'rating' => '3',
            'information_below' => 'No sé',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Excursión a la naturaleza',
            'categories_id' => '2',
            'rating' => '4',
            'information_below' => 'Explora los hermosos paisajes.',
            'url_img' => 'img/prueba.jpg',
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
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Recorrido histórico',
            'categories_id' => '5',
            'rating' => '4',
            'information_below' => 'Aprende sobre la historia del lugar.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Senderismo',
            'categories_id' => '6',
            'rating' => '5',
            'information_below' => 'Disfruta de la naturaleza en un camino.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Día de playa',
            'categories_id' => '7',
            'rating' => '4',
            'information_below' => 'Relájate en la playa y disfruta del sol.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Fiesta en la noche',
            'categories_id' => '8',
            'rating' => '5',
            'information_below' => 'Disfruta de la vida nocturna local.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Actividades familiares',
            'categories_id' => '9',
            'rating' => '4',
            'information_below' => 'Diversión para toda la familia.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Fotografía de paisajes',
            'categories_id' => '10',
            'rating' => '5',
            'information_below' => 'Captura la belleza del lugar.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Concierto en vivo',
            'categories_id' => '11',
            'rating' => '4',
            'information_below' => 'Disfruta de música en un ambiente local.',
            'url_img' => 'img/prueba.jpg',
        ]);

        Activities::create([
            'title' => 'Voluntariado',
            'categories_id' => '12',
            'rating' => '3',
            'information_below' => 'Participa en actividades de turismo responsable.',
            'url_img' => 'img/prueba.jpg',
        ]);
        Activities::create([
            'title' => 'Paseo en bote',
            'categories_id' => '1', // Deporte
            'rating' => '4',
            'information_below' => 'Navega por las aguas cristalinas de Cartagena.',
        ]);

        Activities::create([
            'title' => 'Excursión en kayak',
            'categories_id' => '2', // Aventura
            'rating' => '5',
            'information_below' => 'Explora los manglares y playas cercanas en kayak.',
        ]);

        Activities::create([
            'title' => 'Tour de grafitis',
            'categories_id' => '3', // Cultural
            'rating' => '5',
            'information_below' => 'Explora el arte urbano y conoce su historia.',
        ]);

        Activities::create([
            'title' => 'Clase de cocina local',
            'categories_id' => '4', // Gastronomía
            'rating' => '5',
            'information_below' => 'Aprende a cocinar platos tradicionales de Cartagena.',
        ]);

        Activities::create([
            'title' => 'Recorrido por fortalezas',
            'categories_id' => '5', // Historia
            'rating' => '4',
            'information_below' => 'Descubre las fortalezas y murallas históricas de Cartagena.',
        ]);

        Activities::create([
            'title' => 'Avistamiento de aves',
            'categories_id' => '6', // Naturaleza
            'rating' => '4',
            'information_below' => 'Descubre la diversidad de aves en su hábitat natural.',
        ]);

        Activities::create([
            'title' => 'Día de spa en la playa',
            'categories_id' => '7', // Relax
            'rating' => '5',
            'information_below' => 'Relájate con masajes y un día de spa frente al mar.',
        ]);

        Activities::create([
            'title' => 'Fiesta en barco',
            'categories_id' => '8', // Vida Nocturna
            'rating' => '5',
            'information_below' => 'Disfruta de una fiesta en barco con música en vivo.',
        ]);

        Activities::create([
            'title' => 'Parque acuático familiar',
            'categories_id' => '9', // Familia
            'rating' => '4',
            'information_below' => 'Diversión en el agua para todas las edades.',
        ]);

        Activities::create([
            'title' => 'Safari fotográfico',
            'categories_id' => '10', // Fotografía
            'rating' => '5',
            'information_below' => 'Captura la vida silvestre y la naturaleza de Cartagena.',
        ]);

        Activities::create([
            'title' => 'Concierto al aire libre',
            'categories_id' => '11', // Eventos
            'rating' => '4',
            'information_below' => 'Disfruta de música en vivo en un entorno espectacular.',
        ]);

        Activities::create([
            'title' => 'Limpieza de playas',
            'categories_id' => '12', // Turismo Responsable
            'rating' => '3',
            'information_below' => 'Participa en actividades de limpieza y preservación de playas.',
        ]);

    }
}
