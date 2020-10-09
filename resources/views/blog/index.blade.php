@extends('main')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <div>
            <ul>
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="card mb-2">
                            <div class="card-header">
                                <h5 class="card-title">{{$post->title}}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$post->content}}</p>
                                <div class="d-flex justify-content-between">
                                    <a href={{route('post.show', [$post->id ]) }} class="btn btn-primary">Read more</a>
                                    <form action={{ route('post.destroy', [$post->id] ) }} method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">X</button>
                                    </form>
                                    
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                @endif
            </ul>
        </div>
        <a href={{route('post.create')}}>New Post</a>
    </div>
@endsection('content')