  
<!--questao 13
Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e
cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima
quantos anos serão necessários para que Juca seja maior que Chico-->
<style>
        body{
            background-color: palegoldenrod;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font-size: 20px;
        }
</style>
<?php
    $chico = 1.50;
    $juca = 1.10;
    $ano = 0;

    while($chico>$juca){
        $chico = $chico + 0.02;
        $juca = $juca + 0.03;
        $ano++;
    }
    echo ' a quantidade de anos necessarios para que Juca seja maior que chico ',$ano;
?>