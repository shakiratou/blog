@extends('layouts.app')

@section('content')
    <h2>Ajouter une catégorie</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control">
        </div>
        <div class="mb-3">
            <label>Contenu</label>
            <textarea name="contenu" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
    </form>
@endsection
