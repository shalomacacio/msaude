@extends('layouts.admin')

@section('content')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Cadastro</h1>
                @include('layouts.partials.validators.alert-session')
                <hr class="mb-4">
                
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Dados de Acesso</h3>
                        <div class="section-intro">Informações de cadastramento para ter acesso e acompanhamento 
                        dos resultados e notificações.</div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <form class="settings-form">
                                    
                                    <div class="mb-3">
                                        <label for="name" class="form-label @error('name') is-invalid @enderror"> Nome Completo </label>
                                        <input type="text" class="form-control" id="name" placeholder="{{ Auth::user()->name }}" disabled>
                                       @if($errors->any()) {{ $errors->first('name')}} @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="cpf" class="form-label @error('dt_nascimento') is-invalid @enderror">CPF</label>
                                        <input type="text" class="form-control" id="cpf"
                                            placeholder="{{ Auth::user()->cpf }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="celular" class="form-label @error('dt_nascimento') is-invalid @enderror">Celular - WhatsApp</label>
                                        <input type="text" class="form-control" id="celular"
                                            placeholder="{{ Auth::user()->celular }}" disabled>
                                    </div>
                                </form>
                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->
                <hr class="my-4">

                @if(!Auth::user()->paciente )
                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-4">
                      <h3 class="section-title">Dados Pessoais</h3>
                      <div class="section-intro">Preencha todos os dados corretamente para agilizar seu processo de agendamento.</div>
                  </div>
                  <div class="col-12 col-md-8">
                      <div class="app-card app-card-settings shadow-sm p-4">
                          
                          <div class="app-card-body">
                              <form class="settings-form"  action="{{ route('pacientes.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="dt_nascimento" class="form-label @error('dt_nascimento') is-invalid @enderror">Data de Nascimento</label>
                                  <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento">
                                  <div class="invalid-feedback">@error('dt_nascimento') {{ $message }} @enderror</div>
                                </div>
                                                                
                                <div class="mb-3">
                                  <label for="sexo" class="form-label @error('sexo') is-invalid @enderror">Sexo</label>
                                  <select class="form-control" id="sexo" name="sexo">
                                    <option selected="" value=" ">--SELECIONE--</option>
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMININO</option>
                                  </select>
                                  <div class="invalid-feedback">@error('sexo') {{ $message }} @enderror</div>
                                </div>

                                <div class="mb-auto">
                                  <label for="rua" class="form-label @error('rua') is-invalid @enderror">Endereço</label>
                                  <input type="text" class="form-control" id="rua" name="rua">
                                  <div class="invalid-feedback">@error('rua') {{ $message }} @enderror</div>
                                </div>

                                <div class="mb-3">
                                  <label for="num" class="form-label @error('num') is-invalid @enderror">Nº</label>
                                  <input type="text" class="form-control" id="num" name="num">
                                  <div class="invalid-feedback">@error('num') {{ $message }} @enderror</div>
                                </div>

                                <div class="mb-3">
                                  <label for="bairro_id" class="form-label @error('bairro_id') is-invalid @enderror">Bairro</label>
                                  <select class="form-control" name="bairro_id">
                                    <option selected="" value=" ">--SELECIONE--</option>
                                    @foreach ($bairros as $bairro)
                                    <option value="{{ $bairro->id }}">{{ $bairro->nome }}</option>
                                    @endforeach
                                  </select>
                                  <div class="invalid-feedback">@error('bairro_id') {{ $message }} @enderror</div>
                                </div>

                                  <div class="mb-3">
                                      <label for="cns" class="form-label @error('cns') is-invalid @enderror">CNS - CARTÃO NACIONAL DE SAÚDE
                                        <span class="ml-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                                            data-content="Número da Carteira do SUS com 15 dígitos"> @include('layouts.partials.admin.svg.bi-info-circle')
                                        </span>
                                      </label>
                                      <input type="text" class="form-control" id="cns" name="cns" >
                                      <div class="invalid-feedback">@error('cns') {{ $message }} @enderror</div>
                                  </div>

                                  <div class="mb-3">
                                      <label for="ubs" class="form-label @error('ubs_id') is-invalid @enderror">UBS - Unidade Básica de Sáúde
                                        <span class="ml-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                                            data-content="POSTO DE SAÚDE"> @include('layouts.partials.admin.svg.bi-info-circle')
                                        </span>
                                      </label>
                                      <select class="form-control" id="ubs_id" name="ubs_id" required>
                                        <option selected="" value=" ">--SELECIONE--</option>
                                        @foreach ($ubs as $u)
                                        <option value="{{ $u->id }}">{{ $u->nome }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">@error('ubs_id') {{ $message }} @enderror</div>
                                  </div>

                                  <div class="mb-3">
                                      <label for="agente_saude" class="form-label @error('agente_saude') is-invalid @enderror">Agente de Saúde</label>
                                      <input type="text" class="form-control" id="agente_saude" name="agente_saude">
                                      <div class="invalid-feedback">@error('agente_saude') {{ $message }} @enderror</div>
                                  </div>

                                  <button type="submit" class="btn app-btn-primary" >Salvar Dados</button>
                                  
                                  <input type="hidden" name="nome"  value="{{ Auth::user()->name }}" >
                                  <input type="hidden" name="cpf"  value="{{ Auth::user()->cpf }}" >
                                  <input type="hidden" name="celular"  value="{{ Auth::user()->celular }}" >

                              </form>
                          </div>
                          <!--//app-card-body-->
                          
                      </div>
                      <!--//app-card-->
                  </div>
              </div>
              <!--//row-->
              <hr class="my-4">
              @endif
              
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Comorbidades</h3>
                        <div class="section-intro">Selecione as comorbidades e clique no botão Salvar Dados.</div>
                    </div>
                   
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <div class="app-card-body">
                                <form class="settings-form" action="{{ route('pacientes.comorbCreate') }}" method="POST">
                                    @csrf
                                    @foreach ($comorbidades as $comorbidade)
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="comorbidades[]" value="{{ $comorbidade->id }}">
                                        <label class="form-check-label" for="settings-switch-2">{{ $comorbidade->descricao }}</label>
                                    </div>
                                    @endforeach
                                    <div class="mt-3">
                                        <button type="submit" class="btn app-btn-primary">Salvar Dados</button>
                                    </div>
                                </form>
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->
                <hr class="my-4">
                
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
    </div>

@endsection

