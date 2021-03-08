@extends('layouts.login_template')

@section('content')
<div class="app-auth-body mx-auto">	
    <div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="logo-icon mr-2"  src="{{ asset('admin/assets/images/app-logo.svg') }}" alt="logo"></a></div>
    <h2 class="auth-heading text-center mb-5">Seja bem-vindo(a),</h2>
    <div class="auth-form-container text-left">

        <form class="auth-form login-form" action="{{ route('auth')}}" method="POST" > 
            @csrf        
            <div class="mb-3">
                <label class="sr-only @error('cpf') is-invalid @enderror" for="cpf">CPF</label>
                <input id="cpf" name="cpf" type="text" class="form-control " placeholder="CPF" required>
                <div class="invalid-feedback">@error('cpf') {{ $message }} @enderror</div>
            </div><!--//form-group-->


            <div class="mb-3">
                <label class="sr-only @error('celular') is-invalid @enderror" for="celular">Celular</label>
                <input id="celular" name="celular" type="text" class="form-control " placeholder="DDD + Nº Celular" required>
                <div class="invalid-feedback">@error('celular') {{ $message }} @enderror</div>
            </div><!--//form-group-->

            <div class="text-center">
                <button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Entrar</button>
            </div>
        </form>
        
        <div class="auth-option text-center pt-5">Ainda não tem cadastro? Clique <a class="text-link" href="{{ route('register') }}" >Aqui</a>.</div>
    </div><!--//auth-form-container-->	

</div><!--//auth-body-->  
@endsection