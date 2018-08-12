<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tamanduá Sistemas</a>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url()?>dashboard/logout">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Menu Usuário</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="align-justify"></span>
            </a>
          </h6>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url()?>">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="settings"></span>
              Configurações
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="user"></span>
              Perfil
            </a>
            <a class="nav-link" href="<?= base_url()?>ficha">
              <span data-feather="file"></span>
              Fichas
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li> -->
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Menu Admin</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="align-justify"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>unidade">
              <span data-feather="file-text"></span>
              Unidades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>usuario">
              <span data-feather="users"></span>
              Usuários
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li> -->
        </ul>



      </div>
    </nav>
