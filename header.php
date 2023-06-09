<nav class="navbar navbar-light bg-light navbar-expand-md fixed-top py-3 box-shadow">
    <a href="index2.php" class="navbar-brand">
      <img class ="AgencyNamePicture" src="img/voyage express.png" width="180" height="70">


    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais em Destaque</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="california.php" class="dropdown-item">Califórnia</a>
            <a href="paris.php" class="dropdown-item">Paris</a>
            <a href="dublin.php" class="dropdown-item">Dublin</a>
            <a href="veneza.php" class="dropdown-item">Veneza</a>
            <a href="grecia.php" class="dropdown-item">Grécia</a>
            <a href="seoul.php" class="dropdown-item">Seoul</a>
            <a href="noruega.php" class="dropdown-item">Noruega</a>

            <?php
        
include_once('conexao.php');

?>            
          </div>
        </li>
        <li class="nav-item">
          <a href="planos.php" class="nav-link">Planos</a>
        </li>
        <li class="nav-item">
          <a href="contato.php" class="nav-link">Contato</a>
        </li>
        <a>
            <t>
            <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="perfilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="user-avatar" src="img/usuario.png" alt="Foto do Usuário" width="40" height="40">
    <?=$_SESSION['name'];?>
  </a>
  <div class="dropdown-menu" aria-labelledby="perfilDropdown">
  <a class="dropdown-item" href="#">Perfil</a>
  <a class="dropdown-item" href="login.php">Sair</a>
  <a class="dropdown-item text-danger" href="Commands/ExcluirConta.php">Excluir</a>
  <a class="dropdown-item text-primary" href="admin/index.php">Admin</a>

  </div>
</li>
      </ul>
    </div>
  </nav>