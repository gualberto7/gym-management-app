<?php

namespace App\Livewire\Member;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;

    protected $queryString = ['search' => ['except' => '']];

    public $search = '';

    public function render()
    {
        $gym = Auth::user()->gyms->first();

        $members = $gym->subscriptions()
            ->join('members', 'subscriptions.member_id', '=', 'members.id')
            ->join('memberships', 'subscriptions.membership_id', '=', 'memberships.id')
            ->select('members.*', 'memberships.name AS membership', 'subscriptions.start_date', 'subscriptions.end_date')
            ->where('members.name', 'like', '%' . $this->search . '%')
            ->orWhere('members.ci', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.member.index', [
            'members' => $members,
        ]);
    }
}
