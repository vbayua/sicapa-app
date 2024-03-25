<?php

namespace App\Livewire;

use App\Models\Capa;
use App\Models\Issue;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;

class IssuePage extends Component
{
    use WithPagination;

    public Capa $capa;

    public $data;

    public function mount(Capa $capa)
    {
        $this->data = $capa->issues;
    }
    public function render()
    {
        // Manually paginate issues
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $this->data->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $issuesPaginated = new LengthAwarePaginator($currentPageItems, count($this->data), $perPage);
        return view('livewire.issue-page', [
            'issues' => $issuesPaginated
        ]);
    }
}
