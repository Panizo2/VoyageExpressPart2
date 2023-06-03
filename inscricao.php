<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyageExpress | Inscrição</title>
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
      <span class="h6 d-block text-uppercase">Programe a viagem do seu sonho</span>
      <h1 class="display-4 text-primary">Inscreva-se</h1>
    </div>
    <div class="row">
      <form action="#" class="col-lg-6">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNome">Nome</label>
            <input type="text" name="inputNome" id="inputNome" placeholder="Nome completo" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="cpfInput">CPF</label>
            <input type="text" name="cpfInput" id="cpfInput" placeholder="xxx.xxx.xxx-xx" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="emailInput">Email</label>
            <input type="email" name="emailInput" id="emailInput" placeholder="email@exemplo.com" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="senhaInput">Senha</label>
            <input type="password" name="senhaInput" id="senhaInput" placeholder="Senha de acesso" class="form-control">
          </div>
          <div class="form-group col-12">
            <label for="enderecoInput">Endereço</label>
            <input type="text" name="enderecoInput" id="enderecoInput" placeholder="Nome da rua, número e bairro" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="cidadeInput">Cidade</label>
            <input type="text" name="cidadeInput" id="cidadeInput" class="form-control">
          </div>
          <div class="form-group col-6 col-md-3">
            <label for="estadoInput">Estado</label>
            <select name="estadoInput" id="estadoInput" class="form-control">
              <option>Selecione o Estado</option>
              <option>Bahia</option>
              <option>Ceará</option>
              <option>Espírito Santo</option>
              <option>Goias</option>
              <option>Mato Grosso</option>
              <option>Minas Gerais</option>
              <option>Parana</option>
              <option>Rio de Janeiro</option>
              <option>Rio Grande do Sul</option>
              <option>Santa Catarina</option>
              <option>São Paulo</option>
            </select>
          </div>
          <div class="form-group col-6 col-md-3">
            <label for="cepInput">CEP</label>
            <input type="text" name="cepInput" id="cepInput" placeholder="xxxxx-xxx" class="form-control">
          </div>
        </div>
        <div class="bg-light box-shadow rounded p-3 form-group">
          <h2 class="h6 text-primary text-uppercase">Forma de pagamento</h2>
          <nav class="nav btn-group mb-3" role="tablist" id="formaPagamentoNav" style="display: inline-flex;">
            <button type="button" class="btn btn-secondary btn-sm active" id="nav-cartao-tab" data-toggle="tab" href="#nav-cartao" role="tab" aria-controls="nav-cartao" aria-selected="true">Cartão de Crédito</button>
            <button type="button" class="btn btn-secondary btn-sm" id="nav-boleto-tab" data-toggle="tab" href="#nav-boleto" role="tab" aria-controls="nav-boleto" aria-selected="false">Boleto Bancário</button>
          </nav>
          <div class="tab-content" id="formaPagamentoConteudo">
            <div class="tab-pane fade show active" id="nav-cartao" role="tabpanel" aria-labelledby="nav-cartao-tab">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nomeCartaoInput">Nome no cartão</label>
                  <input type="text" name="nomeCartaoInput" id="nomeCartaoInput" placeholder="Nome impresso no cartão" class="form-control">
                </div>
                <div class="form-group col-6 col-md-3">
                  <label for="mesInput">Mês</label>
                  <select name="mesInput" id="mesInput" class="form-control">
                    <option>Expira mês...</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                </div>
                <div class="form-group col-6 col-md-3">
                  <label for="anoInput">Ano</label>
                  <select name="anoInput" id="anoInput" class="form-control">
                    <option>Expira ano...</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="numeroCartaoInput">Numero no cartão</label>
                  <input type="text" name="numeroCartaoInput" id="numeroCartaoInput" placeholder="XXXX XXXX XXXX XXXX" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="codigoSegInput">Código de segurança</label>
                  <input type="number" name="codigoSegInput" id="codigoSegInput" placeholder="XXX" class="form-control">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab">
              <p class="lead">Clique em contratar plano que enviaremos um boleto para o seu e-mail.</p>
            </div>
          </div>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" name="" id="" class="form-check-input">
            Concordo com os <a href="termos.php">Termos e Condições</a>.
          </label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg mt-2">Contratar plano</button>
      </form>
      <div class="col-md">
        <img src="img/viagem.png" class="img-fluid mb-4">
  </section>
  
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