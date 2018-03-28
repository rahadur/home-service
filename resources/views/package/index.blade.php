@extends('layouts.admin.master')


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Packages</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/packages/create" class="btn btn-sm btn-outline-info">
      <span data-feather="plus-square"></span>
      New Package
    </a>
  </div>
</div>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Department</th>
      <th scope="col">Price</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($packages as $package)
    <tr>
      <th scope="row">{{$package->id}}</th>
      <td>{{$package->title}}</td>
      <td>{{$package->department->title}}</td>
      <td>{{$package->price}}</td>
      <td>{{ $package->created_at->toFormattedDateString() }}</td>
      <td>
        <div class="btn-group" role="group">
          <a href="/admin/packages/{{$package->id}}/edit" type="button" class="btn btn-sm btn-warning">Edit</a>
          <form onsubmit="return confirm('Do you really want to delete?');" action="/admin/packages/{{$package->id}}" method="POST" >
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="DELETE" />
  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
  </form>
        </div>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
