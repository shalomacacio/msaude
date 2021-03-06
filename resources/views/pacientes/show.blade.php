@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h4 class="h2">Dados Pessoais</h4>
  </div>

  <div class="col-4">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <h6 id="cns"> CNS - Cartão SUS </h6>
            <p>{{ $paciente->cns }}</p>

            <h6 id="cns"> NOME</h6>
            <p>{{ $paciente->nome }}</p>

            <h6 id="cns"> CPF</h6>
            <p>{{ $paciente->cpf }}</p>

            <h6 id="cns"> DATA DE NASCIMENTO </h6>
            <p>{{ \Carbon\Carbon::parse($paciente->dt_nascimento)->format('d-m-Y') }}</p>

            <h6 id="cns"> MÃE </h6>
            <p>{{ $paciente->nome_mae }}</p>

            <h6 id="cns"> CELULAR </h6>
            <p>{{ $paciente->celular }}</p>

            <h6 id="cns"> UBS - POSTO DE SAÚDE</h6>
            <p>{{ $paciente->ubs->nome }}</p>
        
      </div>
  </div>
    
</main>

@endsection
