@extends('layouts.app')

@section('content')
<center>
<div class="card col-4 pr-3">
  <div class="card-header ">
    <a class="nav-link" href="/profile/{{ $post->user->id }}">
  {{ $post->user->username }}
  </a>
  </div>
  <div class="card-body">
    <h5 class="card-title"><img src="/storage/{{ $post->image }}" class="w-100"></h5>
    <p class="card-text">
        <span class="font-weight-bold">
        {{ $post->caption }}
        </span> 
    </p>
  </div>
</div>
</center>
@endsection