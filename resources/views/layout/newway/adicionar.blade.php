@extends('layout.nw')

@section('titulo','Guerreiros New Way')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Guerreiro</h3>
      <form class="col s12" action="{{route('api.save')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('layout.newway._form')
        <div class="center">
          <button class="btn deep-orange">Salvar</button>
        <div>
        </form>
  </div>


@endsection
