@extends('layout')

@section('content')

<form method="POST" action="/articles">
    {{ csrf_field() }}

    <br>
    <h1><b>CRIAR UM NOVO ARTIGO</b></h1>
    <br>

    <!-- NOME DO ARTIGO INPUT -->
    <div class="field">
        <label class="label">Nome do Artigo</label>
        <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                placeholder="Article title" value="{{ old('title') }}" required>
        </div>
    </div>

    <!-- Conteudo DO ARTIGO INPUT -->
    <div class="field">
        <label class="label">Conteudo</label>
        <div class="control">
            <textarea class="textarea" name="content" placeholder="Article content" required></textarea>
        </div>
    </div>

    <!-- FALSE PO OMISSÃO -->
    <label class="checkbox">
        <input type="checkbox" name="featured">
        Featured
    </label>

    <!-- BUTTON CRAIR ARTIGO -->
    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-link is-light">CRIAR ARTIGO</button>
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
