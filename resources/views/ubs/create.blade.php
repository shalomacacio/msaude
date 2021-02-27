@extends('layouts.site')

@section('content')

<section id="cadastro">

    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Cadastro</h2>

    <article class="my-3" id="dados">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>
          @if($errors->any()) 
          @foreach($errors->all() as $erro)
            {{$erro }}
          @endforeach
          @endif
        </h3>
      </div>

      <div>
        <div class="bd-example">
        <form class="row g-3" action="{{ route('ubs.store') }}" method="POST">
          @csrf
          @include('ubs.form')

          <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar Dados</button>
          </div>

        </form>
        </div>
      </div>
    </article>
  </section>
@endsection