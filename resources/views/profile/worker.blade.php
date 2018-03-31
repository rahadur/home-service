@extends('layouts.worker.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Profile</h1>
</div>

<div class="row mt-5">
  <div class="col col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
          <h6>Profile</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col col-md-3">
                    <p class="text-right">Name: </p>
                </div>
                <div class="col-md-9">
                  <strong>{{ $user->name }}</strong>
                </div>
            </div>


            <div class="row">
                <div class="col col-md-3">
                    <p class="text-right">Email</p>
                </div>
                <div class="col-md-9">
                  <p><strong>{{ $user->email  }}</strong></p>
                </div>
            </div>


            <div class="row">
                <div class="col col-md-3">
                    <p class="text-right">Role</p>
                </div>
                <div class="col-md-9">
                  <p><strong>
                      @foreach($user->roles as $role)
                        {{ $role->name }}
                      @endforeach
                  </strong></p>
                </div>
            </div>


            <div class="row">
                <div class="col col-md-3">
                    <p class="text-right">Location</p>
                </div>
                <div class="col-md-9">
                  <p><strong>{{ $user->location->name  }}</strong></p>
                </div>
            </div>

        </div>
    </div>
  </div>
</div>

@endsection
