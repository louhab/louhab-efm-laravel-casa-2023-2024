@extends('layouts.layouts')
@section('title', 'Liste des hotels')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Liste des Repas</h1>
    </div>
    <a class="btn btn-sm btn-outline-warning" href="{{route('repas.create')}}">Ajouter une nouvelle repas</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">intitule</th>
                <th scope="col">Description</th>
                <th scope="col">categorie</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($repas as $repa)
            <tr>
                <td>{{$repa->id}}</td>
                <td>{{$repa->intitule}}</td>
                <td>{{$repa->description}}</td>
                <td>{{$repa->categirie->nom}}</td>
                <td>
                    <form action="{{ route('repas.destroy', $repa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
