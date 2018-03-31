@extends('layouts.user.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Problems</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/users/problems/create" class="btn btn-sm btn-outline-info">
      <span data-feather="plus-square"></span>
      New Problem
    </a>
  </div>
</div>



<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Department</th>
      <th scope="col">Location</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($problems as $problem)
    <tr>
      <th scope="row">{{$problem->id}}</th>
      <td>{{ $problem->title }}</td>
      <td>{{ $problem->description }}</td>
      <td>{{ $problem->department->title }}</td>
      <td>{{ $problem->location->name }}</td>
      <td>{{ $problem->created_at->toFormattedDateString() }}</td>
    </tr>
    @endforeach

  </tbody>
</table>




@endsection
