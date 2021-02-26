
<div class="col-md-4">
  <label for="nome" class="form-label">CNS - Cartão SUS</label>
  <input type="text" class="form-control " id="cns" name="cns">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="nome" class="form-label">CPF</label>
  <input type="text" class="form-control " id="cpf" name="cpf">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationDtNascimento" class="form-label">Data Nascimento</label>
  <div class="input-group has-validation">
    <input type="date" class="form-control " id="validationDtNascimento"  name="dt_nascimento" aria-describedby="inputGroupPrepend3">
  @include('layouts.partials.validade.feedback')
  </div>
</div>

<div class="col-md-8">
  <label for="nome" class="form-label">Nome</label>
  <input type="text" class="form-control " id="nome" name="nome">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationSexo" class="form-label">Sexo</label>
  <select class="form-select " id="validationSexo" name="sexo">
    <option selected  value="F">F</option>
    <option selected  value="M">M</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-12">
  <label for="nome" class="form-label">Nome da Mãe</label>
  <input type="text" class="form-control " id="nome_mae" name="nome_mae">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationCelular" class="form-label">Telefone (WhatsApp) </label>
  <input type="text" class="form-control " id="validationCelular" name="celular">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationEmail" class="form-label">Email </label>
  <input type="text" class="form-control " id="validationEmail" name="email">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationEmailVerified" class="form-label">Validar Email </label>
  <input type="text" class="form-control " id="validationEmailVerified" name="email_veiried_at">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-2">
  <label for="validationCep" class="form-label"> CEP </label>
  <input type="text" class="form-control " id="validationCep" name="cep">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-8">
  <label for="validationRua" class="form-label">Rua</label>
  <input type="text" class="form-control " id="endereco" name="rua">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-2">
  <label for="validationNum" class="form-label">Nº</label>
  <input type="text" class="form-control " id="validationNum" name="num">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationComp" class="form-label"> Complemento </label>
  <input type="text" class="form-control " id="validationComp" name="comp">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationBairro" class="form-label">Bairro</label>
  <select class="form-select " id="validationBairro" name="bairro">
    <option selected value="1">Centro</option>
    <option selected value="2">Guabiraba</option>
    <option selected value="3">Pq São João</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-2">
  <label for="validationCidade" class="form-label">Cidade</label>
  <select class="form-select " id="validationUf" name="uf">
    <option selected value="1">Maranguape</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-2">
  <label for="validationUf" class="form-label">Estado</label>
  <select class="form-select " id="validationCidade" name="uf">
    <option selected value="1">CE</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-6">
  <label for="validationUbs" class="form-label">UBS - POSTO DE SAÚDE</label>
  <select class="form-select " id="validationUbs" name="ubs_id">
    <option selected value="1">Posto do Centro</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-6">
  <label for="validationUbs" class="form-label">Agente de Saúde</label>
  <select class="form-select " id="validationUbs" name="agen_saude_id">
    <option selected value="1">Fulana</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

