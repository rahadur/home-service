@extends('layouts.admin.master')


@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Customers</h1>
</div>


<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Location</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customers)
    <tr>
      <th scope="row">{{$customers->id}}</th>
      <td>{{$customers->name}}</td>
      <td>{{$customers->email}}</td>
      <td>{{$customers->location->name}}</td>
      <td>{{ $customers->created_at->toFormattedDateString() }}</td>
      <td>
        <div class="btn-group" role="group">
          <!-- <a href="/admin/customers/{{$customers->id}}" type="button" class="btn btn-sm btn-success">View</a> -->
          <form onsubmit="return confirm('Do you really want to delete?');" action="/admin/customers/{{$customers->id}}" method="POST" >
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
