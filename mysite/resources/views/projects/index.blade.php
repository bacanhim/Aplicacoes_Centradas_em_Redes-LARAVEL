@extends('layout')

@section('content')
<br>
<h1><b>PROJETOS</b></h1>
<br>

<div class="control">
    <ul>
        @foreach ($projects as $project)
        <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
</div>
<br>

<div class="field">
    <div class="control">
        <a href="/projects/create" class="button is-dark">ADD PROJETO</a>
    </div>
</div>

<div class="field">
    <div class="control">
        <a href="/projects/first" class="button is-light">PRIMEIRO PROJETO</a>
    </div>
</div>

<div class="field">
    <div class="control">
        <a href="/projects/last" class="button is-light">ULTIMO PROJETO</a>
    </div>
</div>

@endsection
