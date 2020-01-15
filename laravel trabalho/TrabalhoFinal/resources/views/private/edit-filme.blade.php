@extends('layouts.app')

@section("content")
    <form method="POST" action="/private-filmes/{{ $filme->id }}">
        {{method_field("PATCH")}}
        @csrf
        <div class="field">
            <label class="label" for="nome">nome</label>
            <div class="control">
            <input type="text" class="input {{$errors->has("nome")?"is-danger":""}}" name="nome" placeholder="nome_1" value="{{$filme->nome}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="categoria">categoria</label>
            <div class="control">
                <input type="text" class="input {{$errors->has("categoria")?"is-danger":""}}" name="categoria" placeholder="Categoria" value="{{$filme->categoria}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="pontuacao">pontuacao</label>
            <div class="control">
            <input type="number" class="input {{$errors->has("pontuacao")?"is-danger":""}}" name="pontuacao" placeholder="1...10" value="{{$filme->pontuacao}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="imagem">imagem</label>
            <div class="control">
            <textarea name="imagem" cols="60" rows="4" placeholder="www.img1.com">{{$filme->imagem}}</textarea><br>
            </div>
   
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update filme</button>
            </div>
        </div>
        @if($errors->any())
            <div class="notification is-danger" >
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>
                            {{$erro}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    <form method="POST" action="/private-filmes/{{ $filme->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete article</button>
            </div>
        </div>
    </form>
@endsection