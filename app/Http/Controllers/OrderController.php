<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $orders = \App\Order::all();

        return view('order.index', compact('orders'));
    }


    public function checkout()
    {
      if (is_null(session('package_id'))) {
        return redirect('/');
      }

      $package = \App\Package::find(session('package_id'));

      $locations = \App\Location::all();

      return view('order.checkout', compact('package', 'locations'));
    }



    public function cancel()
    {
        request()->session()->forget('package_id');

        return redirect('/');
    }



    public function hire(Request $request)
    {

      session(['package_id' => $request->input('package_id')]);

      return redirect('orders/checkout');

    }



    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required|numeric',
            'location_id' => 'required|numeric',
            'address' => 'required',
            'trx_no' => 'required|unique:orders'
        ]);


        //
        $order = new \App\Order;

        $order->user_id = $request->user()->id;
        $order->package_id = $request->input('package_id');
        $order->location_id = $request->input('location_id');
        $order->address = $request->input('address');
        $order->trx_no = $request->input('trx_no');

        $order->save();



        $users = \App\User::whereHas('roles', function($q) {

            $q->where('name', 'worker')
              ->where('location_id', request()->input('location_id'));

          })->get();


          foreach ($users as $user) {
            $order->notifications()->create([
                'user_id' => $user->id
            ]);
          }



        $request->session()->forget('package_id');

        return redirect('/users/dashboard');

    }




    public function accept()
    {
        $order = \App\Order::find(request()->input('order_id'));

        if ($order->status >= 0) {
          
          $order->worker_id = request()->input('worker_id');
          $order->status = 1;

          $order->save();

          \App\Notification::where('order_id', request()->input('order_id'))->delete();
        }


        return redirect('/workers/works');
    }



}
