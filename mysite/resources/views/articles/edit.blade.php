@extends('layout')

@section('content')

<br>
<h1><b>EDITAR ARTIGO</b></h1>
<br>

<form method="POST" action="/articles/{{ $article->id }}" style="margin-bottom: 10px;">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">NOME DO ARTIGO</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $article->title }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="content">CONTEUDO DO ARTIGO</label>
        <div class="control">
            <textarea class="textarea" name="content">{{ $article->content }}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <label class="label" for="featured">ARTIGO FEATURED</label>
            <label class="radio">
                <input type="radio" name="featured" value="1">
                Sim
            </label>
            <label class="radio">
                <input type="radio" name="featured" value="0">
                Não
            </label>
        </div>
    </div>


    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">ALTERTAR ARTIGO</button>
        </div>
    </div>
</form>

@endsection
