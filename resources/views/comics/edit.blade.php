@extends('layouts.base')
@section('page-content')
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" value="{{$comic->title}}">        
        <label for="desc">Descrizione</label>
        <input type="text" id="desc" name="description" value="{{$comic->description}}">
        <label for="f-img">Immagine</label>
        <input type="text" id="f-img" name="thumb" value="{{$comic->thumb}}">
        <label for="price">Prezzo</label>
        <input type="number" id="price" name="price" value="{{$comic->price}}">
        <label for="serie">Serie</label>
        <input type="text" id="serie" name="series" value="{{$comic->series}}">
        <label for="type">Tipologia</label>
        <input type="text" id="type" name="type" value="{{$comic->type}}">
        <label for="date">data</label>
        <input type="text" id="date" name="sale_date" value="{{$comic->sale_date}}">
        <button type="submit" class="add">modifica</button>
    </form>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection