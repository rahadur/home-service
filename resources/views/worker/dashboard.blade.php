@extends('layouts.worker.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
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
      <th scope="col">Address</th>
      <th scope="col">Package</th>
      <th scope="col">Price</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($notifications as $notification)
    <tr>
      <th scope="row">{{$notification->id}}</th>
      <td>{{$notification->order->address}}</td>
      <td>{{ $notification->order->package->title }}</td>
      <td>{{ $notification->order->package->price }}</td>
      <td>{{ $notification->order->created_at->toFormattedDateString() }}</td>
      <td>
        <a class="btn btn-info" href="/orders/accept"
           onclick="event.preventDefault();
                         document.getElementById('accept-form').submit();">
            {{ __('Accept') }}
        </a>

        <form id="accept-form" action="/orders/accept" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="order_id" value="{{$notification->order->id}}">
            <input type="hidden" name="worker_id" value="{{$notification->user_id}}">
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>


@endsection
