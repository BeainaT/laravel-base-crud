@extends('layouts.base')
@section('title')
    
@endsection
@section('page-content')
<ul>
    @foreach ($comics as $comic)
        <li>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <h3>{{$comic->title}}</h3>
        </li>
    @endforeach
</ul>
@endsection