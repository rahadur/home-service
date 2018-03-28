<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = \App\User::whereHas('roles', function($q){
            $q->where('name', 'user');
        })->get();

        return view('customer.index', compact('customers'));
    }
}
