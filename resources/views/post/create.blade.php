@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="caption">Item Name</label>
                        <input class="form-control" type="text" name="caption" id="caption">
                    </div>

                    <div class="form-group row">
                        <label for="postpic">Post Product</label>
                        <input type="file" name="postpic" id="postpic">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Add item</button>
                    </div>                                  
                </form>
            </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
