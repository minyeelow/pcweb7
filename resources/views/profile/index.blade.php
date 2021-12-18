@extends('layouts.app')

@section('content')

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-2 pt-3">
        @if($profile != null)
            <div id="myElement"><img class="rounded-circle" width="150" src="/storage/{{ $profile->image}}"></div>
        @endif
        </div>
        <div class="col-7 pt-3">
            <h3 class="animate__animated animate__bounce">{{$user->name}}</h3>
            <span><strong>{{$postscount}}</strong> Items</span>
            @if($profile != null)
                <div class="pt-3">{{$profile->description}}</div>
                <a href="/profile/edit" class="pt-3">Update your shop!</a>
            @else
                <div><a href="/profile/create" class="pt-3">Create your shop!</a></div>
            @endif
            <div class="pt-2"><a href="/post/create" class="btn btn-primary">Add an item</a></div>
            <div class="pt-2"><button onclick="showphotos()">Show All Items</button></div>
            <div class="pt-2"><button onclick="hidephotos()">Hide All Items</button></div>            
        </div>
    </div>

    <div class="row pt-5" id="profile-feed">
        @foreach($posts as $post)
            <div class="col-4 mb-5" id='image-on-feed'>
                <a href="/post/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/animate.js') }}"></script>

</div>
@endsection
