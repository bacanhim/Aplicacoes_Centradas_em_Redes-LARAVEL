@extends('layouts.app')
@section("content")
    <form method="POST" action="/public/ver-filmes">
        <div class="form-group" >
        {{csrf_field()}}
        <div class="col-md-3">
        <label for="exampleFormControlInput1">nome:</label>
        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="title"><br>
        <label for="">pontuacao minima:</label>
        <input type="number" name="pontuacao" class="form-control" id="exampleFormControlInput1" placeholder="1...10"><br>
        <label for="">Categoria:</label>
        <input type="text" name="categoria" class="form-control" id="exampleFormControlInput1" placeholder="categoria"><br>
        <input type="checkbox" name="invert" value=1>invert <br>
        <input type="submit" name="submit" value="search">
        </div>
        </div>
    </form>
    <hr>
    <h1>Filmes</h1>
    <br>
    <div class="container">
            <div class="row">
            @foreach($filmes as $filme)
            <div class="col-md-4">
    
            <ul>
                <li>
                        
                <div class="card" style="width: 18rem;">
                    
                    <img src="{{$filme->imagem}}" class="card-img-top" alt="" width="250" height="350">
                    <div class="card-body">
                            <h3><a href="/public/{{$filme->id}}" >{{$filme->nome}}</a></h3>
                            <h5>{{$filme->categoria}}</h5>
                            <h5>{{$filme->pontuacao}}/10</h5>
                               
                                @can('update', $filme)
                                    
                                <button type="button" class="btn btn-link"><a href="../private-filmes/{{$filme->id}}/edit">Edit</a></button> 
                                @endcan
                    </div>
                            </li>
                    </ul>
            </div>
            @endforeach 
            </div>
            </div>
@endsection