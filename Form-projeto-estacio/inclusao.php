<?php
   include_once ("conexao.php");


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];


    $sql = "INSERT INTO users (`codigo`, `nome`, `email`,`tel`) VALUES (null, '$nome','$email','$tel')";

    if(mysqli_query($conexao, $sql)){
        header('location: tabela.php');
    }

    
    if (isset($_POST['clear'])) {
        header('location: cadastro.html');
    }
?>