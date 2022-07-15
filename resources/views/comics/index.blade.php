@extends('layouts.base')
@section('title')
    Comics
@endsection
@section('page-content')
<ul>
    @foreach ($comics as $comic)
        <li>
            <a href="{{route('comics.show', $comic->id)}}">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h3>{{$comic->title}}</h3>        
            </a>
        </li>
    @endforeach
</ul>
@endsection