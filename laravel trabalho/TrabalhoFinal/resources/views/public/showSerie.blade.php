
@extends('layouts.app')

@section("content")
    <h1 class="title" >{{$serie->nome}}</h1>
    <h4>{{$serie->categoria}}</h4>
    <h4>{{$serie->pontuacao}}/10 pontos</h4>
    <br>
    <img class="center" src="{{$serie->imagem}}" alt="" width="50%" height="50%">
    @can('update', $serie)
        <button><a href="../private-series/{{$serie->id}}/edit">Edit</a></button> 
    @endcan
    

@endsection