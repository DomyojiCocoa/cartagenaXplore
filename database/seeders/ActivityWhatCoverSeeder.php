<?php

namespace Database\Seeders;

use App\Models\Activities;
use App\Models\ActivityWhatCover;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ActivityWhatCoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActivityWhatCover::create([
            'info' => 'Recorrido nocturno por Cartagena en la chiva rumbera, un transporte típico lleno de música y diversión.',
            'activity_id' => 1,
        ]);

        ActivityWhatCover::create([
            'info' => 'Animación y música en vivo a bordo, con géneros tradicionales como vallenato y champeta para ambientar la noche.',
            'activity_id' => 1,
        ]);

        ActivityWhatCover::create([
            'info' => 'Paradas en lugares emblemáticos como el Mirador de la Popa y Las Bóvedas, ideales para fotos nocturnas.',
            'activity_id' => 1,
        ]);

        ActivityWhatCover::create([
            'info' => 'Finaliza el recorrido en una discoteca o espacio de fiesta donde puedes continuar la rumba.',
            'activity_id' => 1,
        ]);

        ActivityWhatCover::create([
            'info' => 'Explora el Jardín Botánico Guillermo Piñeres con senderos que exhiben flora nativa, plantas medicinales y árboles tropicales.',
            'activity_id' => 2,
        ]);

        ActivityWhatCover::create([
            'info' => 'Camina por el Santuario de Flora y Fauna Los Colorados, un lugar lleno de vida silvestre como monos y aves en su hábitat natural.',
            'activity_id' => 2,
        ]);

        ActivityWhatCover::create([
            'info' => 'Navega en una canoa por los túneles de manglares de La Boquilla, guiado por pescadores locales que comparten su conocimiento del ecosistema.',
            'activity_id' => 2,
        ]);

        ActivityWhatCover::create([
            'info' => 'Descubre la Ciénaga de La Virgen en kayak, recorriendo canales entre manglares y observando fauna y aves únicas.',
            'activity_id' => 2,
        ]);

        ActivityWhatCover::create([
            'info' => 'Visita el Museo de Arte Moderno de Cartagena, con una destacada colección de arte moderno y contemporáneo latinoamericano.',
            'activity_id' => 3,
        ]);

        ActivityWhatCover::create([
            'info' => 'Explora el Museo del Oro Zenú, donde descubrirás piezas de oro y cerámica que cuentan la historia de los pueblos indígenas Zenú.',
            'activity_id' => 3,
        ]);

        ActivityWhatCover::create([
            'info' => 'Recorre el Palacio de la Inquisición, un espacio histórico que ofrece exhibiciones sobre la inquisición y el período colonial en Cartagena.',
            'activity_id' => 3,
        ]);

        ActivityWhatCover::create([
            'info' => 'Recorre el Centro Histórico mientras disfrutas de bocados locales como arepas de huevo, carimañolas y empanadas de queso.',
            'activity_id' => 4,
        ]);

        ActivityWhatCover::create([
            'info' => 'Prueba catas de ron colombiano junto con dulces tradicionales como cocadas, panelitas de leche y alegrías de maíz y melaza.',
            'activity_id' => 4,
        ]);

        ActivityWhatCover::create([
            'info' => 'Explora el mercado más icónico de Cartagena, donde podrás degustar frutas tropicales como zapote, guanábana y mamey.',
            'activity_id' => 4,
        ]);

        ActivityWhatCover::create([
            'info' => 'Camina por el Centro Histórico, Patrimonio de la Humanidad, y visita plazas icónicas como la Plaza de los Coches y Plaza Santo Domingo.',
            'activity_id' => 5,
        ]);

        ActivityWhatCover::create([
            'info' => 'Descubre la historia colonial y los eventos de la Inquisición en Cartagena, visitando el Palacio donde se proclamó la independencia en 1811.',
            'activity_id' => 5,
        ]);

        ActivityWhatCover::create([
            'info' => 'Explora el Castillo de San Felipe, una fortaleza histórica con túneles fascinantes y vistas panorámicas de la ciudad.',
            'activity_id' => 5,
        ]);

        ActivityWhatCover::create([
            'info' => 'Realiza una caminata hasta el convento en la cima del Cerro de La Popa para disfrutar de vistas panorámicas del Mar Caribe y la ciudad.',
            'activity_id' => 6,
        ]);

        ActivityWhatCover::create([
            'info' => 'Explora los senderos del Parque Natural Regional El Ceibal, a 30 minutos de Cartagena, con bosque seco tropical, flora y fauna local.',
            'activity_id' => 6,
        ]);

        ActivityWhatCover::create([
            'info' => 'El plan en Playa Blanca incluye transporte ida y vuelta desde Cartagena, acceso a zonas de playa privada, y un almuerzo típico caribeño con opciones como pescado frito o pollo. El horario suele ser de 8:00 a.m. a 4:00 p.m.',
            'activity_id' => 7,
        ]);

        ActivityWhatCover::create([
            'info' => 'La excursión a las Islas del Rosario abarca un tour en lancha, una visita guiada por el archipiélago, tiempo para snorkel en arrecifes y un almuerzo típico. La salida es a las 9:00 a.m. y el retorno alrededor de las 5:00 p.m.',
            'activity_id' => 7,
        ]);

        ActivityWhatCover::create([
            'info' => 'El plan para las playas de Bocagrande incluye acceso a tumbonas y sombrillas, bebidas de cortesía como limonada o agua de coco, y opciones para practicar deportes acuáticos. El horario es flexible según tu preferencia.',
            'activity_id' => 7,
        ]);

        ActivityWhatCover::create([
            'info' => 'La visita a La Boquilla incluye transporte y una experiencia local con guías de la comunidad. El plan ofrece un refrigerio típico (arepas o frutas tropicales) y una actividad opcional como paseo en canoa por los manglares. Se realiza entre 9:00 a.m. y 3:00 p.m.',
            'activity_id' => 7,
        ]);



    }
}
