@extends('layouts.app')

@section('content')
    <h2>Détails de la catégorie</h2>

    <p><strong>ID :</strong> {{ $category->id }}</p>
    <p><strong>Titre :</strong> {{ $category->titre }}</p>
    <p><strong>Contenu :</strong> {{ $category->contenu }}</p>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
@endsection
