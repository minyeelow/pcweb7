@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/screenfull.js/5.1.0/screenfull.min.js" integrity="sha512-SGPHIoS+NsP1NUL5RohNpDs44JlF36tXLN6H3Cw+EUyenEc5zPXWqfw9D+xmvR00QYUYewQIJQ6P5yH82Vw6Fg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" id='post-image'>
        </div>
        <div class="col-4">
            <h2>{{$user->name}}</h2>
            <p>Item Name: {{$post->caption}}</p>
            <u>Click Image To Fullscreen</u>
            <br>
            <br>
            <form action="{{ route('post.delete', $post) }}" method="get">
                <button type="submit" title="delete" class="btn btn-primary">Delete</button>
                </form>
        </div>
    </div>

    <script> 
        let img = document.getElementById('post-image')
        img.addEventListener('click', ()=>{
            if(screenfull.isEnabled){
                 screenfull.toggle(img);
                }
            });
    </script>

</div>
@endsection
