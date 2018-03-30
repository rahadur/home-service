@extends('layouts.admin.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Orders</h1>
  <!-- <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/packages/create" class="btn btn-sm btn-outline-info">
      <span data-feather="plus-square"></span>
      New Problem
    </a>
  </div> -->
</div>



<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer</th>
      <th scope="col">Worker</th>
      <th scope="col">Address</th>
      <th scope="col">Package</th>
      <th scope="col">Price</th>
      <th scope="col">Accept</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{ $order->user->name }}</td>
      <td>{{ $order->worker_id }}</td>
      <td>{{ $order->address }}</td>
      <td>{{ $order->package->title }}</td>
      <td>{{ $order->package->price }}</td>
      <td>{{ $order->updated_at->toFormattedDateString() }}</td>
    </tr>
    @endforeach

  </tbody>
</table>


@endsection
