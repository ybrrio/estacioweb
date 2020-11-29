<?php
$valorA = $_GET ["valorA"];
$valorB = $_GET ["valorB"];

if(isset ($_GET["somar"])){
    $operacao = $valorA + $valorB;
    print("Soma: " . $operacao);
}

if(isset ($_GET["subtrair"])){
    $operacao = $valorA + $valorB;
    print("Subtração: " . $operacao);
}

if(isset ($_GET["dividir"])){
    $operacao = $valorA + $valorB;
    print("Divisão: " . $operacao);
}

if(isset ($_GET["dividir"])){
    $operacao = $valorA + $valorB;
    print("Divisão: " . $operacao);
}




?>