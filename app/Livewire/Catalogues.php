<?php

namespace App\Livewire;

use App\Models\Catalogue;
use Livewire\Component;

class Catalogues extends Component
{

    public function delete(Catalogue $catalogue): void
    {
        //$this->authorize('delete', $catalogue);
        $catalogue->delete();
    }
    public function render()
    {
        $catalogues = Catalogue::all()->sortByDesc('created_at');
        return view('livewire.catalogues', compact('catalogues'));
    }
}
