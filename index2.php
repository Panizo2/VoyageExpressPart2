

<!DOCTYPE html>
<html lang="pt-br">
<style>
        .success-message {
          position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 128, 0, 0.8); /* Fundo verde claro e transparente */
            color: white;
            font-weight: normal;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s;
            z-index: 9999;
            font-family: Arial, sans-serif; /* Fonte suave */
            font-size: 16px;
        }
        
        .success-message.show {
            opacity: 1;
        }
    </style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyageExpress</title>
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta name="theme-color" content="#F8F9FA">
  
  <?php
    session_start();
    if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
        echo '<div id="success-message" class="success-message">Login efetuado com sucesso</div>';
        unset($_SESSION['login_success']); // Remove a flag de sucesso para não repetir a mensagem
    }

    include 'header.php';
    ?>

    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.classList.add('show');
                setTimeout(function() {
                    successMessage.style.opacity = 0;
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 500);
                }, 3000);
            }
        }, 0);
    </script>



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

  <section class="container-fluid">
    <div class="row bg-dark text-white">
      <div class="col-lg-7 p-0">
        <div id="carouselCidades" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
            <li data-target="#carouselCidades" data-slide-to="1"></li>
            <li data-target="#carouselCidades" data-slide-to="2"></li>
            <li data-target="#carouselCidades" data-slide-to="3"></li>
            <li data-target="#carouselCidades" data-slide-to="4"></li>
            <li data-target="#carouselCidades" data-slide-to="6"></li>
            <li data-target="#carouselCidades" data-slide-to="7"></li>
            <li data-target="#carouselCidades" data-slide-to="8"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/californiaaa.jpg" class="d-block w-100" alt="Califórnia">
              <div class="carousel-caption">
                <h3 class="display-4">Califórnia</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/paris2.jpg" class="d-block w-100" alt="Paris">
              <div class="carousel-caption">
                <h3 class="display-4">Paris</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/veneza.jpg" class="d-block w-100" alt="Veneza">
              <div class="carousel-caption">
                <h3 class="display-4">Veneza</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/grecia.jpg" class="d-block w-100" alt="Grecia">
              <div class="carousel-caption">
                <h3 class="display-4">Grécia</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/noruega.jpg" class="d-block w-100" alt="Veneza">
              <div class="carousel-caption">
                <h3 class="display-4">Noruega</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/seoul.jpg" class="d-block w-100" alt="Seoul">
              <div class="carousel-caption">
                <h3 class="display-4">Seoul</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/dublin.jpg" class="d-block w-100" alt="Dublin">
              <div class="carousel-caption">
                <h3 class="display-4">Dublin</h3>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
      <div class="col-lg-5 p-4 align-self-center">
        <h1 class="display-4">Realize a viagem do seu sonho</h1>
        <p class="lead">O melhor local para viajar é com a Voyage Express, mais de 5.000 excursões concluídas.</p>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light text-center">
    <div class="container">
      <div class="my-5">
        <span class="h6 d-block text-uppercase">Tudo de melhor para você</span>
        <h2 class="display-4 text-primary">Aproveite as Vantagens</h2>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center icon">
            <img src="img/icones/passaporte.svg" alt="Passaporte">
          </div>
          <h3>Documentos</h3>
          <p>Documentos para viagem são essenciais e incluem o passaporte válido e visto, se necessário.É importante verificar antecipadamente quais são os documentos necessários para evitar problemas e atrasos.É recomendável mantê-los em local seguro e de fácil acesso durante toda a viagem.</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center icon">
            <img src="img/icones/passagens.svg" alt="Passagens">
          </div>
          <h3>Passagens</h3>
          <p >Passagens são emitidas por companhias de transporte e permitem que as pessoas viagem de um lugar 
            para outro, podendo ser de avião, trem, ônibus ou barco. Elas têm preços variados, dependendo de fatores como destino, época do ano, classe e antecedência da compra. Antes de comprar uma passagem,é importante verificar suas condições, como política de cancelamento, reembolso e troca.</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center icon">
            <img src="img/icones/translado.svg" alt="Translado">
          </div>
          <h3>Translado</h3>
          <p>Nossa agência oferece um serviço de translado de ótima qualidade, 
            com profissionais experientes e veículos modernos, garantindo o transporte seguro e confortável 
            de passageiros. Comprometida com a pontualidade e a excelência no atendimento, sua empresa é uma 
            opção diferenciada no mercado.</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center icon">
            <img src="img/icones/praias.svg" alt="Praias">
          </div>
          <h3>Praias</h3>
          <p>Conheça as praias maravilhosas que nossas excursões proporcionam. 
            Com opções de tours que levam a praias paradisíacas, nós oferecemos experiências inesquecíveis 
            para nossos clientes. Com guias especializados e roteiros personalizados, nossos passeios 
            turísticos são uma oportunidade única para explorar as belezas naturais da região.</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center icon">
            <img src="img/icones/bagagens.svg" alt="Bagagens">
          </div>
          <h3>Bagagens</h3>
          <p>Nós fornecemos um serviço de manuseio seguro e eficiente para cuidar de 
            suas bagagens durante a viagem. Garantimos que elas cheguem ao destino em perfeito estado e oferecemos 
            assistência em caso de extravio ou danos. Com nosso compromisso de proporcionar uma viagem tranquila e 
            confortável, você pode confiar que suas bagagens estarão em boas mãos.</p>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="d-flex justify-content-center icon">
            <img src="img/icones/turismo.svg" alt="Turismo">
          </div>
          <h3>Turismo</h3>
          <p>Nossa agência oferece experiências únicas em destinos turísticos incríveis, 
            com roteiros planejados e guias experientes. Nosso compromisso com a qualidade é evidente em 
            cada aspecto do nosso serviço, desde a acomodação até as atividades de lazer. Valorizamos a 
            sustentabilidade e o respeito às comunidades locais, buscando contribuir para o desenvolvimento 
            turístico responsável.</p>
        </div>
      </div>
      <a href="planos.php" class="btn btn-primary btn-lg mt-4">Comprar plano</a>
    </div>
  </section>

  <section id="home-quote" class="p-md-5">
    <blockquote class="blockquote text-center text-white p-md-5 p-3">
      <p class="display-4">
        <em>"A felicidade não está na estrada que leva a algum lugar. A felicidade é a própria estrada."</em>
      </p>
      <footer class="blockquote-footer text-white">Bob Dylan</footer>
    </blockquote>
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
    <div class="text-center my-4">
      <p class="small m-1 text-uppercase">Fale conosco para mais dúvidas</p>
      <a href="contato.php" class="btn btn-primary btn-lg">Entre em contato</a>
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
