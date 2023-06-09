<?php
session_start();
include_once('../conexao.php');

if (isset($_SESSION['CPF'])) {
    $cpf = $_SESSION['CPF'];
    
    // Execute a query para excluir a linha com o CPF
    $sql = "DELETE FROM tbl_user WHERE cpf = '$cpf'";
    mysqli_query($conn, $sql);
}

if (isset($_SESSION['logout_message'])) {
    echo '<div id="logout-message" class="error-message">' . $_SESSION['logout_message'] . '</div>';
    unset($_SESSION['logout_message']); // Remove a mensagem para não repeti-la
}

$_SESSION['account_deleted'] = true;
// Limpe as informações da sessão e redirecione para a tela de login
session_unset();
session_destroy();
header('Location: ../login.php');
exit();
?>