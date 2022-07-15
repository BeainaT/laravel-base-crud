@extends('layouts.base')
@section('page-content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title">        
        <label for="desc">Descrizione</label>
        <input type="text" id="desc" name="description">
        <label for="f-img">Immagine</label>
        <input type="text" id="f-img" name="thumb">
        <label for="price">Prezzo</label>
        <input type="number" id="price" name="price">
        <label for="serie">Serie</label>
        <input type="text" id="serie" name="series">
        <label for="type">Tipologia</label>
        <input type="text" id="type" name="type">
        <label for="date">Data</label>
        <input type="text" id="date" name="sale_date">
        <button type="submit" class="add">crea</button>
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