@extends('layout.nw')

@section('titulo','Guerreiros New Way')

@section('conteudo')
  <div class="container">
    <h3 class="center">Listagem de Guerreiros</h3>
    <div class="row">
      <table class="centered">
        <thead>
          <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Especialidade</th>
            <th>Vida</th>
            <th>Defesa</th>
            <th>Dano</th>
            <th>Veloc. de Ataque</th>
            <th>Veloc. de Movimento</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->nome }}" /></td>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->tipo }}</td>
              <td>{{ $registro->especialidade }}</td>
              <td>{{ $registro->vida }}</td>
              <td>{{ $registro->defesa }}</td>
              <td>{{ $registro->dano }}</td>
              <td>{{ $registro->velocidade_ataque }}</td>
              <td>{{ $registro->velocidade_movi}}</td>
              <td>
              <td>
                <a class="btn indigo darken-1" href="{{ route('api.edit',$registro->id) }}">Editar</a>
              </td>
              <td>
                <form action="{{route('api.delete', $registro->id) }}" method="post">
                  {{ method_field('delete') }}
                  <button class="btn red accent-3" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn green accent-3" href="{{ route('api.adicionar') }}">Adicionar</a>
    </div>

  </div>




@endsection
