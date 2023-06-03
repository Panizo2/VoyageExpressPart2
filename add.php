<?php
include_once('conexao.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=md5($_POST['password']);

    $sql   ="INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:index.php');
    echo"<script>alert('Novo usuario registrado com sucesso');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
