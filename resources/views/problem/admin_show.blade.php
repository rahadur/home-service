@extends('layouts.admin.master')


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Problems details</h1>
</div>

<div class="row mt-5">
  <div class="col col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
          <h6>{{ $problem->title }}</h6>
        </div>
        <div class="card-body">
          <p>{{ $problem->description }}</p>
        </div>
    </div>

    <h4>Replyes</h4>
    <hr>


    <ul class="list-group">
      @foreach($problem->replies as $reply)
        <li class="list-group-item">
            @if($reply->fromUser->id == auth()->user()->id)
              <p> <strong>Me:</strong> {{ $reply->message }}</p>
            @else
            <?php $to_user = $reply->fromUser->id ?>
              <p> <strong>{{ $reply->fromUser->name }}:</strong> {{ $reply->message }}</p>
            @endif
        </li>
      @endforeach
    </ul>

    <hr>
    <h4>Send a message</h4>

    <form action="/admin/reply/create" method="post">
       @csrf
       <input type="hidden" name="problem_id" value="{{ $problem->id }}">
       <input type="hidden" name="from_user_id" value="{{ auth()->user()->id }}">
       <input type="hidden" name="to_user_id" value="{{ $to_user }}">

       <div class="form-group">
         <textarea name="message" rows="3" class="form-control" placeholder="Write your message"></textarea>
       </div>

       <button type="submit" class="btn btn-success">Send Message</button>
    </form>




  </div>
</div>


@endsection
