@extends('main')

@section('content')
    <div class="container">
      <h1>Edit Post</h1>
      <div>
          <form action={{ route('post.update',[$post->id]) }} method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label for="content">Title</label>
                <input type="text" class="form-control" id="title" value={{$post->title}} name="title">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <input type="text" class="form-control" id="content" value={{$post->content}} name="content">
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
    </div>
@endsection('content')