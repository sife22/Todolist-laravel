@extends('layouts.app')
@section('title', 'Home')
@section ('content')
<div>
    <ul>
        @foreach ($todos as $todo)
            <li><a href="details/{{ $todo->id }}">{{ $todo->title }}</a></li>
        @endforeach
    </ul>
</div>
@endsection