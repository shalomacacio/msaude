<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doses de Esperança - Prefeitura de Maranguape</title>
    <meta name="description" content="site para cadastro e agendamento de vacinas contra a COVID-19." />
    <meta name="keywords" content="" />
    <meta name="author" content="prefeiturademaranguape" />

    <!-- App favicon -->
	<link rel="shortcut icon" hrefsrc="{{ asset('pmm/images/favicon.png') }}"> 

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('pmm/css/bootstrap.min.css') }}" >

    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pmm/css/materialdesignicons.min.css') }}" />

    <!-- owl carousel -->
	<link rel="stylesheet" type="text/css" href="{{ asset('pmm/css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('pmm/css/owl.theme.default.min.css') }}" />

    <!-- Custom  sCss -->
	<link rel="stylesheet" type="text/css" href="{{ asset('pmm/css/style.css') }}" />

</head>

<body class="app">

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="{{ route('register') }}">
                <img src="{{ asset('pmm/images/logo-dark.png')}}" alt="" class="logo-dark" height="50" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="#informa" class="nav-link">Informações</a>
                    </li>
                    <li class="nav-item">
                        <a href="#vacinometro" class="nav-link">Vacinômetro</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faleconosco" class="nav-link">Fale Conosco</a>
                    </li>
                </ul>
                <form class="form-inline mt-4 mt-md-0" id="loginForm" action="{{ route('auth') }}" method="POST">
                    @csrf
                    <input class="form-control form-control-sm" style="width:140px; margin-right:4px" type="text" id="login_cpf" name="login_cpf" placeholder="CPF" aria-label="Cpf">
                    <input class="form-control form-control-sm" style="width:140px; margin-right:4px"  type="text" id="login_celular" name="login_celular" placeholder="Celular" aria-label="Celular">
                    <button class="btn btn-outline-success btn-sm" type="submit"> Entrar<i class="mdi mdi-arrow-right ml-2"></i></button>
                  </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    @yield('content')

    <!-- Counter start -->
    <section class="section bg-primary" id="vacinometro">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7">
                    <div class="text-center text-white-50">
                        <h4 class="text-white">Vacinômetro:</h4>
                        <p>Acompanhe o andamento da imunização na cidade</p>
                    </div>
                </div>
            </div>
            <div class="row" id="counter">
                <div class="col-xl-3 col-sm-6">
                    <div class="text-center mt-4">
                        <i data-feather="heart" class="icon-dual-success icons-lg"></i>
                        <h2 class="counter-value text-white mt-4" data-count="7581">10</h2>
                        <p class="font-16 text-white-50">Vacinados</p>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="text-center mt-4">
                        <i data-feather="droplet" class="icon-dual-success icons-lg"></i>
                        <h2 class="counter-value text-white mt-4" data-count="800">2</h2>
                        <p class="font-16 text-white-50">Nº de Doses</p>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="text-center mt-4">
                        <i data-feather="book-open" class="icon-dual-success icons-lg"></i>
                        <h2 class="counter-value text-white mt-4" data-count="128">608</h2>
                        <p class="font-16 text-white-50">Agendamentos</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="text-center mt-4">
                        <i data-feather="home" class="icon-dual-success icons-lg"></i>
                        <h2 class="counter-value text-white mt-4" data-count="47">6</h2>
                        <p class="font-16 text-white-50">Postos de vacinação</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- Counter end -->


    <!-- Pricing start -->


    <!-- Cta start -->
    <section class="section" id="faleconosco">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h5 class="text-primary text-uppercase small-title">Fale Conosco</h5>
                        <h4 class="mb-3">85 9 343-2342</h4>
                        <p>Email: secretariadasaude@maranguape.gov.br
                            <br>
                            <h4 class="col-lg-12">Fale agora:</h4>
                            <button type="submit" class="btn btn-primary btn-block">Falar no Whatsapp</button>
                        </p>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-10">
                    <div class="text-center">
                        <div class="subscribe">
                            <form>
                                <div class="row">
                                    <div class="col-md-9 col-lg-4">
                                        <div>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Cta end -->

    <!-- Footer start -->

    <!-- Footer end -->

    <!-- Footer alt start -->
    <section class="bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-sm-left">
                        <a href="{{ route('register') }}">
                            <img src="{{ asset('pmm/images/logo-light.png')}}" alt="logo" height="50">
                        </a>
                    </div>
                    <div class="float-sm-right mt-4 mt-sm-0">
                        <p class="copyright-desc text-white mb-0" style="padding-top: 10px" ;> 2021 © Prefeitura Municipal de Maranguape</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Footer alt start -->

    <!-- Javascript -->
    <script src="{{ asset('pmm/js/jquery.min.js') }}"></script>
    <script src="{{ asset('pmm/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pmm/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('pmm/js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('pmm/js/feather.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('pmm/js/owl.carousel.min.js') }}"></script>

    <!-- app js -->
    <script src="{{ asset('pmm/js/app.js')}}"></script>
    @yield('javascritp')

</body>

</html>