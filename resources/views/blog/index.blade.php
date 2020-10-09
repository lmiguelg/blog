@extends('main')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1>Posts</h1>
            <a href={{route('post.create')}}>New Post</a>
        </div>
        
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
                                    @auth
                                        <form action={{ route('post.destroy', [$post->id] ) }} method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">X</button>
                                        </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection('content')