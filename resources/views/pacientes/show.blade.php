@extends('layouts.admin')

@section('content')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Paciente</h1>

                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Dados Pessoais</h3>
                        <div class="section-intro">Confira seus dados pessoais, se tiver qualquer dúvida entre em contato conosco <a href="{{ route('pacientes.index') }}">Clique Aqui</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <div class="mb-2"><strong>Nome:</strong> {{ $paciente->nome }} </div>
                                <div class="mb-2"><strong>Sexo:</strong> {{ $paciente->sexo }} </div>
                                <div class="mb-2"><strong>CPF:</strong> {{ $paciente->cpf }} </div>
                                <div class="mb-2"><strong>Data Nascimento:</strong> {{\Carbon\Carbon::parse($paciente->dt_nascimento)->format('d-m-Y')}} </div>
                                <div class="mb-4"><strong>Celular:</strong> {{ $paciente->celular }}</div>
                                <div class="mb-4"><strong>UBS:</strong> {{ $paciente->ubs->nome }} </div>
                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->
                <hr class="my-4">

                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-4">
                      <h3 class="section-title">Comorbidades</h3>
                      <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="help.html">Learn more</a></div>
                  </div>
                  <div class="col-12 col-md-8">
                      <div class="app-card app-card-settings shadow-sm p-4">

                          <div class="app-card-body">
                            <ul class="list-unstyled">
                              @foreach ($paciente->comorbidades as $comorbidade)
                              <li>
                                  <svg width="1em" height="1em" viewBox="0 0 16 16"
                                      class="bi bi-check2 text-primary mr-2" fill="currentColor"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd"
                                          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                  </svg> {{ $comorbidade->descricao }}
                              </li>
                              @endforeach
                            </ul>
                          </div>
                          <!--//app-card-body-->

                      </div>
                      <!--//app-card-->
                  </div>
              </div>
              <!--//row-->
              
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->

    </div>
    
    @endsection
