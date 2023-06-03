<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyageExpress | Veneza</title>
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta name="theme-color" content="#F8F9FA">
</head>
<body>

  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLoginLabel">Entre na sua conta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="loginEmail">Email</label>
              <input type="email" class="form-control" id="loginEmail">
            </div>
            <div class="form-group">
              <label for="loginSenha">Senha</label>
              <input type="password" class="form-control" id="loginSenha">
            </div>
            <button type="submit" class="btn btn-primary">Acessar conta</button>
            <small class="form-text text-muted">Esqueceu sua senha? <a href="#">Clique aqui</a>.</small>
          </form>
        </div>
      </div>
    </div>
  </div>

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
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="california.php" class="dropdown-item">Califórnia</a>
            <a href="paris.php" class="dropdown-item">Paris</a>
            <a href="dublin.php" class="dropdown-item">Dublin</a>
            <a href="veneza.php" class="dropdown-item">Veneza</a>
            <a href="grecia.php" class="dropdown-item">Grécia</a>
            <a href="seoul.php" class="dropdown-item">Seoul</a>
            <a href="noruega.php" class="dropdown-item">Noruega</a>


            <?php
session_start();
include_once('conexao.php');?>
            
          </div>
        </li>
        <li class="nav-item">
          <a href="planos.php" class="nav-link">Planos</a>
        </li>
        <li class="nav-item">
          <a href="contato.php" class="nav-link">Contato</a>
        </li>
        <li class="nav-item">
        <a href="login.php" class="nav-link">Sair</a>
        </li>
        <a>
        <img class="user-avatar" src="img/usuario.png" alt="Foto do Usuário" width="40" height="40"></a>
        <li class="nav-item">
        <b class="nav-link">
            <?=$_SESSION['name'];?>
        </a></b>
        </li>
        <li class="nav-item">
          <a href="inscricao.php" class="btn btn-outline-primary ml-md-2">Inscreva-se</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="container">
    <div class="text-center my-5">
      <span class="h6 d-block text-uppercase">O melhor destino da sua viagem</span>
      <h1 class="display-4 text-primary">Descubra Veneza</h1>
    </div>
    <div class="row">
      <div class="col-md">
        <img src="img/veneza/img1.jpg" class="img-fluid mb-4">
        <img src="img/veneza/img2.jpg" class="img-fluid mb-4">
        <img src="img/veneza/img3.jpg" class="img-fluid mb-4">
      </div>
      <div class="col-md">
        <img src="img/veneza/img4.jpg" class="img-fluid mb-4">
        <img src="img/veneza/img5.jpg" class="img-fluid mb-4">
      </div>
      <div class="col-md">
        <img src="img/veneza/img6.jpg" class="img-fluid mb-4">
        <img src="img/veneza/img7.jpg" class="img-fluid mb-4">

      </div>
    </div>
  </section>

  <section class="container">
    <div class="text-center my-5">
      <span class="h6 d-block text-uppercase">Descubra o que acontece na cidade</span>
      <h1 class="display-4 text-primary">Próximos eventos</h1>
    </div>
    <table class="table table-hover table-responsive-md">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Evento</th>
          <th scope="col">Local</th>
          <th scope="col">Ingresso</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">08/04</th>
          <td>Steve Vai</td>
          <td>Palazzo del Turismo</td>
          <td><a href="https://www.viagogo.com/Concert-Tickets/Hard-Rock-Metal/Steve-Vai-Tickets/E-151419931?PCID=partnerize_all&utm_campaign=1101l5856&utm_medium=publisher_program&utm_source=partnerize_jambase&utm_sub_medium=Content" class="btn btn-outline-secondary btn-sm">Comprar Ingresso</a></td>
        </tr>
        <tr>
          <th scope="row">15/04</th>
          <td>Venezia FC</td>
          <td>Stadium Pier Luigi Penzo</td>
          <td><a href="https://www.viagogo.com/Sports-Tickets/Soccer/More-Soccer/Serie-B/Venezia-FC-Tickets/E-150367197" class="btn btn-outline-secondary btn-sm">Comprar Ingresso</a></td>
        </tr>
        <tr>
          <th scope="row">08/04</th>
          <td>Myung-Whun Chung</td>
          <td>Teatro La Fenice</td>
          <td><a href="https://www.viagogo.com/Theater-Tickets/Classical/Myung-Whun-Chung-Tickets/E-150558574" class="btn btn-outline-secondary btn-sm">Comprar Ingresso</a></td>
        </tr>
        <tr>
          <th scope="row">15/04</th>
          <td>Orfeo ed Euridice</td>
          <td>Teatro La Fenice</td>
          <td><a href="https://www.viagogo.com/Theater-Tickets/Opera/Orfeo-ed-Euridice-Tickets/E-150558618" class="btn btn-outline-secondary btn-sm">Comprar Ingresso</a></td>
        </tr>
      </tbody>
    </table>
  </section>

  <div class="text-center my-5">
    <span class="h6 d-block text-uppercase">Veja um pouco sobre o seu destino</span>
    <h1 class="display-4 text-primary">Tour Veneza</h1>
  </div>
  
      <video class="video" controls>
        <source src="img/Videos/veneza.webm" type="video/mp4">
        <source src="img/Videos/veneza.webm" type="video/webm">

        Seu navegador não suporta a tag de vídeo.
      </video>
  
  <footer class="bg-dark text-white mt-5">
    <div class="container py-4">
      <div class="row">
        <div class="col-6 col-md-3">
          <h4 class="h6">PÁGINAS</h4>
          <ul class="list-unstyled">
            <li><a href="planos.php">Planos</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="inscricao.php">Inscreva-se</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3">
          <h4 class="h6 text-uppercase">Locais</h4>
          <ul class="list-unstyled">
            <li><a href="california.php">Califórnia</a></li>
            <li><a href="paris.php">Paris</a></li>
            <li><a href="dublin.php">Dublin</a></li>
            <li><a href="veneza.php">Veneza</a></li>
            <li><a href="grecia.php">Grécia</a></li>
            <li><a href="seoul.php">Seoul</a></li>
            <li><a href="noruega.php">Noruega</a></li>




          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="h6 text-uppercase">Dados de Contato</h4>
          <ul class="list-unstyled">
            <li class="text-secondary">E-mail: voyageexpress@voyage.com</li>
            <li class="text-secondary">Telefone: (19) 3855-6420</li>
            <li class="text-secondary">Atendimento: De seg. à sex. das 9h às 18h</li>
          </ul>
        </div>
        <div class="col-md-2">
          <h4 class="h6 text-uppercase">Redes Sociais</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="btn btn-outline-secondary btn-sm btn-block mb-2 footer-button">Facebook</a></li>
            <li><a href="#" class="btn btn-outline-secondary btn-sm btn-block mb-2 footer-button">Twitter</a></li>
            <li><a href="#" class="btn btn-outline-secondary btn-sm btn-block mb-2 footer-button">YouTube</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg-primary text-center py-3">
      <p class="mb-0">VoyageExpress © 2023. Direitos Reservados</a>.</p>
    </div>
  </footer>
  
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/app.js"></script>

</body>
</html>