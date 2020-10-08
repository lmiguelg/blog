@extends('admin')

@section('content')
<div class="container">
    
    <div class="row">
        <h3>Edit post</h3>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <form action=" {{ route('admin.update') }}" method="POST">
                <div class="form-goup">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $posts['title'] }}">
                </div>
                <div class="form-goup">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value='{{ $posts['content'] }}'>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
        
    </div>
</div>
@endsection('content')