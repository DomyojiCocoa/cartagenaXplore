<?php

namespace Database\Seeders;

use App\Models\ActivityTodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ActivityTodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActivityTodo::create([
            'info' => 'Disfruta de un recorrido nocturno por Cartagena en la tradicional chiva rumbera, acompañada de música en vivo (vallenato o champeta) y animación que te pondrá a bailar.',
            'activity_id' => 1,
        ]);

        ActivityTodo::create([
            'info' => 'Disfruta de un recorrido nocturno por Cartagena en la tradicional chiva rumbera, acompañada de música en vivo (vallenato o champeta) y animación que te pondrá a bailar.',
            'activity_id' => 1,
        ]);

        ActivityTodo::create([
            'info' => 'La chiva realiza paradas en lugares icónicos como el Mirador de la Popa o Las Bóvedas para disfrutar de las vistas de la ciudad iluminada y tomarse fotos.',
            'activity_id' => 1,
        ]);

        ActivityTodo::create([
            'info' => 'Termina el recorrido en una discoteca o lugar de fiesta, donde el grupo puede continuar la rumba en un ambiente vibrante y lleno de energía.',
            'activity_id' => 1,
        ]);

        ActivityTodo::create([
            'info' => 'Senderismo en el Jardín Botánico Guillermo Piñeres, camina por sus senderos y descubre una gran variedad de flora nativa, incluidas plantas medicinales y árboles tropicales.',
            'activity_id' => 2,
        ]);

        ActivityTodo::create([
            'info' => 'Visita al Santuario de Flora y Fauna Los Colorados, ubicado en el municipio de San Juan Nepomuceno (cerca de Cartagena), ofrece senderos donde podrás ver monos, iguanas y una gran variedad de aves en su hábitat natural.',
            'activity_id' => 2,
        ]);

        ActivityTodo::create([
            'info' => 'Tour por los manglares de La Boquilla, súbete a una canoa tradicional y explora los túneles naturales de manglares mientras aprendes sobre este ecosistema único de manos de los pescadores locales.',
            'activity_id' => 2,
        ]);

        ActivityTodo::create([
            'info' => 'Recorre la Ciénaga de La Virgen en kayak. Descubre este ecosistema de manglares mientras navegas por sus canales y observas diversas especies de aves y fauna local.',
            'activity_id' => 2,
        ]);

        ActivityTodo::create([
            'info' => 'Museo de Arte Moderno de Cartagena, descubre una impresionante colección de arte moderno y contemporáneo, con énfasis en artistas latinoamericanos.',
            'activity_id' => 3,
        ]);

        ActivityTodo::create([
            'info' => 'Museo del Oro Zenú, explora este museo dedicado a la historia y cultura de los pueblos indígenas Zenú, con una colección de piezas de oro y cerámica precolombina.',
            'activity_id' => 3,
        ]);

        ActivityTodo::create([
            'info' => 'Palacio de la Inquisición, conoce más sobre la historia de la inquisición en Cartagena, exhibiciones de objetos históricos, y una mirada al período colonial de la ciudad.',
            'activity_id' => 3,
        ]);

        ActivityTodo::create([
            'info' => 'Recorre las calles del Centro Histórico mientras pruebas delicias locales como arepas de huevo, carimañolas y empanadas de queso.',
            'activity_id' => 4,
        ]);

        ActivityTodo::create([
            'info' => 'Descubre los sabores de la región con catas de ron colombiano y dulces tradicionales como cocadas, panelitas de leche y alegrías hechas de maíz y melaza.',
            'activity_id' => 4,
        ]);

        ActivityTodo::create([
            'info' => 'Vive una experiencia auténtica en el mercado más icónico de Cartagena, donde podrás probar frutas tropicales únicas como zapote, guanábana y mamey.',
            'activity_id' => 4,
        ]);

        ActivityTodo::create([
            'info' => 'Recorre las calles empedradas de este sitio Patrimonio de la Humanidad, visitando plazas emblemáticas como la Plaza de los Coches y la Plaza Santo Domingo.',
            'activity_id' => 5,
        ]);

        ActivityTodo::create([
            'info' => 'Aprende sobre la historia colonial y los procesos de la Inquisición en Cartagena. También, visita el Palacio donde se proclamó la independencia de la ciudad en 1811.',
            'activity_id' => 5,
        ]);

        ActivityTodo::create([
            'info' => 'Conoce la historia de esta imponente fortaleza construida para defender la ciudad de los ataques de piratas. Explora sus túneles y disfruta de las vistas panorámicas de Cartagena.',
            'activity_id' => 5,
        ]);

        ActivityTodo::create([
            'info' => 'Una caminata moderada que te lleva hasta el convento en la cima del Cerro de La Popa. Desde allí, disfrutarás de vistas panorámicas de la ciudad y el Mar Caribe.',
            'activity_id' => 6,
        ]);

        ActivityTodo::create([
            'info' => 'Una caminata moderada que te lleva hasta el convento en la cima del Cerro de La Popa. Desde allí, disfrutarás de vistas panorámicas de la ciudad y el Mar Caribe.',
            'activity_id' => 6,
        ]);

        ActivityTodo::create([
            'info' => 'Senderos del Parque Natural Regional El Ceibal (Turbaco). A solo 30 minutos de Cartagena, este parque es perfecto para caminar entre bosque seco tropical. Podrás observar árboles nativos, flores exóticas y animales locales.',
            'activity_id' => 6,
        ]);

        ActivityTodo::create([
            'info' => 'Playa Blanca en Barú es uno de los destinos de playa más populares cerca de Cartagena, con aguas cristalinas y arena blanca. Ideal para nadar, tomar el sol y disfrutar de la tranquilidad.',
            'activity_id' => 7,
        ]);

        ActivityTodo::create([
            'info' => 'Islas del Rosario, archipiélago ofrece playas paradisíacas y aguas cristalinas. Puedes tomar un tour en lancha desde Cartagena y pasar el día explorando diferentes islas.',
            'activity_id' => 7,
        ]);

        ActivityTodo::create([
            'info' => 'Playas de Bocagrande son las playas más accesibles en la ciudad. Aunque más urbanas, cuentan con todas las comodidades y vistas al horizonte del Caribe.',
            'activity_id' => 7,
        ]);

        ActivityTodo::create([
            'info' => 'La Boquilla es una playa tranquila al norte de Cartagena, perfecta para quienes buscan una experiencia más local.',
            'activity_id' => 7,
        ]);


    }
}
