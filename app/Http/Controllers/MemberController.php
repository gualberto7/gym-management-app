<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        $memberships = Membership::all();

        return view('register', [
            'memberships' => $memberships,
        ]);
    }
}
