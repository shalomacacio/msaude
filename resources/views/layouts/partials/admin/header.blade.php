<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="app-utilities col-auto">


                        <div class="app-utility-item app-user-dropdown dropdown">
                            {{Auth::user()->nome }}
                        </div>
                        <!--//app-user-dropdown-->
                    </div>
                    <!--//app-utilities-->
                </div>
                <!--//row-->
            </div>
            <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="{{ route('pacientes.index') }}"><img class="logo-icon mr-2" src="{{ asset('admin/assets/images/favico.png') }}"
                        alt="logo"><span class="logo-text">MSAÚDE</span></a>

            </div>
            <!--//app-branding-->
            @include('layouts.partials.admin.nav')

            <div class="app-sidepanel-footer">
                <nav class="app-nav app-nav-footer">
                    
                    <ul class="app-menu footer-menu list-unstyled">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link"
                                href="#">
                                <span class="nav-link-text"> {{ \Carbon\Carbon::now()->format('d-m-Y h:i:s') }}</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <li class="nav-item"> 
                            <br>
                            <br>
                            <br>
                            <br>
                        </li>
                        <!--//nav-item-->
                    </ul>
                    <!--//footer-menu-->
                </nav>
            </div>
            <!--//app-sidepanel-footer-->
        </div>
        <!--//sidepanel-inner-->
    </div>
    <!--//app-sidepanel-->
</header>
<!--//app-header-->
