<div class="w-screen">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/locales/es.js'></script>
    <script>
        document.addEventListener('livewire:navigated', function() {
            var calendarEl = document.getElementById('calendar');

            // Función para inicializar el calendario
            function initializeCalendar() {
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,dayGridWeek,dayGridDay'
                    },
                    dayHeaderFormat: { weekday: 'long' },
                    editable: true,
                    events: @json($activities->map(function($activity) {
                        return [
                            'title' => $activity->title,
                            'start' => $activity->start_date ?: null, // Asegúrate de que este campo exista
                            'description' => $activity->description
                        ];
                    })),
                    eventDrop: function(info) {
                        var today = new Date().toISOString().split('T')[0];
                        if (info.event.startStr < today) {
                            alert('No puedes mover el evento a una fecha anterior a la actual.');
                            info.revert(); // Regresa el evento a su posición original
                        } else {
                            // Emitir evento Livewire para actualizar el evento en el backend
                            Livewire.emit('updateEvent', info.event.id, info.event.startStr);
                        }
                    },
                    eventClick: function(info) {
                        alert(info.event.title + ': ' + info.event.extendedProps.description);
                    },
                });

                calendar.render();
            }

            // Inicializa el calendario
            initializeCalendar();

            // Re-inicializa el calendario después de un cambio en Livewire
            Livewire.on('calendarUpdated', function() {
                calendar.destroy(); // Destruye el calendario anterior
                initializeCalendar(); // Vuelve a inicializar
            });
        });
    </script>

    <div id='calendar' class="w-1/2"></div>
</div>
