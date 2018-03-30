@extends('layouts.admin.master')


@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Create Packages</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/admin/packages" class="btn btn-sm btn-outline-info">
      <span data-feather="list"></span>
      Packages
    </a>
  </div>
</div>

<div class="row">
  <div class="col col-sm-8 offset-sm-2">
    <div class="card">
      <div class="card-body">

        <form class="" action="/admin/packages" method="post">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="department_id" class=control-label>Department</label>
            <select class="form-control" name="department_id" id="department_id">
              <option value="">Chose Department</option>
              @foreach($departments as $department)
              <option value="{{ $department->id }}">{{ $department->title }}</option>
              @endforeach
            </select>
          </div>

            <div class="form-group">
              <label for="title" class=control-label>Title</label>
              <input name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
              <label for="details" class="control-label">Details</label>
              <textarea name="details" rows="3" class="form-control" id="details"></textarea>
            </div>

            <div class="form-group">
              <label for="price" class="control-label">Price</label>
              <input type="number" name="price" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create Package</button>

        </form>

        @include('layouts.errors')

      </div>
    </div>
  </div>
</div>

@endsection
