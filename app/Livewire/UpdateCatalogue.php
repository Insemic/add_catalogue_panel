<?php

namespace App\Livewire;

use App\Models\Catalogue;
use Livewire\Component;

class UpdateCatalogue extends Component
{
    public int $id;
    public Catalogue $catalogue;
    public string $name;
    public string $description;
    public string $type;
    public string $url;
    public string $filename;

    public function mount(Catalogue $catalogue): void
    {

        $this->name = $catalogue->name;
        $this->description = $catalogue->description;
        $this->type = $catalogue->type;
        $this->url = $catalogue->url;
        $this->filename = $catalogue->filename;
    }
    public function save(): void
    {
        $this->catalogue->name = $this->name;
        $this->catalogue->description = $this->description;
        $this->catalogue->type = $this->type;
        $this->catalogue->url = $this->url;
        $this->catalogue->filename = $this->filename;
        $this->catalogue->save();
        $this->redirect(route('catalogues'));
    }

    public function render()
    {
        return view('livewire.update-catalogue');
    }
}
