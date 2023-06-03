<?php
include_once('conexao.php');

if(isset($_POST['register']))
{
    $CPF=$_POST['cpf'];
    $name=$_POST['name'];
    $CEP=$_POST['cep'];
    $city=$_POST['cidade'];
    $state=$_POST['estado'];
    $address=$_POST['endereco'];
    $streetnumber=$_POST['numeroRua'];
    $email=$_POST['email'];
    $pass=md5($_POST['password']);

    $sql="INSERT INTO `tbl_user`(`CPF`,`name`,`CEP`,`City`,`State`,`Address`,`StreetNumber`,`email`,`password`) 
    VALUES ('$CPF','$name','$CEP','$city','$state','$address','$streetnumber','$email','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:login.php');
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
?>