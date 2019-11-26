@extends('layout')

@section('content')

<br>
<h1><b>NOME DO PROJETO:</b></h1>

<h1 class="title">{{ $project->title }}</h1>

<br>
<h1><b>DESCRIÇÃO DO PROJETO:</b></h1>

<div class="content">{{ $project->description }}</div>

<div class="field">
    <div class="control">
        <a href="/projects/{{ $project->id }}/edit" class="button is-dark">EDITAR PROJETO</a>
    </div>
</div>

<form method="POST" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-danger is-light">APAGAR PROJETO</button>
        </div>
    </div>
</form>

@if($project->tasks->count())
<div>
    @foreach ($project->tasks as $task)
    <div>
        <form method="POST" action="/tasks/{{$task->id}}">@method('PATCH')@csrf
            <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                <input type="checkbox" name="completed" onChange="this.form.submit()"
                    {{ $task->completed ? 'checked' : '' }}>
            </label>
        </form>
    </div>
    @endforeach
</div>
@endif

<form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
    @csrf
    <div class="field">
        <label class="label" for="description">New Task</label>
        <div class="control">
            <input type="text" class="input" name="description" placeholder="New Task">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Add
                Task</button>
        </div>
    </div>
    @include('errors')
</form>


@endsection
