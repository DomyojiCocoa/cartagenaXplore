<?php

namespace App\Livewire\Admin;

use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class ListSites extends Component
{
    use WithPagination;

    public $editModalVisible = false;
    public $createModalVisible = false;
    public $deleteModalVisible = false;
    public $siteIdBeingEdited;
    public $siteIdBeingDeleted;
    public $name_site;
    public $address;
    public $schedule_open;
    public $schedule_close;
    public $weather_preferable;
    public $url_img;
    public $url_map;

    protected $paginationTheme = 'tailwind';

    // Abrir modal de edición
    public function edit($siteId)
    {
        $this->editModalVisible = true;
        $site = Site::findOrFail($siteId);
        $this->siteIdBeingEdited = $site->id;
        $this->name_site = $site->name_site;
        $this->address = $site->address;
        $this->schedule_open = $site->schedule_open;
        $this->schedule_close = $site->schedule_close;
        $this->weather_preferable = $site->weather_preferable;
        $this->url_img = $site->url_img;
        $this->url_map = $site->url_map;
    }

    // Actualizar sitio
    public function update()
    {
        $this->validate([
            'name_site' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'schedule_open' => 'required|date_format:H:i',
            'schedule_close' => 'required|date_format:H:i',
            'weather_preferable' => 'required|string|max:255',
            'url_img' => 'nullable|url',
            'url_map' => 'nullable|url',
        ]);

        $site = Site::findOrFail($this->siteIdBeingEdited);
        $site->update([
            'name_site' => $this->name_site,
            'address' => $this->address,
            'schedule_open' => $this->schedule_open,
            'schedule_close' => $this->schedule_close,
            'weather_preferable' => $this->weather_preferable,
            'url_img' => $this->url_img,
            'url_map' => $this->url_map,
        ]);

        $this->editModalVisible = false;
        $this->reset(['name_site', 'address', 'schedule_open', 'schedule_close', 'weather_preferable', 'url_img', 'url_map']);
    }

    // Abrir modal de creación
    public function create()
    {
        $this->reset(['name_site', 'address', 'schedule_open', 'schedule_close', 'weather_preferable', 'url_img', 'url_map']);
        $this->createModalVisible = true;
    }

    // Crear nuevo sitio
    public function store()
    {
        $this->validate([
            'name_site' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'schedule_open' => 'required|date_format:H:i',
            'schedule_close' => 'required|date_format:H:i',
            'weather_preferable' => 'required|string|max:255',
            'url_img' => 'nullable|url',
            'url_map' => 'nullable|url',
        ]);

        Site::create([
            'name_site' => $this->name_site,
            'address' => $this->address,
            'schedule_open' => $this->schedule_open,
            'schedule_close' => $this->schedule_close,
            'weather_preferable' => $this->weather_preferable,
            'url_img' => $this->url_img,
            'url_map' => $this->url_map,
        ]);

        $this->createModalVisible = false;
        $this->reset(['name_site', 'address', 'schedule_open', 'schedule_close', 'weather_preferable', 'url_img', 'url_map']);
    }

    // Confirmar eliminación
    public function confirmDelete($siteId)
    {
        $this->deleteModalVisible = true;
        $this->siteIdBeingDeleted = $siteId;
    }

    // Eliminar sitio
    public function delete()
    {
        Site::findOrFail($this->siteIdBeingDeleted)->delete();
        $this->deleteModalVisible = false;
    }

    // Cerrar modal de creación/edición
    public function closeModal()
    {
        $this->editModalVisible = false;
        $this->reset(['name_site', 'address', 'schedule_open', 'schedule_close', 'weather_preferable', 'url_img', 'url_map']);
    }

    public function closeCreateModal()
    {
        $this->createModalVisible = false;
        $this->reset(['name_site', 'address', 'schedule_open', 'schedule_close', 'weather_preferable', 'url_img', 'url_map']);
    }

    // Cerrar modal de eliminación
    public function closeDeleteModal()
    {
        $this->deleteModalVisible = false;
    }

    public function render()
    {
        return view('livewire.admin.list-sites', [
            'sites' => Site::paginate(5),
        ]);
    }
}
