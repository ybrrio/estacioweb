<?php
    include_once("conexao.php");

    $id = $_GET['id'];

        $del = "DELETE FROM users WHERE codigo ='$id'";

        mysqli_query($conexao,$del);

    header('location: tabela.php');
?>