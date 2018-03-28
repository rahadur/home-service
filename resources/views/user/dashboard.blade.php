@extends('layouts.user.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/packages/create" class="btn btn-sm btn-outline-info">
      <span data-feather="plus-square"></span>
      New Problem
    </a>
  </div>
</div>


<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Package</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->package->title}}</td>
      <td> ৳ {{ number_format($order->package->price, 2) }}</td>
      <td>{{ $order->location->name }}</td>
      <td>{{ $order->created_at->toFormattedDateString() }}</td>
      <td>
        @if($order->status == 0)
          <span class="badge badge-warning">Panddin</span>
        @elseif($order->status == 1)
          <span class="badge badge-info">Active</span>
        @else
          <span class="badge badge-success">Complete</span>
        @endif

      </td>


    </tr>
    @endforeach

  </tbody>
</table>


@endsection
