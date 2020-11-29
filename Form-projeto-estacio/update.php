<?php
    include_once("conexao.php");
    
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $sql = "UPDATE users SET nome = '$nome', email = '$email', tel = '$tel' WHERE codigo = '$cod'";

    mysqli_query($conexao,$sql);

    header('location: tabela.php');
?>