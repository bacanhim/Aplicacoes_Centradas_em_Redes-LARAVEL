@extends('layouts.app')

@section("content")
    <h1>Create Serie</h1>
    <form method="POST" action="/private/series/store">
        {{csrf_field()}}
        <input type="text" name="nome" placeholder="nome" value="{{old("nome")}}"><br>
        <input type="text" name="categoria" placeholder="categoria" value="{{old("categoria")}}"><br>
        <input type="number" name="pontuacao" placeholder="pontuação" value="{{old("pontuacao")}}"><br>
        <textarea name="imagem" cols="60" rows="4" value="{{old("imagem")}}" placeholder="www.img1.com"></textarea><br>
            </div>
        <input type="submit" name="submit">
    </form>
@endsection

