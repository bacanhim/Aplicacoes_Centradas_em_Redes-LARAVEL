@extends('layout')

@section('content')

<br>
<h1><b>NOME DO ARTIGO:</b></h1>

<h1 class="title">{{ $article->title }}</h1>

<br>
<h1><b>CONTEUDO DO ARTIGO:</b></h1>

<div class="content">{{ $article->content }}</div>

<br>
<h1><b>ARTIGO FEATURED:</b></h1>
@if ($article->featured == 1)
<p>Sim</p>
@endif

@if ($article->featured == 0)
<p>Não</p>
@endif

<br>

<div class="field">
    <div class="control">
        <a href="/articles/{{ $article->id }}/edit" class="button is-dark">EDITAR ARTIGO</a>
    </div>
</div>

<form method="POST" action="/articles/{{ $article->id }}">
    @method('DELETE')
    @csrf

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-danger is-light">APAGAR ARTIGO</button>
        </div>
    </div>
</form>
@endsection
