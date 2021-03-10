@extends('layouts.admin')

@section('content')


<div class="app-wrapper">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            
            <h1 class="app-page-title">Perguntas frequentes!</h1>
            <div class="app-card app-card-accordion shadow-sm mb-4">
                <div class="app-card-header p-4 pb-2  border-0">
                   <h4 class="app-card-title">Não consegue concluir seu cadastro ?</h4>
                </div><!--//app-card-header-->
                <div class="app-card-body p-4 pt-0">
                    <div id="faq1-accordion" class="faq1-accordion faq-accordion accordion">
                        <div class="card">
                            <div class="card-header" id="faq1-heading-1">
                                <h4 class="card-title">
                                   
                                    <button class="card-toggle btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faq1-1" aria-expanded="false" aria-controls="faq1-1"><span class="pe-icon pe-7s-plus"></span> Não consigo cadastrar a data de nascimento !</button>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="faq1-1" aria-labelledby="faq1-heading-1" data-parent="#faq1-accordion">
                                <div class="card-body">
                                    Algumas pessoas estão com difculdades para  inserirem a data 
                                    de nascimento quando tentam realizar cadastro em celulares Android. 
                                    É possivel que esta dificuldade seja relacionada ao manuseio do 
                                    calendário. Neste caso, basta escolher tocar no ano que está na 
                                    parte superior da janela e escolher o seu ano de nascimento.
                                </div>
                            </div>
                        </div>
                        <!--//card-->
                        <div class="card">
                            <div class="card-header" id="faq1-heading-2">
                                <h4 class="card-title">
                                   
                                    <button class="card-toggle btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faq1-2" aria-expanded="false" aria-controls="faq1-2"><span class="pe-icon pe-7s-plus"></span>Posso selecionar as COMORBIDADES sem preencher os DADOS DO PACIENTE?</button>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="faq1-2" aria-labelledby="faq1-heading-2" data-parent="#faq1-accordion">
                                <div class="card-body">
                                    Não, para salvar corretamente as as comorbidades, é um pré-requisito
                                    que o paciente ja esteja cadastrado, ou seja, com todos os dados preenchidos
                                    e clicado no botão "ENVIAR DADOS", note que quando preenchidos corretamente, 
                                    o formulário de cadastro do paciente desaparece da tela e consequentemente 
                                    a inserção das comorbidades ficam disponíveis. 
                                </div>
                            </div>
                        </div>                                              
                    </div><!--//faq1-accordion-->
                </div><!--//app-card-body-->
            </div><!--//app-card--> 
        </div><!--//container-fluid-->
    </div><!--//app-content-->
    
    
</div><!--//app-wrapper-->    					


@endsection
