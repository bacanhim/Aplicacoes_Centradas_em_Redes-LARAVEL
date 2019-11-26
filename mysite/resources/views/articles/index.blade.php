@extends('layout')

@section('content')
<br>
<h1><b>ARTIGOS</b></h1>
<br>

<div class="control">
    <ul>
        @foreach ($articles as $article)
        <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>
</div>
<br>

<div class="field">
    <div class="control">
        <a href="/articles/create" class="button is-dark">ADD ARTIGO</a>
    </div>
</div>

<div class="field">
    <div class="control">
        <a href="/articles/first" class="button is-light">PRIMEIRO ARTIGO</a>
    </div>
</div>

<div class="field">
    <div class="control">
        <a href="/articles/last" class="button is-light">ULTIMO ARTIGO</a>
    </div>
</div>


@endsection
