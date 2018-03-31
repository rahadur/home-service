@extends('layouts.user.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">New Problem</h1>
  <!-- <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/users/problems/create" class="btn btn-sm btn-outline-info">
      <span data-feather="plus-square"></span>
      New Problem
    </a>
  </div> -->
</div>



<div class="row mt-5">
  <div class="col col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
          <h6>Problem</h6>
        </div>
        <div class="card-body">

          @include('layouts.errors')

            <form action="/users/problems" method="post">

              {{ csrf_field() }}


              <div class="form-group">
                <div class="row">
                    <label for="department" class="control-label col-md-3 text-right">Department</label>
                    <div class="col-md-9">
                      <select class="form-control" name="department_id">
                        <option value="">Slect Department</option>
                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->title}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
              </div>



              <div class="form-group">
                <div class="row">
                    <label for="title" class="control-label col-md-3 text-right">Title</label>
                    <div class="col-md-9">
                      <input type="text" name="title" class="form-control">
                    </div>
                </div>
              </div>


                <div class="form-group">
                  <div class="row">
                      <label for="description" class="control-label col-md-3 text-right">Description</label>
                      <div class="col-md-9">
                        <textarea name="description" rows="3" class="form-control" required></textarea>
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
                      <div class="col-md-9 offset-md-3">
                        <button class="btn btn-success">Send Problem</button>
                      </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
  </div>
</div>




@endsection
