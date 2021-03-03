
<div class="col-md-4">
  <label for="nome" class="form-label">CNS - Cartão SUS</label>
  <input type="text" class="form-control " id="cns" name="cns" required
   @isset( $paciente->cns )
      value="{{ $paciente->cns }}" disabled
  @endisset >
</div>

<div class="col-md-4">
  <label for="nome" class="form-label">CPF</label>
  <input type="text" class="form-control " id="cpf"  value="{{ Auth::user()->cpf }}" disabled >
</div>

<div class="col-md-2">
  <label for="validationDtNascimento" class="form-label">Data Nascimento</label>
  <div class="input-group has-validation">
    <input type="date" class="form-control " id="validationDtNascimento"  name="dt_nascimento" aria-describedby="inputGroupPrepend3" required
    @isset( $paciente->dt_nascimento )
      value="{{ $paciente->dt_nascimento }}" disabled 
    @endisset >
  </div>
</div>

<div class="col-md-2">
  <label for="validationSexo" class="form-label">Sexo</label>

  <select class="form-select " id="validationSexo" name="sexo" required
  @isset($paciente->sexo)
    disabled
  @endisset >
  @isset($paciente->sexo)
    <option  selected value="{{ $paciente->sexo }}">{{ $paciente->sexo }}</option>
  @endisset
  @empty($paciente->sexo)
    <option  value="F">-- SELECIONE -- </option>
    <option  selected value="F">F</option>
    <option value="M">M</option>
  @endempty
  </select>
</div>

<div class="col-md-6">
  <label for="nome" class="form-label">Nome</label>
  <input type="text" class="form-control " id="nome" value="{{ Auth::user()->nome }}" disabled>
</div>

<div class="col-md-6">
  <label for="nome" class="form-label">Nome da Mãe</label>
  <input type="text" class="form-control " id="nome_mae" name="nome_mae" required
  @isset( $paciente->nome_mae )
    value="{{ $paciente->nome_mae }}" disabled
  @endisset>
</div>

<div class="col-md-6">
  <label for="validationCelular" class="form-label">Telefone (WhatsApp) </label>
  <input type="text" class="form-control " id="validationCelular" value="{{ Auth::user()->celular }}" disabled>
</div>

<div class="col-md-6">
  <label for="validationEmail" class="form-label">Email </label>
  <input type="text" class="form-control " id="validationEmail" name="email" required
  
  @isset( $paciente->email )
    value="{{ $paciente->email }}" disabled
  @endisset>
</div>

<div class="col-md-2">
  <label for="validationCep" class="form-label"> CEP </label>
  <input type="text" class="form-control " id="validationCep" name="cep" required
  @isset( $paciente->cep )
    value="{{ $paciente->cep }}" disabled
  @endisset>
</div>

<div class="col-md-8">
  <label for="validationRua" class="form-label">Rua</label>
  <input type="text" class="form-control " id="endereco" name="rua" required
  @isset( $paciente->rua )
    value="{{ $paciente->rua }}" disabled
  @endisset>
</div>

<div class="col-md-2">
  <label for="validationNum" class="form-label">Nº</label>
  <input type="text" class="form-control " id="validationNum" name="num" required
  @isset( $paciente->num )
    value="{{ $paciente->num }}" disabled
  @endisset>
</div>

<div class="col-md-4">
  <label for="validationComp" class="form-label"> Complemento </label>
  <input type="text" class="form-control " id="validationComp" name="comp">
</div>

<div class="col-md-4">
  <label for="validationBairro" class="form-label">Bairro</label>
  <select class="form-select " id="validationBairro" name="bairro">
    <option selected value="1">Centro</option>
    <option selected value="2">Guabiraba</option>
    <option selected value="3">Pq São João</option>
  </select>
</div>

<div class="col-md-2">
  <label for="validationCidade" class="form-label">Cidade</label>
  <select class="form-select " id="validationUf" name="uf" required>
    <option selected value="1">Maranguape</option>
  </select>
</div>

<div class="col-md-2">
  <label for="validationUf" class="form-label">Estado</label>
  <select class="form-select " id="validationCidade" name="uf" required>
    <option selected value="1">CE</option>
  </select>
</div>

<div class="col-md-6">
  <label for="validationUbs" class="form-label">UBS - POSTO DE SAÚDE</label>
  <select class="form-select " id="validationUbs" name="ubs_id" required>
    @foreach ($ubs as $u)
      <option selected value="{{ $u->id }}">{{ $u->nome }}</option>
    @endforeach
  </select>
</div>

<div class="col-md-6">
  <label for="validationUbs" class="form-label">Agente de Saúde</label>
  <select class="form-select " id="validationUbs" name="agen_saude_id" required>
    <option selected value="1">Fulana</option>
  </select>
</div>

<input type="hidden" name="nome" value="{{Auth::user()->nome}}" />
<input type="hidden" name="cpf" value="{{Auth::user()->cpf}}" />
<input type="hidden" name="celular" value="{{Auth::user()->celular}}" />