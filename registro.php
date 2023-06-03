<!doctype html>
<html lang="en">

<head>
  <title>Register</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <script>
  // Função para formatar o CPF
  function formatarCPF(cpf) {
    var formatado = cpf.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

    if (formatado.length === 11) {
      formatado = formatado.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    }

    return formatado;
  }

  // Função para atualizar o valor do campo conforme o padrão do CPF
  function atualizarCampoCPF() {
    var campoCPF = document.getElementById("form3Example3d");
    campoCPF.value = formatarCPF(campoCPF.value);
  }
</script>

<script>
  // Função para buscar o endereço a partir do CEP usando uma API de CEP
  function buscarEndereco() {
    var cep = document.getElementById("form3Example3e").value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

    if (cep.length === 8) {
      // Fazer a requisição à API de CEP para buscar o endereço
      // Exemplo de requisição utilizando a API ViaCEP (https://viacep.com.br/)
      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
          if (!data.erro) {
            document.getElementById("form3Example3f").value = data.localidade;
            document.getElementById("form3Example3g").value = data.uf;
            document.getElementById("form3Example3h").value = data.logradouro;
          } else {
            // Limpar os campos caso ocorra algum erro na busca do CEP
            document.getElementById("form3Example3f").value = "";
            document.getElementById("form3Example3g").value = "";
            document.getElementById("form3Example3h").value = "";
          }
        })
        .catch(error => {
          console.log("Erro ao buscar o endereço:", error);
        });
    } else {
      // Limpar os campos caso o CEP não tenha o tamanho adequado
      document.getElementById("form3Example3f").value = "";
      document.getElementById("form3Example3g").value = "";
      document.getElementById("form3Example3h").value = "";
    }
  }
</script>

<script>
  // Função para alternar a visibilidade da senha
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("form3Example4c");
    var toggleButton = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleButton.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
    } else {
      passwordInput.type = "password";
      toggleButton.innerHTML = '<i class="bi bi-eye-fill"></i>';
    }
  }

  // Adicionar o evento de clique ao botão para alternar a visibilidade da senha
  document.getElementById("togglePassword").addEventListener("click", togglePasswordVisibility);
</script>

</head>

<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
              <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Registro</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  

                  <form class="mx-1 mx-md-4" action="add.php" method="post">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-id-card fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3d"><i class="bi bi-credit-card-2-front-fill"></i> Seu CPF</label>
                      <input type="text" id="form3Example3d" class="form-control form-control-lg py-3" name="cpf" autocomplete="off" placeholder="Informe seu CPF" style="border-radius:25px ;" oninput="atualizarCampoCPF()" />

                    </div>
                  </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Nome Completo </label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="coloque seu nome" style="border-radius:25px ;" />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Seu E-mail</label>
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="email" autocomplete="off" placeholder="coloque seu E-mail" style="border-radius:25px ;" />

                      </div>
                    </div>
                    

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Senha</label>
                        <div class="input-group">
                          <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="coloque sua senha" style="border-radius:25px ;" />
                          <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="bi bi-eye-fill"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3e"><i class="bi bi-geo-alt-fill"></i> Seu CEP</label>
                        <input type="text" id="form3Example3e" class="form-control form-control-lg py-3" name="cep" autocomplete="off" placeholder="Informe seu CEP" style="border-radius:25px ;" oninput="buscarEndereco()" />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-city fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3f"><i class="bi bi-house-door-fill"></i> Cidade</label>
                        <input type="text" id="form3Example3f" class="form-control form-control-lg py-3" name="cidade" autocomplete="off" placeholder="Informe sua cidade" style="border-radius:25px ;" readonly />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-flag fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3g"><i class="bi bi-flag-fill"></i> Estado</label>
                        <input type="text" id="form3Example3g" class="form-control form-control-lg py-3" name="estado" autocomplete="off" placeholder="Informe seu estado" style="border-radius:25px ;" readonly />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-road fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3h"><i class="bi bi-geo-alt-fill"></i> Endereço</label>
                        <input type="text" id="form3Example3h" class="form-control form-control-lg py-3" name="endereco" autocomplete="off" placeholder="Informe seu endereço" style="border-radius:25px ;" readonly />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-sort-numeric-up-alt fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3i"><i class="bi bi-geo-alt-fill"></i> Número da Rua</label>
                        <input type="text" id="form3Example3i" class="form-control form-control-lg py-3" name="numeroRua" autocomplete="off" placeholder="Informe o número da rua" style="border-radius:25px ;" />
                      </div>
                    </div>
                    <input type="checkbox" name="" id="" class="form-check-input">
            Concordo com os <a href="termos.php">Termos e Condições</a>.
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      
  <input type="submit" href="login.php" value="Registre" name="register" class="btn btn-primary btn-lg text-light my-2 py-3" style="width: 100%; border-radius: 30px; font-weight: 600;" style="border-radius: 25px;" />
</div>

</form>
<p align="center">Já possui conta? <a href="login.php" class="text-primary" style="font-weight: 600; text-decoration: none; color: blue;">Login</a></p>
</div>

                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="img/registro.jpg" class="img-fluid" alt="Sample image" height="300px" width="500px">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript Biblioteca -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>