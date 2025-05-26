<?php

namespace App\Livewire;

use App\Models\Catalogue;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Locked;
use Livewire\Component;

class UpdateCatalogue extends Component
{
    //#[Locked]
    //public int $id;

    public Catalogue $catalogue;

    public string $name;

    public string $description;

    public string $type;

    public string $url;

    public string $filename;

    public function mount(Catalogue $catalogue): void
    {
        $this->catalogue = $catalogue;
        $this->fill(
            $catalogue->toArray()
        );
        //$this->name = $catalogue->name;
        //$this->description = $catalogue->description;
        //$this->type = $catalogue->type;
        //$this->url = $catalogue->url;
        //$this->filename = $catalogue->filename;
    }
    protected function rules(): array
    {
        return [
            'name' => 'required|min:5',
            'type' => 'required|min:5',
            'description' => 'required|min:5',
            'url' => 'required|min:5',
            'filename' => 'required|min:5',
        ];
    }
    public function save(): void
    {
        $this->validate();
        $this->catalogue->name = $this->name;
        $this->catalogue->description = $this->description;
        $this->catalogue->type = $this->type;
        $this->catalogue->url = $this->url;
        //$this->catalogue->filename = $this->filename;
        $this->catalogue->save();
        //$this->redirect(route('catalogues'));
        //$this->reset();

        $this->redirectRoute('catalogues');
    }

    public function render()
    {
        return view('livewire.update-catalogue');
    }
}
