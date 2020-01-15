
@extends('layouts.app')

@section("content")
    <h1 class="title" >{{$filme->nome}}</h1>
    <h4>{{$filme->categoria}}</h4>
    <h4>{{$filme->pontuacao}}/10 pontos</h4>
    <br>
    <img class="center" src="{{$filme->imagem}}" alt="" width="50%" height="50%">
    @can('update', $filme)
        <button><a href="../private-filmes/{{$filme->id}}/edit">Edit</a></button> 
    @endcan
    

@endsection