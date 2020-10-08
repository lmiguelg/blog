@extends('main')
@section('content')
    <h2>Welcome</h2>

    @if(false)
        <p>verdadeiro</p>
    @else
        <p>falso</p>
    @endif
    <hr/>
    @for($i = 0; $i < 5; $i++)
        <p>{{ $i + 1 }} iteration</p>
    @endfor
    <h2>XSS</h2>
@endsection('content')