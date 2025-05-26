<?php

namespace App\Livewire;

use App\Livewire\Forms\CatalogueForm;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Validate;
use App\Models\Catalogue;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateCatalogue extends Component
{
    use WithFileUploads;
    public CatalogueForm $form;



    public function save(): void
    {
        $this->form->store();
        session()->flash('created', 'Catalogue successfully created.');

        $this->form->image=null;
        $this->reset();
        //$this->redirectRoute('catalogues');

    }

    public function render()
    {
        return view('livewire.create-catalogue');
    }
}
