<div class="row">

  <div class="input-field">
    <input type="text" class="validate" name="nome"required value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="tipo" required value="{{isset($registro->tipo) ? $registro->tipo : ''}}">
    <label>Tipo</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="especialidade" required value="{{isset($registro->especialidade) ? $registro->especialidade : ''}}">
    <label>Especialidade</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="vida" required value="{{isset($registro->vida) ? $registro->vida : ''}}">
    <label>Vida</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="defesa" required value="{{isset($registro->defesa) ? $registro->defesa : ''}}">
    <label>Defesa</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="dano" required value="{{isset($registro->dano) ? $registro->dano : ''}}">
    <label>Dano</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="velocidade_ataque" required value="{{isset($registro->velocidade_ataque) ? $registro->velocidade_ataque : ''}}">
    <label>Velocidade de Ataque</label>
  </div>

  <div class="input-field">
    <input type="text" class="validate" name="velocidade_movi" required value="{{isset($registro->velocidade_movi) ? $registro->velocidade_movi : ''}}">
    <label>Velocidade de Movimento</label>
  </div>

  <div class="file-field  input-field">
    <div class="btn  green accent-3">
      <span>Imagem</span>
      <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>

  @if(isset($registro->imagem))
  <div class="center">
    <img width="100 " src="{{asset($registro->imagem)}}" />
  </div>
  @endif

</div>