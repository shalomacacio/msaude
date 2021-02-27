
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

<div class="col-md-4">
  <label for="validationServer03" class="form-label">Rua</label>
  <input type="text" class="form-control " id="endereco" name="endereco">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-2">
  <label for="validationNum" class="form-label">Nº</label>
  <input type="text" class="form-control " id="validationNum" name="num">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-2">
  <label for="validationBairro" class="form-label">Bairro</label>
  <select class="form-select " id="validationBairro" name="bairro">
    <option selected disabled value="">Choose...</option>
    <option>...</option>
  </select>
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-3">
  <label for="validationServer05" class="form-label">Cidade</label>
  <input type="text" class="form-control " id="validationServer05" name="cidade">
  @include('layouts.partials.validade.feedback')
</div>