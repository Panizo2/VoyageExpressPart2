<section class="container">
    <div class="text-center my-5">
      <span class="h6 d-block text-uppercase">Viaje pagando menos</span>
      <h1 class="display-4 text-primary">Pacotes Disponíveis</h1>
    </div>
    <table class="table table-hover table-responsive-md">
    <thead>
        <tr>
            <th scope="col">Lugar</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço Base</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once('conexao.php');

        $local = $conn->real_escape_string($Local); // Filtrar a variável $Local para evitar injeção de SQL

        $sql = "SELECT Lugar, Nome, PrecoBase FROM Pacotes WHERE Lugar = '$local'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lugar = $row["Lugar"];
                $nome = $row["Nome"];
                $precoBase = $row["PrecoBase"];
                $comprarLink = "https://www.example.com/comprar-ingresso?lugar=$lugar&nome=$nome"; // Substitua pelo link correto

                echo "<tr>";
                echo "<td>$lugar</td>";
                echo "<td>$nome</td>";
                echo "<td>$precoBase</td>";
                echo "<td><a href=\"$comprarLink\" class=\"btn btn-outline-secondary btn-sm\">Comprar Ingresso</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan=\"4\">Nenhum pacote encontrado para o local selecionado.</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
</table>
  </section>

