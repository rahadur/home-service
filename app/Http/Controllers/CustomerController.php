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
        })->orderBy('created_at', 'desc')->get();

        return view('customer.index', compact('customers'));
    }


    public function destroy($id){

        \App\User::destroy($id);

        return redirect('/admin/customers');
    }
}
