<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">OLX Adm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Início</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users"></i> Usuários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?classe=UsuarioController&metodo=abrirCadastro">Cadastro</a>
          <a class="dropdown-item" href="index.php?classe=UsuarioController&metodo=abrirConsulta">Consulta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-tie"></i> Anunciantes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?classe=AnuncianteController&metodo=abrirCadastro">Cadastro</a>
          <a class="dropdown-item" href="index.php?classe=AnuncianteController&metodo=abrirConsulta">Consulta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-barcode"></i> Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?classe=ProdutoController&metodo=abrirCadastro">Cadastro</a>
          <a class="dropdown-item" href="index.php?classe=ProdutoController&metodo=abrirConsulta">Consulta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-cubes"></i> Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?classe=CategoriaController&metodo=abrirCadastro">Cadastro</a>
          <a class="dropdown-item" href="index.php?classe=CategoriaController&metodo=abrirConsulta">Consulta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?classe=UsuarioController&metodo=sairUsuario"><i class="fas fa-sign-out-alt"></i> Sair</a>
      </li>
    </ul>
  </div>
</nav>