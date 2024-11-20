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
            'name' => 'Plaza de San Pedro Claver',
            'eslogan' => 'Un homenaje al "Apóstol de los Esclavos".',
            'introduction' => 'La Plaza de San Pedro Claver es un lugar emblemático de Cartagena, rodeado de arquitectura colonial y esculturas contemporáneas que narran la historia de uno de los personajes más importantes de la ciudad. Este espacio es una mezcla de devoción religiosa, arte y memoria histórica.',
            'history' => 'Nombrada en honor a San Pedro Claver, un misionero jesuita que dedicó su vida a defender los derechos de los esclavos africanos, la plaza es el lugar donde se encuentra la iglesia y el convento que llevan su nombre. La iglesia, construida en el siglo XVII, alberga los restos de este santo, conocido como el "esclavo de los esclavos". El espacio ha sido testigo de importantes eventos religiosos y culturales, y sus alrededores han evolucionado con la ciudad.',
            'extra' => 'Admira la arquitectura de la iglesia y el convento, explora el Museo de San Pedro Claver en su interior y disfruta de las esculturas contemporáneas de hierro que decoran la plaza, las cuales representan escenas de la vida cotidiana de Cartagena.',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/4/42/Plaza_de_San_Pedro_Claver%2C_Cartagena_01.jpg',
        ]);

        Site::create([
            'name' => 'Muelle de los Pegasos',
            'eslogan' => 'La puerta al mar Caribe.',
            'introduction' => 'El Muelle de los Pegasos es un icónico punto de partida para explorar la bahía de Cartagena. Adornado con dos imponentes esculturas de caballos alados, este lugar combina vistas impresionantes del agua, actividad portuaria y un ambiente lleno de vida.',
            'history' => 'Construido como parte del sistema portuario de Cartagena, el muelle ha sido durante décadas un punto clave para el transporte marítimo y turístico. Su nombre proviene de las esculturas de bronce de los pegasos, creadas por el artista cartagenero Héctor Lombana, que se han convertido en un símbolo de la ciudad. El muelle es también el lugar donde se celebran eventos culturales y es el punto de partida para excursiones hacia las Islas del Rosario y otros destinos cercanos.',
            'extra' => 'Pasea por el muelle al atardecer, disfruta de la brisa marina y contempla las vistas del centro histórico y la bahía. Desde aquí, también puedes tomar un bote para explorar las islas cercanas o simplemente relajarte en un lugar lleno de encanto.',
            'url_img' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/48/2f/97/pegasos-1.jpg?w=1000&h=-1&s=1',
        ]);

        Site::create([
            'name' => 'Casa Rafael Núñez',
            'eslogan' => 'El hogar del autor del himno nacional.',
            'introduction' => 'La Casa Rafael Núñez es un museo dedicado a la vida y legado del expresidente y poeta Rafael Núñez, una figura clave en la historia política y cultural de Colombia. Este lugar combina arquitectura tradicional caribeña con importantes exposiciones históricas.',
            'history' => 'Construida en el siglo XIX, esta casa fue el hogar de Rafael Núñez durante los años más importantes de su vida. Aquí escribió algunos de sus discursos más memorables y trabajó en la redacción de la Constitución de 1886, una de las más importantes en la historia del país. La casa ha sido restaurada para preservar su arquitectura original y se ha convertido en un espacio para conocer más sobre la historia política y literaria de Colombia.',
            'extra' => 'Recorre sus jardines llenos de vegetación tropical, explora las salas con documentos originales y objetos personales de Núñez, y aprende sobre su influencia en la formación de la identidad nacional colombiana.',
            'url_img' => 'https://cloudfront-us-east-1.images.arcpublishing.com/vanguardiaeluniversal/I2IH6VFXAZGVDKJMMMR2HN4K6A.jpg',
        ]);

        Site::create([
            'name' => 'La Torre del Reloj',
            'eslogan' => 'La entrada oficial a la ciudad amurallada.',
            'introduction' => 'La Torre del Reloj es uno de los monumentos más reconocibles de Cartagena. Ubicada en la entrada principal de la ciudad amurallada, esta estructura combina historia, funcionalidad y belleza arquitectónica.',
            'history' => 'Construida en el siglo XVII como parte de las fortificaciones de Cartagena, la torre originalmente albergaba la entrada principal de la ciudad, conocida como la Puerta del Reloj. En el siglo XIX, se agregó el reloj que hoy corona la torre. Este sitio no solo era un punto de acceso, sino también un lugar de encuentro y comercio. Su arquitectura refleja la influencia española con detalles clásicos que han perdurado a lo largo del tiempo.',
            'extra' => 'Disfruta de una visita a este emblemático lugar, pasea por la Plaza de los Coches que está justo al frente y descubre la historia de la ciudad desde uno de sus lugares más icónicos.',
            'url_img' => 'https://www.siontours.com.co/wp-content/uploads/2022/03/view-of-cartagena-indias-colombia-scaled.jpg',
        ]);

        Site::create([
            'name' => 'Las Bóvedas',
            'eslogan' => 'De cárcel colonial a mercado artesanal.',
            'introduction' => 'Las Bóvedas son un conjunto de arcos y pasillos que fueron originalmente construidos como almacenes militares y refugios durante los ataques enemigos. Hoy, este lugar se ha transformado en un mercado donde los visitantes pueden adquirir productos artesanales únicos.',
            'history' => 'Construidas en el siglo XVIII como parte de las murallas de Cartagena, las bóvedas servían como almacenes de pólvora y refugio para los soldados. Durante el período colonial tardío, fueron utilizadas como prisión. Tras su restauración en el siglo XX, se convirtieron en un centro para la promoción de la artesanía local, preservando su importancia histórica y adaptándose a la modernidad.',
            'extra' => 'Explora las tiendas donde encontrarás joyas hechas a mano, textiles, cerámica y otros productos típicos de la región. Además, disfruta de la historia que emana de cada rincón de este lugar, mientras contemplas la arquitectura bien conservada de los arcos.',
            'url_img' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/cb/fb/6f/las-bovedas.jpg?w=1200&h=-1&s=1',
        ]);

        Site::create([
            'name' => 'Convento de la Popa',
            'eslogan' => 'La cima espiritual de Cartagena.',
            'introduction' => 'Ubicado en la colina más alta de Cartagena, el Convento de la Popa ofrece vistas espectaculares de la ciudad y el mar Caribe. Este lugar sagrado combina historia, religión y belleza natural en un solo sitio.',
            'history' => 'Fundado en 1607 por los frailes agustinos, el convento se construyó en la cima de un cerro llamado “La Popa” por su semejanza con la popa de un barco. Durante siglos, fue un lugar de retiro espiritual y refugio en tiempos de conflicto. Su santuario alberga la imagen de la Virgen de la Candelaria, patrona de Cartagena, venerada por los locales y visitantes por sus milagros. El convento ha sobrevivido saqueos y restauraciones, y sigue siendo un lugar de peregrinación y reflexión.',
            'extra' => 'Recorre sus pasillos llenos de historia, visita su capilla adornada y admira los jardines interiores con flores tropicales. No te pierdas la vista panorámica desde la terraza, donde puedes contemplar tanto el casco histórico como los modernos rascacielos de Bocagrande.',
            'url_img' => 'https://www.dronestagr.am/wp-content/uploads/2015/08/la-popa-parrot-10.jpg',
        ]);

        Site::create([
            'name' => 'Plaza de los Coches',
            'eslogan' => 'La puerta de entrada a la historia de Cartagena.',
            'introduction' => 'La Plaza de los Coches es el primer punto que ven los visitantes al entrar al centro histórico. Esta animada plaza es un símbolo de la mezcla de comercio, cultura y tradición que define a Cartagena.',
            'history' => 'En tiempos coloniales, esta plaza era conocida como la Plaza del Esclavo, ya que servía como mercado de esclavos traídos desde África. Posteriormente, cambió su nombre y se convirtió en un centro de intercambio comercial. Está rodeada por edificios coloniales con balcones de madera y el famoso Portal de los Dulces, donde se venden golosinas tradicionales como cocadas y alegrías. En el centro de la plaza se encuentra una estatua de Pedro de Heredia, fundador de Cartagena.',
            'extra' => 'Disfruta del ambiente histórico mientras pruebas dulces típicos, admira la arquitectura colonial y utiliza este punto como base para explorar el resto de la ciudad amurallada. Es también un lugar perfecto para tomar fotografías al atardecer, cuando los colores de los edificios se realzan con la luz cálida.',
            'url_img' => 'https://www.gpsmycity.com/img/gd_sight/60758.jpg',
        ]);

        Site::create([
            'name' => 'Teatro Adolfo Mejía (Teatro Heredia)',
            'eslogan' => 'El escenario artístico de Cartagena.',
            'introduction' => 'El Teatro Adolfo Mejía es uno de los espacios culturales más importantes de Cartagena. Su elegante diseño arquitectónico y su historia lo convierten en una joya tanto para los amantes de las artes como para los curiosos de la historia.',
            'history' => 'Construido en 1911 para conmemorar el centenario de la independencia de Cartagena, el teatro fue inspirado en el diseño de los teatros italianos. Durante décadas, acogió eventos artísticos, políticos y sociales. Tras un período de deterioro, fue restaurado en la década de 1990, recuperando su esplendor original. Su interior está decorado con frescos que representan escenas históricas y mitológicas, mientras que su acústica es considerada una de las mejores del país.',
            'extra' => 'Asiste a una obra de teatro, un concierto o una presentación durante el Festival Internacional de Música de Cartagena. Si no hay eventos, realiza un recorrido guiado para admirar su diseño arquitectónico y aprender más sobre su legado cultural.',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/d/da/Teatro_Heredia%2C_Cartagena%2C_Colombia.jpg',
        ]);

        Site::create([
            'name' => 'El Barrio de Bocagrande',
            'eslogan' => 'La Cartagena moderna frente al Caribe.',
            'introduction' => 'Bocagrande es la cara contemporánea de Cartagena, conocida por sus rascacielos, hoteles de lujo, restaurantes y playas. Este barrio combina modernidad con la calidez del Caribe.',
            'history' => 'Originalmente, Bocagrande era una zona residencial y poco desarrollada. Con el auge del turismo en Cartagena durante el siglo XX, se transformó en el epicentro de la oferta hotelera y comercial de la ciudad. Su ubicación estratégica frente al mar Caribe y su cercanía al casco histórico lo convierten en uno de los lugares más visitados.',
            'extra' => 'Pasea por su avenida principal, llena de tiendas y restaurantes, relájate en sus playas o disfruta de la vista nocturna desde sus bares en azoteas. Es el lugar perfecto para quienes buscan combinar el turismo histórico con comodidades modernas.',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Cartagena_skyline_%2826141851828%29.jpg',
        ]);

        Site::create([
            'name' => 'Monumento a los Zapatos Viejos',
            'eslogan' => 'Un tributo a la poesía y la cultura popular.',
            'introduction' => 'Este monumento, situado cerca del Castillo San Felipe de Barajas, es una escultura que rinde homenaje al poeta cartagenero Luis Carlos López y su famoso poema *A mi Ciudad Nativa*. Es una de las paradas favoritas para los turistas que buscan fotos creativas.',
            'history' => 'El poema de López, escrito a principios del siglo XX, compara la ciudad de Cartagena con unos "zapatos viejos", reconociendo su importancia histórica y emocional, pero también su desgaste por el paso del tiempo. La escultura, creada por el artista Héctor Lombana, representa unos zapatos gigantes hechos de bronce y es un símbolo de orgullo para los cartageneros.',
            'extra' => 'Visita este monumento después de recorrer el Castillo San Felipe. Tómate una foto dentro de los zapatos y reflexiona sobre el significado poético de este homenaje a la identidad de Cartagena.',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/3/38/Castillo_de_San_Felipe_de_Barajas_y_Monumento_a_los_zapatos_viejos.JPG',
        ]);

        Site::create([
            'name' => 'El Parque de Bolívar',
            'eslogan' => 'Un oasis en el corazón de la ciudad amurallada.',
            'introduction' => 'El Parque de Bolívar es un espacio lleno de historia, rodeado de árboles centenarios, fuentes y esculturas que rinden homenaje al Libertador Simón Bolívar. Es un lugar ideal para disfrutar de un descanso en medio del bullicio del centro histórico.',
            'history' => 'Este parque, originalmente conocido como la Plaza Mayor, fue renombrado en honor a Simón Bolívar tras la independencia de Colombia. En la época colonial, servía como escenario para eventos públicos y celebraciones oficiales. Hoy en día, alberga una estatua ecuestre del Libertador y es punto de encuentro para locales y turistas.',
            'extra' => 'Disfruta de la tranquilidad del parque mientras observas a los artistas callejeros, las palomas que merodean por el lugar y la impresionante arquitectura de los edificios que lo rodean, como el Museo del Oro Zenú y el Palacio de la Inquisición.',
            'url_img' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgXgkttxdjn5BbN068Aj7QamrACKrqDC8mWzSIrHTQFt0X6Nho-dsTGnwB6ayMknThJvqiZdpPH6ixpioWJUORkqN3gC1Plvug327CfYs_eo4zPb9cLYrJlFWw2-AiAidVwVTyxhvl7rEA/s1600/plaza-bolivar.jpg',
        ]);

        Site::create([
            'name' => 'El Palacio de la Inquisición',
            'eslogan' => 'Un museo que revela los secretos más oscuros de la historia.',
            'introduction' => 'Este edificio colonial, de impresionante fachada barroca, fue el centro de operaciones del Tribunal de la Santa Inquisición en Cartagena. Hoy alberga un museo que documenta esta sombría etapa de la historia y expone la evolución de la ciudad desde la época precolombina.',
            'history' => 'Construido en 1610, el palacio fue utilizado para procesar a personas acusadas de herejía y otros delitos religiosos. Durante más de dos siglos, funcionó como una sede del Tribunal del Santo Oficio, famoso por sus juicios y torturas. Tras la abolición de la Inquisición en 1811, el edificio se convirtió en un monumento histórico.',
            'extra' => 'Recorre sus salones y patios para descubrir artefactos, documentos y herramientas utilizadas durante los juicios inquisitoriales. También puedes explorar su colección de piezas arqueológicas y aprender sobre las culturas indígenas que habitaron la región.',
            'url_img' => 'https://two.travel/wp-content/uploads/2024/07/44157323422_05b57cf071_b.jpg',
        ]);

        Site::create([
            'name' => 'El Museo del Oro Zenú',
            'eslogan' => 'Un tributo al arte y la historia precolombina.',
            'introduction' => 'El Museo del Oro Zenú es un espacio dedicado a preservar y compartir la riqueza cultural de las comunidades indígenas que habitaron la región del Caribe colombiano. Este pequeño pero fascinante museo muestra la habilidad y la creatividad de los Zenúes a través de su impresionante orfebrería.',
            'history' => 'El museo se centra en la cultura Zenú, conocida por sus sistemas de drenaje, su avanzada organización social y su producción de oro. Sus piezas, muchas de ellas de oro puro, son testigos de una civilización que floreció mucho antes de la llegada de los colonizadores europeos.',
            'extra' => 'No te pierdas las exhibiciones de piezas de oro, cerámica y textiles que reflejan la vida cotidiana y las creencias espirituales de los Zenúes. Las explicaciones detalladas hacen que esta experiencia sea tanto educativa como visualmente impactante.',
            'url_img' => 'https://lp-cms-production.imgix.net/2019-06/28040b0384661e2ca91c8700fca58a39-museo-del-oro-zenu.jpg',
        ]);

        Site::create([
            'name' => 'Plaza Santo Domingo',
            'eslogan' => 'El lugar donde la historia y la vida social se encuentran.',
            'introduction' => 'La Plaza Santo Domingo es una de las plazas más emblemáticas de Cartagena. Su ambiente vibrante está rodeado de restaurantes, bares y la famosa escultura "Gertrudis", obra del reconocido artista colombiano Fernando Botero.',
            'history' => 'La plaza toma su nombre de la Iglesia de Santo Domingo, una de las más antiguas de la ciudad, construida en el siglo XVI. Durante siglos, ha sido un lugar de encuentro social y cultural, testigo de la evolución de la ciudad y su gente.',
            'extra' => 'Disfruta de una cena al aire libre en uno de los restaurantes que rodean la plaza, observa a los artistas callejeros y toma una foto junto a "Gertrudis", cuya leyenda dice que acariciarla trae buena suerte.',
            'url_img' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/87/60/61/desde-los-balcones.jpg?w=1200&h=-1&s=1',
        ]);

        Site::create([
            'name' => 'Islas del Rosario',
            'eslogan' => 'Un paraíso natural a pocos kilómetros de la ciudad.',
            'introduction' => 'El archipiélago de las Islas del Rosario es un conjunto de 27 islas que forman parte del Parque Nacional Natural Corales del Rosario. Este destino es ideal para quienes buscan playas de aguas cristalinas, arrecifes de coral y una conexión única con la naturaleza.',
            'history' => 'Protegidas como parque natural desde 1977, las islas son hogar de una rica biodiversidad marina y terrestre. En ellas, se puede aprender sobre los esfuerzos de conservación de los arrecifes de coral y las comunidades que han habitado la zona durante generaciones.',
            'extra' => 'Relájate en playas paradisíacas, realiza snorkel o buceo para explorar la vida marina, y disfruta de un almuerzo típico caribeño en uno de los eco-resorts. No olvides visitar el Oceanario, donde puedes aprender más sobre la fauna marina local.',
            'url_img' => 'https://www.cartagenaexplorer.com/wp-content/uploads/2020/07/Depositphotos_156273740_xl-2015-scaled.jpg',
        ]);

        Site::create([
            'name' => 'Castillo San Felipe de Barajas',
            'eslogan' => 'La fortaleza más grande de América.',
            'introduction' => 'El Castillo San Felipe de Barajas es un emblema de Cartagena de Indias, considerado una de las estructuras militares más impresionantes de la época colonial. Construido sobre el cerro San Lázaro, este colosal castillo ofrece vistas espectaculares y representa el ingenio estratégico de los españoles para proteger la ciudad de invasores.',
            'history' => 'Construido inicialmente en 1536 y ampliado significativamente en 1657, el Castillo San Felipe fue diseñado para resistir ataques de piratas y ejércitos enemigos. Durante siglos, sirvió como la primera línea de defensa de Cartagena. Su sistema de túneles subterráneos estaba diseñado para garantizar comunicaciones seguras y una rápida evacuación, y aún hoy es posible recorrer algunos de ellos. La fortaleza nunca fue conquistada, a pesar de los múltiples intentos de asalto, como el famoso ataque del barón inglés Edward Vernon en 1741.',
            'extra' => 'Hoy, el Castillo San Felipe es una atracción turística de renombre mundial. Puedes caminar por sus muros, explorar sus oscuros túneles y aprender sobre su historia a través de visitas guiadas. Al atardecer, la vista desde la cima del castillo ofrece una perspectiva inolvidable de la ciudad y el mar Caribe.',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/b/bc/62_-_Carthag%C3%A8ne_-_D%C3%A9cembre_2008.jpg',
        ]);

        Site::create([
            'name' => 'Las Murallas de Cartagena',
            'eslogan' => 'Un legado de protección y resistencia.',
            'introduction' => 'Las murallas de Cartagena son un impresionante conjunto de fortificaciones construidas para proteger la ciudad de los constantes ataques de piratas y fuerzas enemigas. Este patrimonio de la humanidad no solo encierra siglos de historia, sino también el corazón cultural y arquitectónico de la ciudad.',
            'history' => 'La construcción de las murallas comenzó en el siglo XVI y se extendió por más de 200 años. Este sistema defensivo fue diseñado por ingenieros militares españoles, como Cristóbal de Roda y Antonio de Arévalo. Las murallas, de más de 11 kilómetros de largo, rodean el casco antiguo y están formadas por baluartes, bastiones y portones estratégicamente ubicados. Resistieron múltiples asaltos, incluido el célebre ataque de Francis Drake en 1586, que motivó nuevas reformas en la defensa de la ciudad.',
            'extra' => 'Pasear por las murallas al atardecer es una experiencia única. Desde los baluartes como el de Santo Domingo y Santa Clara, puedes disfrutar de vistas panorámicas al mar Caribe mientras te sumerges en la atmósfera romántica e histórica de Cartagena.',
            'url_img' => 'https://lp-cms-production.imgix.net/2019-06/edab12fcaae0eb0f48639b70c6111b44-las-murallas.jpg',
        ]);

        Site::create([
            'name' => 'Getsemaní',
            'eslogan' => 'El barrio más vibrante de Cartagena.',
            'introduction' => 'Getsemaní es un barrio lleno de vida, cultura y color. Durante décadas fue el hogar de la clase trabajadora de Cartagena, pero en los últimos años ha experimentado un renacimiento como epicentro artístico y cultural. Es conocido por sus calles empedradas, murales vibrantes y una mezcla única de tradición y modernidad.',
            'history' => 'En el pasado, Getsemaní desempeñó un papel clave durante la independencia de Colombia, siendo el lugar donde los patriotas se organizaron y planearon estrategias. Aunque alguna vez fue un barrio olvidado, hoy en día es uno de los destinos más turísticos y dinámicos de Cartagena. Sus murales cuentan historias de resistencia, identidad y comunidad, convirtiéndolo en un museo al aire libre.',
            'extra' => 'Explorar Getsemaní es sumergirse en la cultura local. Visita la Plaza de la Trinidad, donde locales y turistas se reúnen todas las noches, prueba delicias típicas en sus restaurantes y no te pierdas los espectáculos de música y baile que animan sus calles. Es un lugar ideal para vivir la auténtica esencia cartagenera.',
            'url_img' => 'https://i0.wp.com/espartedelviaje.com/wp-content/uploads/2022/06/cartagena-de-indias-getsemani-scaled.jpg?w=1136&h=1704&ssl=1',
        ]);

        Site::create([
            'name' => 'Plaza de la Aduana',
            'eslogan' => 'El epicentro del poder colonial.',
            'introduction' => 'La Plaza de la Aduana es la plaza más grande de Cartagena y uno de los lugares con mayor valor histórico. Rodeada de majestuosos edificios coloniales, esta plaza era el corazón administrativo y comercial de la ciudad durante la época colonial.',
            'history' => 'En el siglo XVI, la plaza se usaba como punto de entrada para mercancías y esclavos que llegaban al puerto de Cartagena. Aquí se situaban las oficinas de aduana, la residencia del gobernador y edificios clave para el comercio transatlántico. La estatua de Cristóbal Colón, ubicada en el centro de la plaza, fue erigida para conmemorar el legado colonial de la ciudad.',
            'extra' => 'Hoy, la plaza es un punto de encuentro popular para turistas y locales. Disfruta de eventos culturales al aire libre, explora los edificios históricos que la rodean y aprende más sobre el pasado colonial de Cartagena en un entorno lleno de vida.',
            'url_img' => 'https://cartagenacolombiarentals.com/wp-content/uploads/2016/04/Plaza-de-la-Aduana-in-Cartagena.jpg',
        ]);

        Site::create([
            'name' => 'La Catedral de Santa Catalina de Alejandría',
            'eslogan' => 'Un ícono religioso de la ciudad.',
            'introduction' => 'La Catedral de Santa Catalina de Alejandría es uno de los edificios más antiguos y emblemáticos de Cartagena. Su imponente fachada y su diseño arquitectónico reflejan la rica herencia religiosa y cultural de la ciudad.',
            'history' => 'La construcción de la catedral comenzó en 1577, pero fue interrumpida debido a los ataques del pirata Francis Drake en 1586. Finalmente, fue completada en el siglo XVII. Su estilo renacentista con elementos barrocos se puede apreciar en su campanario, que se ha convertido en uno de los símbolos más reconocibles de la ciudad.',
            'extra' => 'La catedral es un lugar de culto activo y también una atracción turística. En su interior encontrarás altares decorados, vitrales de colores y una atmósfera de paz. Desde su campanario, se pueden disfrutar vistas únicas del casco histórico de Cartagena.',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/Catedral_de_Cartagena-Fachada.jpg',
        ]);

    }
}
