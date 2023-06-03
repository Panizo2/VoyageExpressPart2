<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyageExpress | Contato</title>
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
      <span class="h6 d-block text-uppercase">Possui alguma dúvida?</span>
      <h1 class="display-4 text-primary">Fale Conosco</h1>
    </div>
    <div class="row">
      <div class="col-lg mb-5">
        <form action="https://formspree.io/f/xjvdezjr" method="post" class="bg-light rounded box-shadow p-4">
          <div class="form-group">
            <label for="nameInput">Nome</label>
            <input type="text" class="form-control" id="name" name="fullName" required>
          </div>
          <div class="form-group">
            <label for="emailInput">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="messageInput">Mensagem</label>
            <textarea class="form-control" id="mennsagem" name="mensagem" required rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar mensagem</button>
        </form>
      </div>
      <div class="col-lg">
        <h2 class="h6 text-uppercase">Nosso endereço</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1837.9701237078189!2d-47.228296091897725!3d-22.878665596256493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bbe7db7f8c87%3A0x719bf8571767736a!2sUNASP%20-%20Centro%20Universit%C3%A1rio%20Adventista%20de%20S%C3%A3o%20Paulo%20-%20Campus%20Hortol%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1680698710409!5m2!1spt-BR!2sbr" width="600" height=190" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h2 class="h6 text-uppercase">Dados de Contato</h2>
        <ul class="list-unstyled">
          <li class="text-secondary">E-mail: voyageexpress@voyage.com</li>
          <li class="text-secondary">Telefone: (19) 3855-6420</li>
          <li class="text-secondary">Atendimento: De seg. à sex. das 9h às 18h</li>
        </ul>

        <h2 class="h6 text-uppercase">Redes Sociais</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="btn btn-outline-secondary btn-sm btn-block mb-2 contact-button">Facebook</a></li>
            <li><a href="#" class="btn btn-outline-secondary btn-sm btn-block mb-2 contact-button">Twitter</a></li>
            <li><a href="#" class="btn btn-outline-secondary btn-sm btn-block mb-2 contact-button">YouTube</a></li>
          </ul>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block text-uppercase">Ainda está com dúvidas?</span>
      <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6" id="perguntasFrequentes" data-children=".pergunta">
        <div class="pergunta py-2">
          <a href="#pergunta1" class="lead" data-toggle="collapse" data-parent="perguntasFrequentes">→ É possível cancelar a viagem?</a>
          <div id="pergunta1" class="collapse show" aria-controls="pergunta1">
            <p style="text-align: justify;"><br>Prezado cliente,<br><br>

              Sim, é possível cancelar a viagem. Porém, é importante ressaltar que o cancelamento pode implicar em cobranças de taxas e multas, conforme previsto nas condições gerais de contratação. Caso haja a necessidade de cancelamento, recomendamos que entre em contato conosco o mais breve possível para que possamos lhe fornecer todas as informações necessárias e orientá-lo sobre as possíveis consequências do cancelamento.
              
              <br><br>Atenciosamente,<br>
              VoyageExpress</p>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="pergunta py-2">
          <a href="#pergunta2" class="lead" data-toggle="collapse" data-parent="perguntasFrequentes">→ Qual a garantia que tenho se perder o voo?</a>
          <div id="pergunta2" class="collapse" aria-controls="pergunta2">
            <p style="text-align: justify;"><br>Prezado cliente,<br><br>

              Se você perdeu o voo, é importante entrar em contato conosco o mais breve possível para que possamos avaliar a situação e verificar as possibilidades de reagendamento ou reembolso. Vale lembrar que cada companhia aérea possui suas próprias políticas em relação a atrasos e cancelamentos de voos, por isso é necessário avaliar caso a caso.
              
              <br>Recomendamos sempre que chegue com antecedência ao aeroporto e esteja atento às informações de embarque, evitando assim possíveis transtornos.
              
              <br><br>Atenciosamente,<br>
              VoyageExpress</p>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="pergunta py-2">
          <a href="#pergunta3" class="lead" data-toggle="collapse" data-parent="perguntasFrequentes">→ Qual a principal forma de viagem?</a>
          <div id="pergunta3" class="collapse" aria-controls="pergunta3">
            <p style="text-align: justify;"><br>Prezado cliente,<br><br>

              A principal forma de viagem pode variar de acordo com as preferências e necessidades de cada viajante. As opções mais comuns incluem viagens aéreas, terrestres e marítimas. No entanto, é importante ressaltar que cada modalidade de viagem possui suas próprias particularidades e exigências, e é importante estar bem informado sobre as condições de cada uma delas antes de realizar a escolha.
              
              <br><br>Atenciosamente,<br>
              VoyageExpress.</p>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="pergunta py-2">
          <a href="#pergunta4" class="lead" data-toggle="collapse" data-parent="perguntasFrequentes">→ Qual o melhor destino de viagem?</a>
          <div id="pergunta4" class="collapse" aria-controls="pergunta4">
            <p style="text-align: justify;"><br>Prezado cliente,<br><br>

              A escolha do melhor destino de viagem pode variar muito de acordo com as preferências e interesses de cada viajante. Existem diversos destinos turísticos ao redor do mundo que oferecem experiências únicas e inesquecíveis, desde praias paradisíacas até cidades históricas e culturais. Por isso, é importante levar em consideração o seu perfil de viajante, o tempo disponível para a viagem, o orçamento disponível e outras necessidades específicas ao planejar uma viagem.
              
              <br><br>Atenciosamente,<br>
              VoyageExpress.</p>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="pergunta py-2">
          <a href="#pergunta5" class="lead" data-toggle="collapse" data-parent="perguntasFrequentes">→ Vocês dão descontos para grupos grandes?</a>
          <div id="pergunta5" class="collapse" aria-controls="pergunta5">
            <p style="text-align: justify;"><br>Prezado cliente,<br><br>

              Sim, oferecemos descontos para grupos grandes em alguns de nossos pacotes turísticos. As condições de desconto variam de acordo com o destino, época do ano e número de pessoas no grupo, por isso, recomendamos que entre em contato conosco informando as suas necessidades e expectativas para que possamos lhe fornecer informações mais precisas e personalizadas.
              
              <br><br>Atenciosamente,<br>
              VoyageExpress.</p>
          </div>
        </div>
        <div class="dropdown-divider"></div>
      </div>
    </div>
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