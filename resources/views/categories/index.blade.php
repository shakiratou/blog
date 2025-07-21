@extends('layouts.app')

@section('content')
    <h2>Liste des catégories</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Ajouter une catégorie</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Actions</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->titre }}</td>
                <td>{{ $category->contenu }}</td>
                <td>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
