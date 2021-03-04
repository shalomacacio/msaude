<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('pacientes.index')}}">
          <span data-feather="home"></span>
          Informações
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showPaciente')}}">
          <span data-feather="user"></span>
          Dados Pessoais
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showComorb')}}">
          <span data-feather="bar-chart-2"></span>
          Dados de Saúde
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Outras Informações</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
      </a>
    </h6>
  </div>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="calendar"></span>
        Resultados
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">
      <span data-feather="log-out"></span>
        Sair
      </a>
    </li>
  </ul>
</nav>