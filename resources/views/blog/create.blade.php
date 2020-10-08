@extends('main')

@section('content')
    <div class="container">
        <h1>New Posts</h1>
        <div>
            <form method="post" action="post/store">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                  </div>
               
                <a type="submit" class="btn btn-primary">Submit</a>
              </form>
        </div>
    </div>
@endsection('content')