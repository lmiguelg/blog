@extends('main')

@section('content')
    <div class="container">
      <h1>New Post</h1>
      <div>
          <form action="{{ route('post.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="content">Title</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="form-group">
                  <label for="content">Content</label>
                  <input type="text" class="form-control" id="content" name="content">
                </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
@endsection('content')