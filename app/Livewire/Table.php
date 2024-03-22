<?php

namespace App\Livewire;

use Livewire\Component;

abstract class Table extends Component
{
    public $data;

    public function mount($data = null)
    {
        $this->data = 'data';
    }
    public function render()
    {
        return view('livewire.table');
    }
}
