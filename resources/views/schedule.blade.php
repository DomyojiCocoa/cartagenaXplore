<x-app-layout>
    <div class="flex align-center items-center">
        <h1>Calendario de Citas</h1>
        <!-- Renderiza el componente de calendario -->
        <livewire:appointments-calendar
            week-starts-at="0"
            :key="now()->timestamp"  :drag-and-drop-enabled="true"
        />
        
    </div>

    {{-- <div class="w-1/2" >

        <div id="calendar" ></div>
    </div>

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener el contenedor del calendario
            var calendarEl = document.getElementById('calendar');

            // Inicializar FullCalendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',  // Vista inicial: mes completo
                selectable: true,             // Permitir seleccionar fechas
                editable: true,               // Permitir mover eventos
                headerToolbar: {              // Barra de herramientas para navegar entre meses/años
                    left: 'prev,next today',  // Botones de navegación
                    center: 'title',          // Mostrar el título actual (mes/año)
                    right: 'dayGridMonth,timeGridWeek,timeGridDay' // Vistas disponibles (mes, semana, día)
                },
                events: [                     // Eventos predefinidos
                    {
                        @php
                            $prueba = 'Si se puede';
                        @endphp
                        title: $prueba,
                        start: '2024-10-25'
                    },
                    {
                        title: 'Evento 2',
                        start: '2024-10-28',
                        end: '2024-10-30'
                    },
                    {
                        title: 'Conferencia',
                        start: '2024-11-01',
                        end: '2024-11-01'
                    }
                ],
                select: function(info) {       // Evento al seleccionar una fecha
                    let today = new Date().setHours(0, 0, 0, 0);  // Día de hoy sin horas
                    let selectedDate = new Date(info.startStr).setHours(0, 0, 0, 0); // Fecha seleccionada sin horas

                    // Verificar si la fecha seleccionada es anterior al día de hoy
                    if (selectedDate < today) {
                        alert('No puedes crear eventos en fechas pasadas.');
                        return;
                    }

                    let title = prompt('Ingrese el título del evento:');
                    if (title) {
                        calendar.addEvent({
                            title: title,
                            start: info.startStr,
                            end: info.endStr
                        });
                    }
                    calendar.unselect();      // Deseleccionar al terminar
                },
                eventDrop: function(info) {    // Evento al mover un evento (arrastrar)
                    let today = new Date().setHours(0, 0, 0, 0);  // Día de hoy sin horas
                    let eventDate = new Date(info.event.start).setHours(0, 0, 0, 0); // Fecha del evento movido sin horas

                    // Verificar si el evento se mueve a una fecha anterior al día de hoy
                    if (eventDate < today) {
                        alert('No puedes mover eventos a fechas pasadas.');
                        info.revert();        // Revertir la posición del evento
                    }
                },
                eventClick: function(info) {   // Click en un evento
                    alert('Evento: ' + info.event.title);
                }
            });

            // Renderizar el calendario
            calendar.render();
        });
    </script> --}}


    <livewire:test />
    {{-- <livewire:calendar :idPlan="$id"/> --}}
</x-app-layout>
