
<div class="col-md-4">
  <label for="cns" class="form-label">CNS - Cartão SUS</label>
  <input type="text" class="form-control " id="cns" required  value="{{ Auth::user()->cns }}"  disabled>
  @error('cns') {{ $message }} @enderror
</div>

<div class="col-md-4">
  <label for="nome" class="form-label">CPF</label>
  <input type="text" class="form-control " id="cpf"  name="cpf"  >
  @error('cpf') {{ $message }} @enderror
</div>

<div class="col-md-2">
  <label for="validationDtNascimento" class="form-label">Data Nascimento</label>
  <div class="input-group has-validation">
    <input type="date" class="form-control " id="validationDtNascimento"  name="dt_nascimento" aria-describedby="inputGroupPrepend3" required>
  </div>
  @error('dt_nascimento') {{ $message }} @enderror
</div>

<div class="col-md-2">
  <label for="validationSexo" class="form-label">Sexo</label>
  <select class="form-select " id="validationSexo" name="sexo" required>
    <option selected>-- SELECIONE -- </option>
    <option value="F">F</option>
    <option value="M">M</option>
  </select>
  @error('sexo') {{ $message }} @enderror
</div>

<div class="col-md-6">
  <label for="nome" class="form-label">Nome</label>
  <input type="text" class="form-control " id="nome" value="{{ Auth::user()->nome }}" disabled>
  @error('nome') {{ $message }} @enderror
</div>

<div class="col-md-6">
  <label for="nome_mae" class="form-label">Nome da Mãe</label>
  <input type="text" class="form-control " id="nome_mae" name="nome_mae" required >
  @error('nome_mae') {{ $message }} @enderror
</div>

<div class="col-md-6">
  <label for="validationCelular" class="form-label">Telefone (WhatsApp) </label>
  <input type="text" class="form-control " id="validationCelular" value="{{ Auth::user()->celular }}" disabled>
  @error('celular') {{ $message }} @enderror
</div>

<div class="col-md-6">
  <label for="validationEmail" class="form-label">Email </label>
  <input type="text" class="form-control " id="validationEmail" name="email"  >
</div>

<div class="col-md-2">
  <label for="validationCep" class="form-label"> CEP </label>
  <input type="text" class="form-control " id="validationCep" name="cep" >
  @error('cep') {{ $message }} @enderror
</div>

<div class="col-md-4">
  <label for="validationRua" class="form-label">Rua</label>
  <input type="text" class="form-control " id="endereco" name="rua" required >
  
</div>

<div class="col-md-1">
  <label for="validationNum" class="form-label">Nº</label>
  <input type="text" class="form-control " id="validationNum" name="num" required>
</div>

<div class="col-md-2">
  <label for="validationCidade" class="form-label">Bairro</label>
  <select class="form-select " id="validationUf" name="bairro_id" required>
    <option selected value=" ">--SELECIONE--</option>
    @foreach ($bairros as $bairro)
        <option value="{{ $bairro->id}}">{{ $bairro->nome}}</option>
    @endforeach
    
  </select>
</div>

<div class="col-md-2">
  <label for="validationCidade" class="form-label">Cidade</label>
  <select class="form-select " id="validationUf" name="cidade_id" required>
    <option selected value="2307700">MARANGUAPE</option>
  </select>
</div>

<div class="col-md-1">
  <label for="validationCidade" class="form-label">UF</label>
  <select class="form-select " id="validationUf" name="uf_id" required>
    <option selected value="23">CE</option>
  </select>
</div>

<div class="col-md-4">
  <label for="validationComp" class="form-label"> Complemento </label>
  <input type="text" class="form-control " id="validationComp" name="comp">
</div>

<div class="col-md-4">
  <label for="validationUbs" class="form-label">UBS - POSTO DE SAÚDE</label>
  <select class="form-select " id="validationUbs" name="ubs_id" required>
    <option selected >--SELECIONE--</option>
    @foreach ($ubs as $u)
      <option value="{{ $u->id }}">{{ $u->nome }}</option>
    @endforeach
  </select>
</div>

<div class="col-md-4">
  <label for="validationAgenSaude" class="form-label">Agente de Saúde</label>
  <input type="text" class="form-control " id="agente_saude" name="agente_saude"  >
</div>

<div class="col-md-12">
  <label for="validationObs" class="form-label">Observações</label>
  <textarea name="obs" class="form-control " id="obs" cols="30" rows="3"> </textarea>
</div>

<input type="hidden" name="nome" value="{{Auth::user()->nome}}" />
<input type="hidden" name="cns" value="{{Auth::user()->cns}}" />
<input type="hidden" name="celular" value="{{Auth::user()->celular}}" />