@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3>Index</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('admin.create') }}" class="btn btn-primary">New Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 card mt-2">
            <div class="card-body">
                <h5 class="card-title">List</h5>
                <hr/>
                <ul class="card-body">
                    <li class="post"><a href="{{ route('admin.edit', ['id' => 1]) }}">Post 1</a></li>
                </ul>
           </div>
        </div>
    </div>


</div>
@endsection('content')