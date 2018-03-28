@extends('layouts.master')


@section('content')
<h2>List of Packages</h2>

<div class="row">

  @foreach($packages as $package)
  <div class="col col-sm-6 col-12">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"> <a href="/packages/{{$package->id}}/{{str_slug(strtolower($package->title), '-')}}">{{ $package->title }}</a> </h4>
            <p>{{ str_limit($package->details, 100, ' ...')}}</p>
            <h5 class="text-success">Price: ৳ {{ number_format($package->price, 2)}}</h5>

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
  @endforeach

</div>

@endsection
