@extends('layouts.app')

@section("content")
    <h1>Create Filme</h1>
        <form method="POST" action="/private/filmes/store">
        {{csrf_field()}}
        <input type="text" name="nome" placeholder="nome" value="{{old("nome")}}"><br>
        <input type="text" name="categoria" placeholder="categoria" value="{{("categoria")}}"><br>
        <input type="number" name="pontuacao" placeholder="pontuação" value="{{("pontuacao")}}"><br>
        <textarea name="imagem" cols="60" rows="4" value="{{("imagem")}}" placeholder="www.img.com"></textarea><br>
            </div>
        <input type="submit" name="submit">
    </form>
    
    
@endsection

