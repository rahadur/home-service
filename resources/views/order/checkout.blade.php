@extends('layouts.master')


@section('content')

  <div class="row mt-5">
    <div class="col col-md-8 offset-md-2">
      <div class="card">
          <div class="card-header">
            <h6>Checkout</h6>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col col-md-3">
                      <p class="text-right">Package Name</p>
                  </div>
                  <div class="col-md-9">
                    <strong>{{ $package->title }}</strong>
                  </div>
              </div>


              <div class="row">
                  <div class="col col-md-3">
                      <p class="text-right">Price</p>
                  </div>
                  <div class="col-md-9">
                    <p class="text-success"><strong>৳ {{ number_format($package->price, 2) }}</strong></p>
                  </div>
              </div>

              <hr>

              <form action="/orders" method="post">

                {{ csrf_field() }}

                <input type="hidden" name="package_id" value="{{session('package_id')}}">

                  <div class="form-group">
                    <div class="row">
                        <label for="addresss" class="control-label col-md-3 text-right">Address</label>
                        <div class="col-md-9">
                          <textarea name="address" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                        <label for="location" class="control-label col-md-3 text-right">Location</label>
                        <div class="col-md-9">
                          <select class="form-control" name="location_id">
                            <option value="">Slect Location</option>
                            @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                        <label for="trx_id" class="control-label col-md-3 text-right">bKash Trx. No</label>
                        <div class="col-md-9">
                          <input type="text" name="trx_no" class="form-control" required>
                        </div>
                    </div>
                  </div>

                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-9 offset-md-3">
                          <button class="btn btn-success">Confirm Order</button>
                          <button class="btn btn-danger">Cancel Order</button>
                        </div>
                      </div>
                  </div>

              </form>

          </div>
      </div>
    </div>
  </div>
@endsection
