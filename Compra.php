<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyageExpress | Compra</title>
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <meta name="theme-color" content="#F8F9FA">

  <style>
  .banner-image {
    width: 100%;
    height: auto;
    max-height: 800px; /* Adjust this value as needed */
    object-fit: cover;
  }
</style>

  <?php
    session_start();
    include 'header.php';
    $lugar = isset($_GET['lugar']) ? $_GET['lugar'] : "";
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
    $precoBase = isset($_GET['precoBase']) ? $_GET['precoBase'] : "";
    ?>



</head>
<body>

<img src="img/Banners/<?php echo $lugar; ?>.jpg" alt="Banner" class="banner-image">
<h2 class="display-4 text-primary text-center mt-4"><?php echo $nome; ?></h2>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h4>Passagem aéreas</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="passagem" id="idaVolta" value="idaVolta" checked>
                <label class="form-check-label" for="idaVolta">
                    Ida e Volta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="passagem" id="soIda" value="soIda">
                <label class="form-check-label" for="soIda">
                    Só ida
                </label>
            </div>
        </div>
        <div class="col">
            <h4>Datas</h4>
            <div class="form-group">
                <label for="ida">Ida</label>
                <input type="date" class="form-control" id="ida" name="ida">
            </div>
            <div class="form-group">
                <label for="volta">Volta</label>
                <input type="date" class="form-control" id="volta" name="volta" <?php echo isset($_POST['passagem']) && $_POST['passagem'] === 'soIda' ? 'disabled' : ''; ?>>
            </div>
        </div>
        <div class="col">
            <h4>Classe</h4>
            <select class="form-control" name="classe">
                <option value="Econômica">Econômica</option>
                <option value="Premium Economy">Premium Economy</option>
                <option value="Executiva/Business">Executiva/Business</option>
                <option value="Primeira Classe">Primeira Classe</option>
            </select>
        </div>
    </div>
</div>

<h2 class="display-4 text-primary text-center mt-5"><?php echo "Selecione a Hospedagem"; ?></h2>

<table class="table table-hover table-responsive-md">
    <thead>
        <tr>
            <th scope="col">Lugar</th>
            <th scope="col">Endereço</th>
            <th scope="col">Preço da Diária</th>
            <th scope="col">Estrelas</th>
            <th scope="col">Quartos</th>
            <th scope="col">Camas</th>
            <th scope="col">Capacidade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once('conexao.php');

        $local = $conn->real_escape_string($lugar); // Filtrar a variável $Local para evitar injeção de SQL

        $sql = "SELECT * FROM hospedagens WHERE lugar = '$local'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lugar = $row["lugar"];
                $endereco = $row["endereco"];
                $preco_diaria = $row["preco_diaria"];
                $estrelas =  $row["estrelas"];
                $quartos =  $row["quartos"];
                $camas =  $row["camas"];
                $capacidade =  $row["capacidade"];

                echo "<tr>";
                echo "<td>$lugar</td>";
                echo "<td>$endereco</td>";
                echo "<td>$preco_diaria</td>";
                echo "<td>$estrelas</td>";
                echo "<td>$quartos</td>";
                echo "<td>$camas</td>";
                echo "<td>$capacidade</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan=\"4\">Nenhuma hospedagem encontrada para o local selecionado.</td></tr>";
        }

        ?>
    </tbody>
</table>

<h2 class="display-4 text-primary text-center mt-5"><?php echo "Selecione os passeios"; ?></h2>

<table class="table table-hover table-responsive-md">
    <thead>
        <tr>
            <th scope="col">Lugar</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Duração em Horas</th>
            <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once('conexao.php');

        $local = $conn->real_escape_string($lugar); // Filtrar a variável $Local para evitar injeção de SQL

        $sql = "SELECT * FROM passeios WHERE lugar = '$local'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lugar = $row["lugar"];
                $nome = $row["nome"];
                $preco = $row["preco"];
                $duracao =  $row["duracao"];
                $descricao =  $row["descricao"];

                echo "<tr>";
                echo "<td>$lugar</td>";
                echo "<td>$nome</td>";
                echo "<td>$preco</td>";
                echo "<td>$duracao</td>";
                echo "<td>$descricao</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan=\"4\">Nenhuma hospedagem encontrada para o local selecionado.</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>