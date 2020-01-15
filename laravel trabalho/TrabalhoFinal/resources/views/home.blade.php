@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <hr>
                        <button><a href="/private/create-filme">add filme</a></button>
                        <button><a href="/private/create-serie">add serie</a></button>
                        
                    
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Meus filmes</div>
                <div class="card-body">
                    <div class="row">
                    @foreach ($filmes as $filme)
                            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                              <div class="card h-100">
                                <a href="{{$filme->imagem}}"><img class="card-img-top" src="{{$filme->imagem}}" width="150" height="200"></a>
                                <div class="card-body">
                                  <h4 class="card-title">
                                    <a href="/public/{{$filme->id}}">{{$filme->nome}}</a>
                                  </h4>
                                <p class="card-text"></p>
                                </div>
                              </div>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Minhas series</div>
                    <div class="card-body">
                        <div class="row">
                        @foreach ($series as $serie)
                                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                                  <div class="card h-100">
                                    <a href="{{$serie->imagem}}"><img class="card-img-top" src="{{$serie->imagem}}" width="150" height="250"></a>
                                    <div class="card-body">
                                      <h4 class="card-title">
                                        <a href="/public/{{$serie->id}}">{{$serie->nome}}</a>
                                      </h4>
                                    <p class="card-text"></p>
                                    </div>
                                  </div>
                                </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
