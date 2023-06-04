<?php
session_start();
include_once('../conexao.php');

if (isset($_SESSION['CPF'])) {
    $cpf = $_SESSION['CPF'];
    
    // Execute a query para excluir a linha com o CPF
    $sql = "DELETE FROM tbl_user WHERE cpf = '$cpf'";
    mysqli_query($conn, $sql);
}

// Limpe as informações da sessão e redirecione para a tela de login
session_unset();
session_destroy();
header('Location: ../login.php');
exit();
?>