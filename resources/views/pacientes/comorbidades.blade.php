@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Comorbidades</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Editar
          </button>
      </div>
  </div>
  <div class="bd-example">
    <form class="row g-3" action="{{ route('pacientes.comorbCreate') }}" method="POST">
      @csrf
      
        @foreach ($comorbidades as $comorbidade)
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="comorbidades[]" value="{{ $comorbidade->id }}" >
          <label class="form-check-label" for="flexSwitchCheckChecked"> {{ $comorbidade->descricao }} </label>
        </div> 
        @endforeach

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Enviar Dados</button>
      </div>

    </form>
    </div>
</main>

@endsection