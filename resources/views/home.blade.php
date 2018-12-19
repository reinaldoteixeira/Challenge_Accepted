@extends('layout.nw')

@section('titulo','Guerreiros New Way')

@section('conteudo')
  <div class="container">
    <h3 class="center">Guerreiros New Way</h3>
    <div class="row">
      @foreach($nw as $guerreiro)
        <div class="col m3">
            <div class="card purple darken-2">
            <div class="card-stacked">
              <div class="card-content white-text">
              <div class="center">
                <img src="{{asset($guerreiro->imagem)}}" width="75" height="75">
              </div>
                <h4>{{$guerreiro->nome}}</h4>
                <h5>{{$guerreiro->tipo}}</h5>
                <p><b>Especialidade: </b>{{$guerreiro->especialidade}}</p>
                <p><b>Vida: </b>{{$guerreiro->vida}}</p>
                <p><b>Defesa: </b>{{$guerreiro->defesa}}</p>
                <p><b>Dano: </b>{{$guerreiro->dano}}</p>
                <p><b>Velocidade de ataque: </b>{{$guerreiro->velocidade_ataque}}</p>
                <p><b>Velocidade de movimento: </b>{{$guerreiro->velocidade_movi}}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>



@endsection
