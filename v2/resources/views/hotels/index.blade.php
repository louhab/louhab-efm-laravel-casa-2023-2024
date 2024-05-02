@extends('layouts.layouts')
@section('title', 'Liste des hotels')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Liste des hotels</h1>
    </div>
    <a class="btn btn-sm btn-outline-warning" href="{{route('hotels.create')}}">Ajouter un nouveau hotel</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Nombre d'étoiles</th>
                <th scope="col">Pays</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
            <tr>
                <td>{{$hotel->id}}</td>
                <td>{{$hotel->nom}}</td>
                <td>{{$hotel->description}}</td>
                <td>{{$hotel->nombreetoilles}}</td>
                <td>{{$hotel->pays->nom}}</td>
                <td>
                    <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST">
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
