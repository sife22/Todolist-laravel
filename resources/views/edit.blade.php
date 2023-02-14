@extends('layouts.app')
@section('title', 'Modifier votre tache')
@section('content')
    <form action="/update/{{ $todos->id }}" method="post">
        @csrf
        <h1>Modifier votre tache</h1>
        <div>
            <label for="title">Titre : </label>
            <input type="text" name="title" value="{{ $todos->title }}">
        </div>
        <div>
            <label for="title">Description : </label>
            <input type="text" name="description" value="{{ $todos->description }}">
        </div>
        <div>
            <input type="submit" value="Modifier">
        </div>
    </form>
@endsection