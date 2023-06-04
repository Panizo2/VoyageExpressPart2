<?php
session_start();

include_once('conexao.php');


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `tbl_user` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['email']) && empty($_POST['password'])) {
        $error_message = "Por favor, preencha o email e a senha.";
    } elseif (empty($_POST['password'])) {
        $error_message = "Por favor, preencha a senha.";
    } elseif (empty($_POST['email'])) {
        $error_message = "Por favor, preencha o email.";
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $CPF = $row['CPF'];

            if ($email == $email && $password == $password) {
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['CPF'] = $CPF;
                $_SESSION['login_success'] = true; // Adiciona a flag de sucesso ao fazer login
                header('location:index2.php');
            }
        } else {
            $error_message = "Usuário ou senha inválida.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .error-message {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(255, 0, 0, 0.8); /* Fundo vermelho claro e transparente */
            color: white;
            font-weight: bold;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s;
            z-index: 9999;
            font-family: Arial, sans-serif; /* Fonte suave */
            font-size: 16px;
        }
        
        .error-message.show {
            opacity: 1;
        }

        .content {
            margin-top: 40px; /* Espaço para a mensagem de erro */
        }
    </style>
</head>
<body>
    <?php
    if (isset($error_message)) {
        echo '<div id="error-message" class="error-message">' . $error_message . '</div>';
    }
    ?>
    

    <div class="content">
    <!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="img/login.jpg" class="img-fluid" alt="Phone image" height="300px" width="600px">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="login.php" method="post">
            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login Voyage Express</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i>Email</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="email" autocomplete="off" placeholder="insira seu e-mail" style="border-radius:25px ;" />

            </div>

            <!-- Senha input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Senha</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="insira sua senha" style="border-radius:25px ;" />

            </div>


            <!-- Submit button -->
            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  <input type="submit" value="Entrar" name="login" class="btn btn-primary btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
</div>

</form><br>
<p align="center">Não tenho conta <a href="registro.php" class="text-primary" style="font-weight: 600; text-decoration: none; color: blue;"> Registre Aqui</a></p>

        </div>
      </div>
    </div>
  </section>







  <!-- Bootstrap JavaScript biblioteca -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
    </div>

    <script>
        setTimeout(function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.classList.add('show');
                setTimeout(function() {
                    errorMessage.style.opacity = 0;
                    setTimeout(function() {
                        errorMessage.style.display = 'none';
                    }, 500);
                }, 3000);
            }
        }, 0);
    </script>
    
</body>
</html>
