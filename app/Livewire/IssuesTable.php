<?php

namespace App\Livewire;

use App\Models\Issue;
use App\Table\Column;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class IssuesTable extends Table
{
    public function query(): Builder
    {
        return Issue::query();
    }

    public function columns(): array
    {
        return [
            Column::make('title', 'Title'),
            Column::make('status', 'Status'),
            Column::make('persyaratan', 'Persyaratan'),
            Column::make('created_at', 'Created At'),
        ];
    }
    // public function render()
    // {
    //     return view('livewire.issues-table');
    // }
}
