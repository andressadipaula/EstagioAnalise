<div class="container">

  <!-- Linha 1 -->
  <div class="row">
    <div class="input-field col s6">
      <input type="text" name="nome" value="">
      <label>NOME</label>
    </div>

    <div class="input-field col s6">
      <input type="text" name="descricao" value="">
      <label>DESCRIÇÃO</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <select name="situacao">
        <option value="" disabled selected>Selecione uma opção</option>
        <option value="Aberta">Aberta</option>
        <option value="Fechada">Fechada</option>
        <option value="Bloqueada">Bloqueada</option>
      </select>
      <label>Situação</label>
    </div>


  <div class="input-field col s4">
    <input type="text" name="data_inicio" value="">
    <label>Data Início</label>
  </div>

  <div class="input-field col s4">
    <input type="text" name="data_fim" value="">
    <label>Data Fim</label>
  </div>

  </div>
</div>

<!-- Script para habilitar o select -->
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
