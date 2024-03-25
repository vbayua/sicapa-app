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

    public $issues;

    public function mount(Capa $capa)
    {
        $this->issues = $capa->issues;



    }
    public function render()
    {
        // Manually paginate issues
        $perPage = 10;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $this->capa->issues->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $issuesPaginated = new LengthAwarePaginator($currentPageItems, count($this->issues), $perPage);
        return view('livewire.issue-page', [
            'issues' => $issuesPaginated
        ]);
    }
}
