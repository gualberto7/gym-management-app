<?php

namespace App\Livewire\Member;

use App\Models\Member;
use Livewire\Component;

class Index extends Component
{
    public $members;

    public function mount()
    {
        $this->members = Member::all();
    }
    public function render()
    {
        return view('livewire.member.index');
    }
}
