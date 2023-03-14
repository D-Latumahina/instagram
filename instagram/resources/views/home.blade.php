@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-4">
            <div class="col-3">
            ㅤㅤㅤ <img src="https://avatarfiles.alphacoders.com/240/240822.jpg" class="rounded-circle" style="height: 16%">
            </div>

        <div class="col-9 ">
            <div>
                <h2>{{ $user->username }}</h2>
            </div>

        <div class="d-flex">
            <div class="pr-5"><strong>153 </strong> postsㅤㅤ</div>
            <div class="pr-5"><strong>23K </strong> followersㅤㅤ</div>
            <div class="pr-5"><strong>100 </strong> following</div>
        </div>

        <div class="pt-4 font-weight-bold"><strong> {{$user->profile->title }} </strong></div>  
        <div>{{$user->profile->description }}</div>
        <div><a href="#">{{$user->profile->url}}</div></a>
        <hr class="border border-default border-1 opacity-100">
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://avatarfiles.alphacoders.com/240/240822.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://avatarfiles.alphacoders.com/240/240822.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://avatarfiles.alphacoders.com/240/240822.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
