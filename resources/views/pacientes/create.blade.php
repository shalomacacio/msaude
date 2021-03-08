@extends('layouts.admin')

@section('content')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Cadastro</h1>
                <hr class="mb-4">
                
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Dados de Acesso</h3>
                        <div class="section-intro">informações de cadastramento para ter acesso a plataforma e acompanhamento 
                        dos resultados e notificações.</div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome Completo<span class="ml-2"
                                                data-container="body" data-toggle="popover" data-trigger="hover"
                                                data-placement="top"
                                                data-content="Digite Seu Nome Completo"><svg
                                                    width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                    <circle cx="8" cy="4.5" r="1" />
                                                </svg></span></label>
                                        <input type="text" class="form-control" id="nome" placeholder="{{ Auth::user()->nome }}" disabled>
                                        @error('nome') {{ $message }} @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpf"
                                            placeholder="{{ Auth::user()->cpf }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="celular" class="form-label">Celular - WhatsApp</label>
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
                      <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur
                          adipiscing elit. <a href="help.html">Learn more</a></div>
                  </div>
                  <div class="col-12 col-md-8">
                      <div class="app-card app-card-settings shadow-sm p-4">
                          
                          <div class="app-card-body">
                              <form class="settings-form"  action="{{ route('pacientes.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
                                  <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento">
                                  @error('dt_nascimento') {{ $message }} @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="sexo" class="form-label">Sexo</label>
                                  <select class="form-control" id="sexo" name="sexo">
                                    <option selected="" value=" ">--SELECIONE--</option>
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMININO</option>
                                  </select>
                                  @error('sexo') {{ $message }} @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="rua" class="form-label">Endereço</label>
                                  <input type="text" class="form-control" id="rua" name="rua">
                                  @error('rua') {{ $message }} @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="num" class="form-label">Nº</label>
                                  <input type="text" class="form-control" id="num" name="num">
                                  @error('num') {{ $message }} @enderror
                                </div>

                                <div class="mb-3">
                                  <label for="bairro" class="form-label">Bairro</label>
                                  <select class="form-control" name="bairro">
                                    <option selected="" value=" ">--SELECIONE--</option>
                                    @foreach ($bairros as $bairro)
                                    <option value="{{ $bairro->id }}">{{ $bairro->nome }}</option>
                                    @endforeach
                                  </select>
                                  @error('bairro') {{ $message }} @enderror
                                </div>

                                  <div class="mb-3">
                                      <label for="cns" class="form-label">CNS - CARTÃO NACIONAL DE SAÚDE<span class="ml-2"
                                              data-container="body" data-toggle="popover" data-trigger="hover"
                                              data-placement="top"
                                              data-content="Também conhecido com CARTEIRA DO SUS, possui 15 digitos que precisar ser inseridos corretamente "><svg
                                                  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle"
                                                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd"
                                                      d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                  <path
                                                      d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                  <circle cx="8" cy="4.5" r="1" />
                                              </svg></span></label>
                                      <input type="text" class="form-control" id="cns" name="cns" >
                                      @error('cns') {{ $message }} @enderror
                                  </div>

                                  <div class="mb-3">
                                      <label for="ubs" class="form-label">UBS - Unidade Básica de Sáúde</label>
                                      <select class="form-control" id="ubs_id" name="ubs_id" required>
                                        <option selected="" value="option-1">--SELECIONE--</option>
                                        @foreach ($ubs as $u)
                                        <option value="{{ $u->id }}">{{ $u->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('ubs') {{ $message }} @enderror
                                  </div>

                                  <div class="mb-3">
                                      <label for="agente_saude" class="form-label">Agente de Saúde</label>
                                      <input type="text" class="form-control" id="agente_saude" name="agente_saude">
                                  </div>

                                  <button type="submit" class="btn app-btn-primary" >Salvar Dados</button>
                                  
                                  <input type="hidden" name="nome"  value="{{ Auth::user()->nome }}" >
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
                        <div class="section-intro">Settings section intro goes here. Duis velit massa, faucibus non
                            hendrerit eget.</div>
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

    @endsection
