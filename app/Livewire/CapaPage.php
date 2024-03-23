<?php

namespace App\Livewire;

use App\Models\Capa;
use Livewire\Component;
use Livewire\WithPagination;

class CapaPage extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.capa-page', [
            'capa' => Capa::paginate(10),
        ]);
    }
}
