@extends('layouts.login_template')

@section('content')
    
<div class="app-auth-body mx-auto">	
  <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon mr-2" src="{{ asset('admin/assets/images/app-logo.svg') }}" alt="logo"></a></div>
<h2 class="auth-heading text-center mb-4">Cadastre-se no Portal</h2>					

<div class="auth-form-container text-left mx-auto">
  <form class="auth-form auth-signup-form" action="{{ route('create') }}" method="POST" >  
    @csrf

    <div class="mb-3">
      <label class="sr-only" for="nome">Nome Completo</label>
      <input id="nome" name="nome" type="text" class="form-control signup-name" placeholder="Nome Completo" required >
      @error('nome') {{ $message }} @enderror
    </div>

    <div class="mb-3">
      <label class="sr-only" for="cpf">CPF</label>
      <input id="cpf" name="cpf" type="text" class="form-control" placeholder="CPF - Somente números" required>
      @error('nome') {{ $message }} @enderror
    </div>

    <div class="mb-3">
      <label class="sr-only" for="celular">CPF</label>
      <input id="" namecelular="celularcpf" type="text" class="form-control" placeholder="CELULAR - Somente números" required>
      @error('celular') {{ $message }} @enderror
    </div>

    <div class="extra mb-3">
    </div><!--//extra-->
    
    <div class="text-center">
      <button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Cadastrar</button>
    </div>
  </form><!--//auth-form-->
  
  <div class="auth-option text-center pt-5">Já possui cadastro? <a class="text-link" href="{{ route('login')}}" >Faça o login</a></div>
</div><!--//auth-form-container-->	


  
</div><!--//auth-body-->
@endsection