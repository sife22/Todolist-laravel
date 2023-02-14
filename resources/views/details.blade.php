@extends('layouts.app')

@section('title', 'Details')

@section('content')
    <div>
        <div>
            <h2>Details de votre tache</h2>
        </div>
        <div>
            <h4>{{ $todos->title }}</h4>
            <p>{{ $todos->description }}</p>
            <a href="/edit/{{ $todos->id }}">Modifier</a>
            <a href="/delete/{{ $todos->id }}">Supprimer</a>
        </div>
    </div>


@endsection