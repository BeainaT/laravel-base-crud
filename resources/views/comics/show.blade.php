@extends('layouts.base')

@section('page-content')
    <ul>
        <li>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <h3>Titolo: {{$comic->title}}</h3>
            <p>Descrizione: {{$comic->description}}</p>
            <h4>Serie: {{$comic->series}}</h4>
            <h4>Tipologia: {{$comic->type}}</h4>
            <h4>In vendita da: {{$comic->sale_date}}</h4>
            <h4>Prezzo: {{$comic->price}} €</h4>
        </li>
    </ul>
@endsection