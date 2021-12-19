@extends('layouts.main')

@section('title', 'Liste des catégories')

@section('style')
    @parent

    <style>
        h1 { font-family: Impact; }
    </style>
@endsection

@section('content')
    <div>
        <h3>Liste des catégories:</h3>
        @foreach ($categories as $category)
            <ul>
                <li>{{ $category->nom }}
                    <a href="{{route('categories.show', $category->id)}}">Voir</a>
                    <a href="{{route('categories.edit', $category->id)}}">Modifier</a>
                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Supprime</button>
                    </form>
                </li>
            </ul>
        @endforeach
    </div>
    <p><a href="{{route('categories.create')}}">Ajouter une catégorie</a></p>
@endsection

@section('script')
    <section>
        console.log('JS OK');
    </section>
@endsection
