@extends('layouts.master')


@section('content')

<div class="row">
  @foreach($departments as $department)
    <div class="col col-md-4 col-sm-4 col-12">
      <div class="card mt-3">
        @if($department->thumbnail)
          <img class="card-img-top" src="{{ asset('imgs/thumbnails/'.$department->thumbnail) }}" alt="Card image cap">
        @else
          <img class="card-img-top" src="https://dummyimage.com/600x400/e0e0e0/fff" alt="Card image cap">
        @endif

        <div class="card-body">
          <h5 class="card-title text-uppercase">{{ $department->title }}</h5>
          <p class="card-text text-muted">Some quick example text to build on the card title and</p>
          <a href="/departments/{{$department->id}}/{{ strtolower($department->title)}}" class="btn btn-info">Find Packages</a>
        </div>
      </div>
    </div>
  @endforeach
</div>


@endsection
