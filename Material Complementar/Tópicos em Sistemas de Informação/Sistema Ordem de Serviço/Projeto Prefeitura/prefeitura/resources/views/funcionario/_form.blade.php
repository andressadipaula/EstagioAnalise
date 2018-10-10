<!-- <div class="container"> -->

  <h5 style="border-bottom: 1px solid #FF5722;">Dados Gerais</h5>
  <!-- Linha 1 -->
  <div class="row">

    <div class="input-field col s2">
      <input type="text" name="cpf" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
      <label>CPF</label>
    </div>

    <div class="input-field col s2">
      <input type="text" name="rg" value="{{isset($registro->rg) ? $registro->rg : ''}}">
      <label>RG</label>
    </div>

    <div class="input-field col s3">
      <input type="text" name="dataNasc" value="{{isset($registro->dataNasc) ? $registro->dataNasc : ''}}">
      <label>DATA DE NASCIMENTO</label>
    </div>

    <div class="input-field col s5">
      <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
      <label>NOME</label>
    </div>

  </div>

  <!-- Linha 2  -->
  <div class="row">
    <div class="input-field col s2">
      <!-- <i class="material-icons prefix">phone</i> -->
      <input type="text" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
      <label>TELEFONE</label>
    </div>

    <div class="input-field col s4">
      <!-- <i class="material-icons prefix">phone</i> -->
      <input type="text" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
      <label>E-MAIL</label>
    </div>

    <div class="input-field col s3">
      <select name="permissao">
        <option value="" disabled selected>Selecione uma opção</option>
        <option value="Prefeito">Prefeito(a)</option>
        <option value="Secretario">Secretário(a)</option>
        <option value="Funcionario">Funcionário(a)</option>
      </select>
      <label>Vincular Função</label>
    </div>

    <div class="input-field col s3">
        <select name="departamentos_id">
          <option value="" disabled selected>Selecione uma opção</option>
          @foreach($departamentos as $departamento)
          <option value="{{$departamento->id}}" {{isset($registro->departamentos_id) && $registro->departamentos_id==$departamento->id ? 'selected' : ''}}>{{$departamento->nome}}</option  required>
          @endforeach
        </select>
        <label>Vincular Departamento</label>
    </div>
  </div>

  <h5 style="border-bottom: 1px solid #FF5722;">Endereço</h5>

  <!-- Linha 3 - endereço  -->
  <div class="row">

    <div class="input-field col s8">
      <!-- <i class="material-icons prefix">phone</i> -->
      <input type="text" name="rua" value="{{isset($endereco->rua) ? $endereco->rua : ''}}">
      <label>LOGRADOURO</label>
    </div>

    <div class="input-field col s4">
      <!-- <i class="material-icons prefix">phone</i> -->
      <input type="text" name="numero" value="{{isset($endereco->numero) ? $endereco->numero : ''}}">
      <label>NÚMERO</label>
    </div>

  </div>

  <!-- Linha 5 - endereço  -->
  <div class="row">
    <div class="input-field col s6">
      <!-- <i class="material-icons prefix">phone</i> -->
      <input type="text" name="bairro" value="{{isset($endereco->bairro) ? $endereco->bairro : ''}}">
      <label>BAIRRO</label>
    </div>

    <div class="input-field col s6">
      <!-- <i class="material-icons prefix">phone</i> -->
      <input type="text" name="cidade" value="{{isset($endereco->cidade) ? $endereco->cidade : ''}}">
      <label>CIDADE</label>
    </div>

  </div>
<!-- </div> -->

<!-- Script para habilitar o select -->
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
