@extends('layouts.main-layout')

@section('content')
<ul>
    @foreach ($movies as $movie)
    <li>
        {{$movies['title']}}
    </li>
    @endforeach
</ul>

@endsection