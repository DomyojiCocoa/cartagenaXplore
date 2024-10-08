<?php

namespace App\Livewire\Admin;

use App\Models\Site;
use Livewire\Component;

class ListSites extends Component
{
    public $sites;
    public $siteName;
    public $siteAddress;
    public $siteOpen;
    public $siteClose;
    public $siteWeather;
    public $siteImg;
    public $siteMap;
    public $modalAlgo = false;
    public $selectedSiteId;

    public function mount() {
        $this->sites = Site::all();
    }

    public function abrir($id)
    {
        $this->modalAlgo = true;
        $this->selectedSiteId = $id;
    }



    public function updateInfoSite(Site $site) {
        dd($site);
    }

    public function eliminar()
    {
        $this->modalAlgo = false; // Cerrar el modal

        Site::destroy($this->selectedSiteId); // Eliminar el sitio seleccionado
        $this->sites = Site::all(); // Recargar los sitios
    }

    public function render()
    {
        return view('livewire.admin.list-sites');
    }
}
