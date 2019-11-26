@extends('layout')

@section('content')

<br>
<h1><b>EDITAR PROJETO</b></h1>
<br>

<form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 10px;">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>

    </div>

    <div class="field">
        <label class="label" for="description">Description</label>

        <div class="control">
            <textarea class="textarea" name="description">{{ $project->description }}</textarea>
        </div>

    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">ALTERTAR PROJETO</button>
        </div>
    </div>
</form>

@endsection
