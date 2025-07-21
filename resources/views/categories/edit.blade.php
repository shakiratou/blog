@extends('layouts.app')

@section('content')
    <h2>Modifier la catégorie</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ $category->titre }}">
        </div>
        <div class="mb-3">
            <label>Contenu</label>
            <textarea name="contenu" class="form-control">{{ $category->contenu }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
    </form>
@endsection
