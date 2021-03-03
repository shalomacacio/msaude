@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dados Pessoais</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Editar
          </button>
      </div>
  </div>
  <div class="bd-example">
    <form class="row g-3" action="{{ route('pacientes.store') }}" method="POST">
      @csrf
      @include('pacientes.form')

      <div class="col-12">
        @if(!$paciente)
        <button class="btn btn-lg btn-primary" type="submit">Enviar Dados</button>
        @endif
      </div>

    </form>
    </div>
</main>

@endsection

@section('javascript')
<script>

  function getEndereco() {
    // Se o campo CEP não estiver vazio
    if($.trim($("#validationCep").val()) != ""){
         /*
              Para conectar no serviço e executar o json, precisamos usar a função
              getScript do jQuery, o getScript e o dataType:"jsonp" conseguem fazer o cross-domain, os outros
              dataTypes não possibilitam esta interação entre domínios diferentes
              Estou chamando a url do serviço passando o parâmetro "formato=javascript" e o CEP digitado no formulário
              http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val()
         */
         $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#validationCep").val(),
function(){
            // o getScript dá um eval no script, então é só ler!
            //Se o resultado for igual a 1
            if(  resultadoCEP["resultado"] ){
               // troca o valor dos elementos
               $("#endereco").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
               //$("#campoBairro").val(unescape(resultadoCEP["bairro"]));
               $("#campoCidade").val(unescape(resultadoCEP["cidade"]));
               $("#campoEstado").val(unescape(resultadoCEP["uf"]));
               //$("#enderecoCompleto").show("slow");
               $("#campoNumero").focus();
            }else{
               alert("Endereço não encontrado");
               return false;
            }
          });
       }
   else{
       alert('Antes, preencha o campo CEP!')
   }

}
</script>
@stop