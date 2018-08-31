<div id="wrapper">
  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url()?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url()?>ficha">
        <i class="fas fa-fw fa-table"></i>
        <span>Fichas</span></a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Menu ADMIN</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="<?= base_url()?>unidade">Unidades</a>
        <a class="dropdown-item" href="<?= base_url()?>usuario">Usuários</a>
      </div>
    </li>
  </ul>
