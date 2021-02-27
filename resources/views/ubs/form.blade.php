<div class="col-md-8">
  <label for="validationFantasia" class="form-label">Nome Fantasia</label>
  <input type="text" class="form-control " id="validationFantasia" name="nome_fantasia">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-4">
  <label for="validationCnes" class="form-label">CNES</label>
  <input type="text" class="form-control " id="validationCnes" name="cnes">
  @include('layouts.partials.validade.feedback')
</div>

<div class="col-md-8">
  <label for="validationEndereco" class="form-label">Endereço</label>
  <input type="text" class="form-control " id="validationEndereco" name="endereco">
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

