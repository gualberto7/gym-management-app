<?php

namespace App\Livewire\Member;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search = '';

    public function render()
    {
        return view('livewire.member.index', [
            'members' => Member::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('ci', 'LIKE', '%' . $this->search . '%')
                ->paginate(),
        ]);
    }
}
