<?php

namespace App\Livewire;

use App\Models\Issue;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class IssuesTable extends DataTableComponent
{
    protected $model = Issue::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
    public function columns(): array
    {
        return [
            Column::make('Title')->sortable(),
            Column::make('Persyaratan', 'persyaratan'),
        ];
    }


}
