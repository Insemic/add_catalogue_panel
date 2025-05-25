<?php

namespace App\Livewire;

use App\Livewire\Forms\CatalogueForm;
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

        //$catalogue = Catalogue::create($validated);

    }

    public function render()
    {
        return view('livewire.create-catalogue');
    }
}
