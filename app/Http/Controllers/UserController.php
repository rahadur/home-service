<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
      $this->middleware('auth');
    }


    public function dashboard()
    {
      $orders = \App\Order::where('user_id', request()->user()->id)
                ->whereIn('status', [0, 1])->with('package')->get();

      return view('user.dashboard', compact('orders'));
    }



    public function order()
    {
      $orders = \App\Order::where('user_id', request()->user()->id)
                ->where('status', 2)->with('package')->get();

      return view('user.order', compact('orders'));
    }
}
