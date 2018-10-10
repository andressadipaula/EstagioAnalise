<div class="container">

  <!-- Linha 1 -->
  <div class="row">
    <div class="input-field col s6">
      <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
      <label>NOME</label>
    </div>

    <div class="input-field col s6">
      <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
      <label>DESCRIÇÃO</label>
    </div>
  </div>
</div>
