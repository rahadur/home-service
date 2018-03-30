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
        $notifications = \App\Notification::where('user_id', request()->user()->id)->get();

      return view('worker.dashboard', compact('notifications'));
    }


    public function work()
    {
        $works = \App\Order::where('worker_id', request()->user()->id)->get();

        return view('worker.work', compact('works'));
    }


    public function destroy($id){

        \App\User::destroy($id);

        return redirect('/admin/Workers');
    }

}
