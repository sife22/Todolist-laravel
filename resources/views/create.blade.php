@extends('layouts.app')
@section('title', 'Creer une tache')
@section('content')
    <form method="post" action="store-data">
        @csrf
        <h1>Creer votre tache</h1>
        <div>
            <label for="title">Titre : </label>
            <input type="text" name="title" placeholder="Ajouter une tache : ">
        </div>
        <div>
            <label for="title">Description : </label>
            <input type="text" name="description" placeholder="Description : ">
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>
@endsection