@extends('layouts.master')


@section('content')

<div class="row">
  <div class="col col-md-8">
    <div class="card mt-3">
      <div class="card-body">
        <h2 class="card-title">{{ $package->title }}</h2>
        <hr>
        {{ $package->details }}
      </div>
    </div>
  </div>

  <div class="col colmd-4">
    <div class="card mt-3">
      <div class="card-body">
        <h5 class="text-muted">Department: {{ $package->department->title }}</h5>
        <h5 class="text-success">Price: ৳ {{ number_format($package->price, 2) }}</h5>


        <!-- <button type="button" class="btn btn-primary">Hire Now</button> -->

        <a class="btn btn-info" href="/orders/checkout"
           onclick="event.preventDefault();
                         document.getElementById('order-form').submit();">
            {{ __('Hire Now') }}
        </a>

        <form id="order-form" action="/orders/checkout" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="package_id" value="{{$package->id}}">
        </form>


      </div>
    </div>
  </div>


</div>



@endsection
