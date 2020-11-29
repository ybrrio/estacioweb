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
session_start();

    $valor = $_GET['n'];
    $val_total = 0;

    if($valor>100 && $valor<200){
        $val_total = $val_total + 1;
        $val = $array($val_total);
        header('location:quest12.html');
    }
    elseif($valor == 0) {
        echo $val;
    }
    else{
        header('location:quest12.html');
    }