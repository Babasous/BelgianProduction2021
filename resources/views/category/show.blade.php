@extends('layouts.main')

@section('title', 'Affichage d\'une catégorie')

@section('style')
    @parent

    <style>
        h1 { font-family: Impact; }
    </style>
@endsection

@section('content')
    <h1>{{$category->id}} {{$category->nom}}</h1>
    <a href="{{route('categories.index')}}">Retour à la liste</a>
@endsection