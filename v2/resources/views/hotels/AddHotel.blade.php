@extends('layouts.layouts')
@section('title', 'Ajouter un nouveau hotel')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Ajouter un nouveau hotel</h1>
    </div>
    <form action="{{route('hotels.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input class="form-control" type="text" name="nom" >       
        </div>
        <div class="form-group">
        <label  class="form-label"> Description:</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label  class="form-label"> Nombre des etoils:</label>
        <input name="nombreetoilles" class="form-control" type="number"/>
        </div>
        <div class="form-group">
            <label for="nom">Pay :</label>
            <select name="idpays"  class="form-control">
                @foreach($pays as $pay)
                <option value="{{$pay->id}}">
                {{$pay->nom}}
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
