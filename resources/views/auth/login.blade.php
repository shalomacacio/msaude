@extends('layouts.site')

@section('content')



    <!-- Hero section Start -->
    <section class="hero-section-2" id="home" style="background:  url({{url('pmm/images/bg-1.png')}}) center center;">
      <div class="container">
          <div class="row vertical-content justify-content-center">
              <div class="col-lg-6">
                  <div class="hero-wrapper mb-4">
                      <p class="font-16 text-uppercase">CAMPANHA DE VACINAÇÃO COVID-19</p>
                      <h1 class="hero-title mb-4">Cadastro Municipal para vacinação da COVID-19 em<span class="text-primary"> Maranguape</span></h1>



                      <p>Aqui você vai encontrar informações, tirar dúvidas sobre a campanha e acompanhar o andamento da imunização na cidade de Maranguape:</p>

                      <div class="mt-4">
                          <a href="#planooperacional" class="btn btn-primary mt-2 mr-2">Plano Operacional</a>
                          <a href="#listavacinados" class="btn btn-success mt-2 mr-2">Lista de Vacinados</a>
                      </div>
                  </div>

              </div>

              <div class="col-lg-4 offset-lg-2">
                  <div class="card mx-auto p-4 rounded mt-5 mt-lg-0">
                      <div class="text-center">
                          <p class="text-muted mb-2 font-13 text-uppercase">SEJA BEM VINDO,</p>
                          <h5 class="form-title mb-4">Informe seus dados</h5>
                      </div>

          
                      <form class="registration-form" id="myForm" action="{{ route('auth') }}" method="POST" >
                        @csrf
                          <div class="form-group mb-4">
                              <label class=" font-15 @error('cpf') is-invalid @enderror">Seu CPF:* - somente números</label>
                              <input type="text" class="form-control" id="cpf"  name="cpf" placeholder="">
                              <div class="invalid-feedback">@error('cpf') {{ $message }} @enderror</div>
                          </div>
                          <div class="form-group mb-3">
                              <label class=" font-15 @error('celular') is-invalid @enderror">Telefone:*- DDD + Nº</label>
                              <input type="text" class="form-control" id="celular"  name="celular" placeholder="">
                              <div class="invalid-feedback">@error('celular') {{ $message }} @enderror</div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-block btn-sm">Entrar <i class="mdi mdi-arrow-right ml-2"></i></button>
                      </form> 

                  </div>
              </div>
      
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </section>


  <!-- Features start -->
  <section class="section" id="informa">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="text-center mb-5">
                      <h5 class="text-primary text-uppercase small-title">Informações</h5>
                      <h4 class="mb-3">Baixe o Plano de Operalização e a Lista de Vacinados</h4>
                      <p>Data da última atualização da Lista dos Vacinados: 31/04/2021. </p>
                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row" id="listavacinados">
              <div class="col-lg-5">
                  <div>
                      <div class="avatar-md mb-4">
                          <span class="avatar-title rounded-circle bg-soft-primary">
                                  <i>  <img src="{{ asset('pmm/fonts/file-document-outline.svg') }}" alt="" class="img-fluid mx-auto d-block"> </i>
                              </span>
                      </div>
                      <h5>Lista de Vacinados</h5>
                      <p class="mb-4">A Prefeitura de Maranguape divulga, por meio da Secretaria Municipal da Saúde, as listas de vacinados.</p>

                      <div class="row">
                          <div class="col-sm-6 col-lg-8">
                              <p><i data-feather="check" class="icon-dual-success mr-2"></i> Lista de pessoas vacinadas</p>
                          </div>
                      </div>

                      <div class="mt-4">
                          <a href="#" class="btn btn-primary">Ver agora <i data-feather="arrow-right" class="icons-sm ml-1"></i></a>
                      </div>
                  </div>
              </div>

              <div class="col-lg-5 ml-lg-auto col-sm-8">
                  <div class="card border border-light shadow-none mt-5 mt-lg-0">
                      <div class="card-header border-0 bg-transparent">
                          <div>
                              <i class="mdi mdli-circe text-danger mr-1"></i>
                              <i class="mdi mdi-circle text-warning mr-1"></i>
                              <i class="mdi mdi-circle text-success mr-1"></i>
                          </div>
                      </div>
                      <div class="card-body bg-light">
                          <div class="box-shadow">
                              <img src="{{ asset('pmm/images/features/img-1.png')}}" alt="" class="img-fluid mx-auto d-block">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row mt-5 pt-5" id="planooperacional">
              <div class="col-lg-5 col-sm-8">
                  <div class="card border border-light shadow-none">
                      <div class="card-header border-0 bg-transparent">
                          <div>
                              <i class="mdi mdi-circle text-danger mr-1"></i>
                              <i class="mdi mdi-circle text-warning mr-1"></i>
                              <i class="mdi mdi-circle text-success mr-1"></i>
                          </div>
                      </div>
                      <div class="card-body bg-light">
                          <div class="box-shadow">
                              <img src="{{ asset('pmm/images/features/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-5 ml-lg-auto">
                  <div class="mt-4 mt-lg-0">
                      <div class="avatar-md mb-4">
                          <span class="avatar-title rounded-circle bg-soft-primary">
                                  <i>
                <img src="{{ asset('pmm/fonts/text-box-check-outline.svg')}}" alt="" class="img-fluid mx-auto d-block">
                </i>
                              </span>
                      </div>
                      <h5>Plano Municipal de Operacionalização da Vacinação / COVID-19</h5>
                      <p class="mb-4">A distribuição das vacinas segue o Plano Nacional de Operacionalização da Vacinação contra a COVID-19.</p>

                      <div class="row">
                          <div class="col-sm-6">
                              <p><i data-feather="check" class="icon-dual-success mr-2"></i>Grupos prioritários</p>
                          </div>
                          <div class="col-sm-6">
                              <p><i data-feather="check" class="icon-dual-success mr-2"></i>Fases da vacinação</p>
                          </div>
                      </div>

                      <div class="mt-4">
                          <a href="#" class="btn btn-primary" >Ver agora <i data-feather="arrow-right" class="icons-sm ml-1"></i></a>
                      </div>
                  </div>
              </div>

          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </section>
  <!-- Features end -->



@endsection

@section('javascritp')
<script src="{{ asset('pmm/js/jquery.mask.min.js') }}"></script>

<script>
$(document).ready(function(){
  $('#celular').mask('(00) 00000-0000', {'translation': {0: {pattern: /[0-9*]/}}} );
  $('#cpf').mask('000.000.000-00', {'translation': {0: {pattern: /[0-9*]/}}} );
});

$("#myForm").submit(function() {
  $("#cpf, #celular").unmask();
});

</script>


@stop