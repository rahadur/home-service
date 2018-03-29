<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
      $workers = \App\User::whereHas('roles', function($q) {
        $q->where('name', 'worker');
      })->get();

      return view('worker.index', compact('workers'));
    }


    public function dashboard()
    {

      return view('worker.dashboard');
    }



    public function destroy($id){

        \App\User::destroy($id);

        return redirect('/admin/Workers');
    }
    
}
