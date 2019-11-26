@extends('layout')

@section('content')

<form method="POST" action="/projects">
    {{ csrf_field() }}

    <br>
    <h1><b>CRIAR UM NOVO PROJETO</b></h1>
    <br>

    <!-- NOME DO PROJETO INPUT -->
    <div class="field">
        <label class="label">Nome do Projeto</label>
        <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                placeholder="Project title" value="{{ old('title') }}" required>
        </div>
    </div>

    <!-- DESCRIÇÃO DO PROJETO INPUT -->
    <div class="field">
        <label class="label">Descrição</label>
        <div class="control">
            <textarea class="textarea" name="description" placeholder="Project description" required></textarea>
        </div>
    </div>

    <!-- BUTTON CRAIR PROJETO -->
    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-link is-light">CRIAR PROJETO</button>
        </div>
    </div>

    <!-- VALITDATION CAMPOS -->
    @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


</form>
@endsection
