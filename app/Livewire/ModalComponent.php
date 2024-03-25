<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public $showModal = false;

    public $title = '';
    public $analysis = '';
    public $category = '';
    public $status = '';
    public $persyaratan = '';

    public function render()
    {
        return view('livewire.modal-component');
    }
}
