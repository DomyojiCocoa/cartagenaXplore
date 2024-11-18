<div>
    <div id="map" style="width: 100%; height: 400px;"></div>

    <script>
        document.addEventListener('livewire:navigated', () => {
            // Configura tu API Key de Mapbox
            mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';

            // Inicializa el mapa centrado en Cartagena de Indias
            const map = new mapboxgl.Map({
                container: 'map', // ID del contenedor del mapa
                style: 'mapbox://styles/mapbox/streets-v11', // Estilo del mapa
                center: [-75.4794, 10.3910], // Coordenadas de Cartagena
                zoom: 13 // Nivel de zoom inicial
            });

            // Añade controles de navegación
            map.addControl(new mapboxgl.NavigationControl());

            // Configura y agrega el control de direcciones
            const directions = new MapboxDirections({
                accessToken: mapboxgl.accessToken,
                unit: 'metric',
                profile: 'mapbox/driving', // Tipo de ruta (conducción)
                alternatives: false, // Desactivar rutas alternativas
                geometries: 'geojson' // Tipo de geometría para asegurar precisión
            });

            map.addControl(directions, 'top-left');

            // Establece el punto de partida y el destino
            directions.setOrigin([-75.4794, 10.3910]); // Cartagena de Indias
            directions.setDestination([-75.498091, 10.397963]); // Coordenadas de destino

            // Escucha el evento 'route' para ajustar el zoom al tamaño de la ruta
            directions.on('route', (e) => {
                if (e.route && e.route.length > 0) {
                    const route = e.route[0];
                    const bounds = new mapboxgl.LngLatBounds();

                    route.geometry.coordinates.forEach((coord) => bounds.extend(coord));
                    map.fitBounds(bounds, {
                        padding: 50
                    });
                }
            });
        });
    </script>

</div>
