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

  <div class="row">

  <div class="input-field col s6">
    <input type="text" name="situacao" value="{{isset($registro->situacao) ? $registro->situacao : ''}}">
    <label>Situação</label>
  </div>

  <div class="input-field col s6">
    <select name="ordemservicos_id">
          <option value="" disabled selected>Selecione uma opção</option>
          @foreach($ordemservicos as $ordemservico)
          <option value="{{$ordemservico->id}}" {{isset($registro->ordemservicos_id) && $registro->ordemservicos_id==$ordemservico->id ? 'selected' : ''}}>{{$ordemservico->nome}}</option  required>
          @endforeach
    </select>
    <label>Ordem de Servico</label>
  </div>

  <input type="hidden" name="departamentos_id" value="{{Auth::user()->departamentos_id}}">

  </div>
</div>

<!-- Script para habilitar o select -->
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
