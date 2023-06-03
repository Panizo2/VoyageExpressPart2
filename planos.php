<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyageExpress | Planos</title>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
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
                    <a href="index.php" class="nav-link">Sair</a>
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
      <span class="h6 d-block text-uppercase">Seu plano, sua viagem</span>
      <h1 class="display-4 text-primary">Escolha o plano</h1>
    </div>
    <div class="row">
      <div class="col-md mb-5">
        <div class="bg-light rounded p-4 box-shadow">
          <h2>Basic</h2>
          <ul class="list-unstyled lista-plano">
            <li>→ 10 dias de viagem</li>
            <li>→ 2 destinos diferentes</li>
            <li>→ Hotel pago pela Voyage apenas</li>
          </ul>
          <form action="#">
            <div class="form-group">
              <select class="form-control bg-light" id="inputCidades">
                <option>Selecione o Destino</option>
                <option>Califórnia</option>
                <option>Paris</option>
                <option>Veneza</option>
                <option>Dublin</option>
                <option>Grécia</option>
                <option>Seoul</option>
                <option>Noruega</option>
              </select>
            </div>
          </form>
          <div class="row align-items-center">
            <div class="col mt-4">
              <a href="inscricao4.php" class="btn btn-primary btn-lg d-block">Comprar plano</a>
            </div>
            <div class="col mt-4">
              <span class="h4">R$3.500,00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md mb-5">
        <div class="bg-light rounded p-4 box-shadow">
          <h2>Gold</h2>
          <ul class="list-unstyled lista-plano">
            <li>→ 30 dias de viagem</li>
            <li>→ 3 destinos diferentes</li>
            <li>→ Tudo pago pela Voyage</li>
            <li>→ Ingressos para festas</li>
          </ul>
          <form action="#">
            <div class="form-group">
              <select class="form-control bg-light" id="inputCidades">
                <option>Selecione o Destino</option>
                <option>Califórnia</option>
                <option>Paris</option>
                <option>Veneza</option>
                <option>Dublin</option>
                <option>Grécia</option>
                <option>Seoul</option>
                <option>Noruega</option>
              </select>
            </div>
          </form>
          <div class="row align-items-center">
            <div class="col mt-4">
              <a href="inscricao3.php" class="btn btn-primary btn-lg d-block">Comprar plano</a>
            </div>
            <div class="col mt-4">
              <span class="h4">R$5.000,00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md mb-5">
        <div class="bg-light rounded p-4 box-shadow">
          <h2>Platinum <span class="badge badge-success">NOVO</span></h2>
          <ul class="list-unstyled lista-plano">
            <li><span data-toggle="tooltip" data-placement="top" title="Isso mesmo! São 60 dias de viagens para você aproveitar.">→ 60 dias de viagem</span></li>
            <li><span data-toggle="tooltip" data-placement="top" title="6 destinos diferentes para você curtir muito suas férias!">→ 6 destinos diferentes</span></li>
            <li>→ Tudo pago pela Voyage</li>
            <li>→ Ingressos para festas</li>
          </ul>
          <form action="#">
            <div class="form-group">
              <select class="form-control bg-light" id="inputCidades2">
                <option>Selecione o Destino</option>
                <option>Califórnia</option>
                <option>Paris</option>
                <option>Veneza</option>
                <option>Dublin</option>
                <option>Grécia</option>
                <option>Seoul</option>
                <option>Noruega</option>
              </select>
            </div>
          </form>
          <div class="row align-items-center">
            <div class="col mt-4">
              <a href="inscricao2.php" class="btn btn-primary btn-lg d-block">Comprar plano</a>
            </div>
            <div class="col mt-4">
              <span class="h4">R$7.000,00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center my-5">
    <span class="h6 d-block text-uppercase">Escolha nossa parceira como pagamento</span>
    <h1 class="display-4 text-primary">Bradesco</h1>
  
  <div class="video-container">
    <iframe width="820" height="470" src="https://www.youtube.com/embed/KSAz9aUckik" title="É cartão Bradesco, mas é mais conhecido por benefícios para viagens." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  </div>
  </div>
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