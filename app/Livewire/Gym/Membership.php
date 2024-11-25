<?php

namespace App\Livewire\Gym;

use Livewire\Component;

class Membership extends Component
{
    public function render()
    {
        $memberships = auth()->user()->gyms[0]->memberships;

        return view('livewire.gym.membership', [
            'memberships' => $memberships,
        ]);
    }
}
