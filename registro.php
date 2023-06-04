<!doctype html>
<html lang="en">

<head>
  <title>Register</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <style>
  .small-placeholder::placeholder {
    font-size: 16px; 
  }
  .invalid-checkbox {
    border-color: red;
  }

  
</style>


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

<script>
  function validateTerms() {
    var termsCheckbox = document.getElementById('termsCheckbox');
    if (!termsCheckbox.checked) {
      termsCheckbox.classList.add('invalid-checkbox');
      event.preventDefault();
    }
  }
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
    <div class="col mr-3">
      <label class="form-label" for="form3Example1c">Nome</label>
      <input type="text" id="form3Example1c" class="form-control form-control-lg small-placeholder" name="name" autocomplete="off" placeholder="Informe seu nome" />
    </div>
    <div class="col">
      <label class="form-label" for="form3Example3d">CPF</label>
      <input type="text" id="form3Example3d" class="form-control form-control-lg small-placeholder" name="cpf" autocomplete="off" placeholder="Informe seu CPF" oninput="atualizarCampoCPF()"/>
    </div>
  </div>

  <div class="d-flex flex-row align-items-center mb-4">
    <div class="col mr-3">
      <label class="form-label" for="form3Example3c">Email</label>
      <input type="email" id="form3Example3c" class="form-control form-control-lg small-placeholder" name="email" autocomplete="off" placeholder="Informe seu email" />
    </div>
    <div class="col">
      <label class="form-label" for="form3Example4c">Senha</label>
      <div class="input-group">
        <input type="password" id="form3Example4c" class="form-control form-control-lg small-placeholder" name="password" autocomplete="off" placeholder="Informe sua senha" />
        <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="bi bi-eye-fill"></i></button>
      </div>
    </div>
  </div>
  <h5 class="text-center">Localidade</h5>
  <div class="d-flex flex-row align-items-center mb-4">
    <div class="col mr-3">
      <label class="form-label" for="form3Example3e">CEP</label>
      <input type="text" id="form3Example3e" class="form-control form-control-lg small-placeholder" name="cep" autocomplete="off" placeholder="Informe seu CEP" oninput="buscarEndereco()" />
    </div>
    <div class="col">
      <label class="form-label" for="form3Example3f">Cidade</label>
      <input type="text" id="form3Example3f" class="form-control form-control-lg small-placeholder" name="cidade" autocomplete="off" placeholder="Sua cidade" readonly />
    </div>
  </div>

  <div class="d-flex flex-row align-items-center mb-4">
    <div class="col mr-3">
      <label class="form-label" for="form3Example3g">Endereço</label>
      <input type="text" id="form3Example3g" class="form-control form-control-lg small-placeholder" name="endereco" autocomplete="off" placeholder="Seu endereço" readonly />
    </div>
  </div>

  <div class="d-flex flex-row align-items-center mb-4">
    <div class="col mr-3">
      <label class="form-label" for="form3Example3h">Estado</label>
      <input type="text" id="form3Example3h" class="form-control form-control-lg small-placeholder" name="estado" autocomplete="off" placeholder="Seu estado" readonly />
    </div>
    <div class="col">
      <label class="form-label" for="form3Example3i">Número</label>
      <input type="text" id="form3Example3i" class="form-control form-control-lg small-placeholder" name="numeroRua" autocomplete="off" placeholder="Informe o número da rua" />
    </div>
  </div>

  <div class="form-check mb-4">
    <input type="checkbox" name="terms" id="termsCheckbox" class="form-check-input">
    <label class="form-check-label" for="termsCheckbox">Concordo com os <a href="termos.php">Termos e Condições</a>.</label>
  </div>

  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
    <input type="submit" href="login.php" value="Registre" name="register" class="btn btn-primary btn-lg text-light my-2 py-3" style="width: 100%; border-radius: 30px; font-weight: 600;" onclick="validateTerms()" />
  </div>
</form>




<p align="center">Já possui conta? <a href="login.php" class="text-primary" style="font-weight: 600; text-decoration: none; color: blue;">Login</a></p>
</div>

                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="img/registro.jpg" class="img-fluid" alt="Sample image" height="400px" width="4000px">

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