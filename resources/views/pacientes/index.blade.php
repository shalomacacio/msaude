@extends('layouts.admin')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
  <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Informações ao Paciente</h1>
  </div>

  <div class="bg-light p-5 rounded">
    <h1>Caro Paciente</h1>
    <p class="lead">Instruções de uso do sistema </p>
    <p class="lead">Informar sobre ficar atento as respostas do sistema </p>
    <p class="lead">Orientar sobre confirmar o agendamento </p>
    <p class="lead">Informar que a resposta do sistema estará a disposição no aplicativo </p>
    <a class="btn btn-lg btn-primary" href="#" role="button">Consultar Resultados </a>
  </div>
  
</main>

@endsection