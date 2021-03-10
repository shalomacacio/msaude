        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{route('pacientes.index')}}">
                        <span class="nav-icon">
                            @include('layouts.partials.admin.svg.megaphone')
                        </span>
                        <span class="nav-link-text">Informações</span>
                    </a>
                    <!--//nav-link-->
                </li>

                <!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('showPaciente') }}">
                        <span class="nav-icon">
                            @include('layouts.partials.admin.svg.person-box')
                        </span>
                        <span class="nav-link-text">Meus Dados</span>
                    </a>
                    <!--//nav-link-->
                </li>
                <!--//nav-item-->

                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('comunicados.index')}}">
                        <span class="nav-icon">
                            @include('layouts.partials.admin.svg.bi-cursor')
                        </span>
                        <span class="nav-link-text">Mensagens</span>
                    </a>
                    <!--//nav-link-->
                </li>
                <!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('faq')}}">
                        <span class="nav-icon">
                            @include('layouts.partials.admin.svg.help')
                        </span>
                        <span class="nav-link-text">Duvidas ?</span>
                    </a>
                    <!--//nav-link-->
                </li>
                <!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('logout')}}">
                        <span class="nav-icon">
                            @include('layouts.partials.admin.svg.download')
                        </span>
                        <span class="nav-link-text">Sair</span>
                    </a>
                    <!--//nav-link-->
                </li>
            </ul>
            <!--//app-menu-->
        </nav>
        <!--//app-nav-->
