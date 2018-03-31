<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function admin()
    {
        $user = User::find(request()->user()->id);

        return view('profile.admin', compact('user'));
    }


    public function worker()
    {
        $user = User::find(request()->user()->id);

        return view('profile.worker', compact('user'));
    }


    public function user()
    {
        $user = User::find(request()->user()->id);

        return view('profile.user', compact('user'));
    }
}
