@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h2">Comorbidades</h3>
  </div>

  <ul>
    @foreach ($paciente->comorbidades as $comorbidade)
      <li>{{ $comorbidade->descricao }} </li>
    @endforeach
  </ul>
    
</main>

@endsection
