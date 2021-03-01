<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Gestão Hospitalar">
    <meta name="author" content="Shalom Acácio">
    <meta name="generator" content="Hugo 0.20.0">
    <title>M-Saúde</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/dist/css/bootstrap.min.css') }}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/bootstrap/sign-in/signin.css') }}">
  </head>
  <body class="text-center">
    
  <main class="form-signin">
    <form action="{{ route('pacientes.store') }}" method="POST">
      @csrf

      <img class="mb-4" src="{{ asset('site/bootstrap/brand/logo.png') }}" alt="" width="200">
      <h1 class="h3 mb-3 fw-normal">Campanha de Vacinação COVID-19</h1>

      <label for="inputNome" class="visually-hidden">Nome</label>
      <input type="text" id="inputNome" class="form-control" placeholder="Nome" name="nome"  required autofocus>
     
      <label for="inputCpf" class="visually-hidden">CPF</label>
      <input type="text" id="inputCpf" class="form-control" placeholder="CPF" name="cpf"  required autofocus>
      
      <label for="inputCelular" class="visually-hidden">Celular - WhatsApp</label>
      <input type="text" id="inputCelular" class="form-control" placeholder="Celular" name="celular"  required autofocus>
      
      <div class="checkbox mb-3">
        <label>
          <a href="{{ route('login') }}">Realizar Login</a>
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; Caffeinne Sistemas</p>
    </form>
  </main>


    
  </body>
</html>
