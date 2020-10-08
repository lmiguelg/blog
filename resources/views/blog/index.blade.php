@extends('main')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <div>
            <ul>
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <li>{{$post->name}}</li>
                    @endforeach
                @endif
            </ul>
        </div>
        <a href={{'/post/create'}}>New Post</a>
    </div>
@endsection('content')