@extends('layouts.admin')

@section('content')

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Parabéns, cadastro realizado com sucesso!</h1>

                <div class="row g-4">
{{--                     
                    <div class="col-12 col-md-6">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder icon-holder-mono">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headset"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z" />
                                                <path
                                                    d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z" />
                                                <path fill-rule="evenodd"
                                                    d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z" />
                                                <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Dúvidas? Fale conosco:</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro mb-3">Entre em contato conosco do Telefone ou Whatsapp</div>
                                <ul class="list-unstyled">
                                    <li><strong>Tel 1:</strong> 0800 0000 0000</li>
                                    <li><strong>Tel 2:</strong> 0800 0000 0000</li>
                                </ul>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="#">Whatsapp</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col--> --}}

                    <div class="col-12 col-md-6">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder icon-holder-mono">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-life-preserver"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14.43 10.772l-2.788-1.115a4.015 4.015 0 0 1-1.985 1.985l1.115 2.788a7.025 7.025 0 0 0 3.658-3.658zM5.228 14.43l1.115-2.788a4.015 4.015 0 0 1-1.985-1.985L1.57 10.772a7.025 7.025 0 0 0 3.658 3.658zm9.202-9.202a7.025 7.025 0 0 0-3.658-3.658L9.657 4.358a4.015 4.015 0 0 1 1.985 1.985l2.788-1.115zm-8.087-.87L5.228 1.57A7.025 7.025 0 0 0 1.57 5.228l2.788 1.115a4.015 4.015 0 0 1 1.985-1.985zM8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-5a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">O que é Doses de Esperança?</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro mb-3">Maranguape foi umas das primeiras cidades do Ceará a iniciar a vacinação contra a COVID-19. A Prefeitura montou uma força-tarefa para levar adiante o Plano de imunização Municipal, e segue empenhada em dar continuidade ao cronograma das vacinações.</div>
                                <ul class="list-unstyled">
                                    <li>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-check2 text-primary mr-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        </svg> Se precisar sair, use a máscara facial.
                                    </li>
                                    <li>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-check2 text-primary mr-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        </svg> Lave as mãos com água e sabão ou use álcool gel 70%.
                                    </li>
                                    <li>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-check2 text-primary mr-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        </svg> Mantenha 2 metros de distância de qualquer pessoa.
                                    </li>

                                </ul>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-primary" href="{{ route('pacientes.index') }}">Ir pra Home</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


    </div>

@endsection
