<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Catalogue;
use Livewire\Form;
use Livewire\WithFileUploads;

class CatalogueForm extends Form
{


    #[Validate('required')]
    public string $name;
    #[Validate('required')]
    public string $type;
    #[Validate('required')]
    public string $url;
    #[Validate('required')]
    public string $description;

    public string $filename;

    #[Validate('image|max:10240')]
    public $image;
    public function store(): void
    {

        $this->validate();
        //$this->filename = $this->image->getClientOriginalName();
        $this->filename = $this->image->store(path: 'catalogues', options: ['disk' => 'public']);

        Catalogue::create(['name' => $this->name, 'type' => $this->type, 'url' => $this->url, 'filename' => $this->filename, 'description' => $this->description]);
    }


}
