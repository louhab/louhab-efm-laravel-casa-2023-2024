@extends('layouts.layouts')
@section('title', 'Ajouter une nouvelle repas')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Ajouter une nouvelle repas</h1>
    </div>
    <form action="{{route('repas.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="nom">intitule :</label>
            <input class="form-control" type="text" name="intitule" >       
        </div>
        <div class="form-group">
        <label  class="form-label"> Description:</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="nom">Categorie :</label>
            <select name="categorie_id"  class="form-control">
                @foreach($categories as $categorie)
                <option value="{{$categorie->id}}">
                {{$categorie->nom}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <button class="btn btn-primary">Ajouter</button>
        </div>
    </form>

</div>
@endsection
