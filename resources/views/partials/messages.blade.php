@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if($msg = Session::get('success'))
    <div class="alert alert-success">
        {{$msg}}
    </div>
@endif

@if($msg = Session::get('error'))
    <div class="alert alert-danger">
        {{$msg}}
    </div>
@endif