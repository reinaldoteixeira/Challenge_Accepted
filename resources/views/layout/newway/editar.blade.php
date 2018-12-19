@extends('layout.nw')

@section('titulo','Guerreiros New Way')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Guerreiro</h3>
      <form class="col s12" action="{{route('api.update',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('layout.newway._form')
        <div class="center">
          <button class="btn deep-orange">Atualizar</button>
        </div>
      </form>
  </div>

@endsection
