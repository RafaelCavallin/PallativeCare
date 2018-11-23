<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand" href="index.php?pg=home">Palliative Care</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=pacientes">
          <i class="fas fa-user-circle fa-fw"></i>
          <span>Pacientes Ativos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=pacientesInativos">
          <i class="fas fa-user-circle fa-fw"></i>
          <span>Pacientes Inativos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?pg=consultas">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Consultas</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../classes/controllers/loginController.php?acao=logout">Sair</a>
      </li>

    </ul>
  </div>
</nav>