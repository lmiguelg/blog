@extends('admin')

@section('content')
<div class="container">
    
    <div class="row">
        <h3>Create new post</h3>
    </div>
    {{-- verificar os erros através das sessions no controller
        @include('partials.errors') --}}

    <div class="row">
        <div class="col-md-6">
            <form action=" {{ route('admin.create') }}" method="POST">
                <div class="form-goup">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-goup">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
        
    </div>
    
</div>
@endsection('content')