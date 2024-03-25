<?php

namespace App\Livewire;

use Livewire\Component;

abstract class Table extends Component
{
    abstract public function query(): \Illuminate\Database\Eloquent\Builder;

    abstract public function columns(): array;

    public function data()
    {
        return $this->query()->get();
    }
    // public $data;

    // public function mount($data = null)
    // {
    //     $this->data = 'data';
    // }
    // public function render()
    // {
    //     return view('livewire.table');
    // }
}
