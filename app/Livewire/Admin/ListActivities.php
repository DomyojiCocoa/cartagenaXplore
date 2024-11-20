<?php

namespace App\Livewire\Admin;

use App\Models\Activities;
use App\Models\ActivityTodo;
use App\Models\ActivityWhatCover;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Str;

class ListActivities extends Component
{
    use WithFileUploads;
    public $mostrarModal = false;
    public $actividadDetalle;
    public $mostrarModal2 = false;
    public $mostrarModalCreate = false;
    public $actividadUpdate;
    public $name;
    public $description;
    public $img;

    protected $rules = [
        'img' => 'required|image|max:2048', // Tamaño máximo 2MB
    ];
    public function openCreate() {
        $this->name = '';
        $this->description = '';
        $this->img = '';
        $this->mostrarModalCreate = true;
    }


    public function updatedImage()
    {
        $this->validate();

        $filename = Str::random(10) . '-' . $this->image->getClientOriginalName();

        $this->image->storeAs('img', $filename, 'public');

        $this->img = public_path('img/' . $filename);

        session()->flash('message', 'Imagen subida correctamente: ' . $filename);
    }


    public function open() {
        $this->mostrarModal = true;
    }
    public function closeCreate() {
        $this->mostrarModalCreate = false;
    }

    public function close() {
        $this->mostrarModal = false;
    }
    public function pruebanoc(Activities $actividad) {
        $this->mostrarModal2 = true;
        $this->actividadUpdate = $actividad;
        $this->name = $actividad->title;
        $this->description = $actividad->information_below;
        $this->img = $actividad->url_img;

        // dd($this->actividadUpdate);
    }

    public function mostrarActividad($id)
    {
        $this->actividadDetalle = Activities::find($id);
        $this->mostrarModal = true;
    }

    public function prueba() {
        dd($this->actividadDetalle);
    }

    public function delete($activityId)
    {
        $activi = Activities::findOrFail($activityId);
        $activi->delete();
        $this->redirectRoute('adminActivities');

    }

    public function create()
    {
        // Validación de imagen
        $this->validate();

        // Generación del nombre de archivo
        $filename = Str::random(10) . '-' . $this->img->getClientOriginalName();

        // Almacenamiento de la imagen en la carpeta public/img
        $this->img->storeAs('img', $filename, 'public');

        // Guardar la ruta de la imagen en la base de datos (sin la ruta completa, solo la relativa)
        $imgPath = 'img/' . $filename;

        // Crear el registro en la base de datos
        $actividad = Activities::create([
            'title' => $this->name,
            'rating' => 0,
            'information_below' => $this->description,
            'url_img' => $imgPath,  // Ruta relativa
        ]);
        foreach ($this->campos as $campo) {
            // Asegúrate de agregar la lógica adecuada para almacenar los datos
            ActivityTodo::create([
                'info' => $campo,
                'activity_id' => $actividad->id,
            ]);
        }
        foreach ($this->campos2 as $campo) {
            // Asegúrate de agregar la lógica adecuada para almacenar los datos
            ActivityWhatCover::create([
                'info' => $campo,
                'activity_id' => $actividad->id,
            ]);
        }

        // Opcionalmente, limpiar los campos después de guardar
        $this->campos = [''];
        // Limpiar campos y cerrar modal
        $this->name = '';
        $this->description = '';
        $this->img = null;  // Resetear la imagen
        $this->mostrarModalCreate = false;

        session()->flash('message', 'Actividad creada con éxito.');
        $this->redirectRoute('adminActivities');
    }

    public $campos = [''];  // Un array para almacenar los valores de los inputs
    public $campos2 = [''];  // Un array para almacenar los valores de los inputs

    // Método para agregar un campo de texto adicional
    public function agregarCampo()
    {
        $this->campos[] = '';  // Agrega un nuevo campo vacío al array
    }
    public function agregarCampo2()
    {
        $this->campos2[] = '';  // Agrega un nuevo campo vacío al array
    }

    // Método para guardar los datos en la base de datos
    public function guardarDatos()
    {
        foreach ($this->campos as $campo) {
            // Asegúrate de agregar la lógica adecuada para almacenar los datos
            Activities::create([
                'title' => $campo,
                'rating' => 0,
                'information_below' => $this->description,
                'url_img' => 'a',  // Ruta relativa
            ]);
        }

        // Opcionalmente, limpiar los campos después de guardar
        $this->campos = [''];
    }
    public function render()
    {
        $actividades = Activities::withTrashed()->paginate(7);
        return view('livewire.admin.list-activities', [
            'actividades' => $actividades,
        ]);
    }
}
