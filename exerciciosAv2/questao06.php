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
    $mes = $_GET['mes'];
    
    switch ($mes) {
        case 1:
            echo 'janeiro';
            break;
        case 2:
            echo 'fevereiro';
            break;
        case 3:
            echo 'março';
            break;
        case 4:
            echo 'abril';
            break;
        case 5:
            echo 'maio';
            break;
        case 6: 
            echo 'junho';
            break;
        case 7:
            echo 'julho';
            break;
        case 8:
            echo 'agosto';
            break;         
        case 9:
            echo 'setembro';
            break; 
        case 10:
            echo 'outubro';
            break; 
        case 11:
            echo 'novembro';
            break; 
        case 12:
            echo 'dezembro';
            break; 
        default:
            echo 'não existe mês com este número';
            echo '<br>';
            echo '<a href="quest6.html">--voltar--</a>';
            break;
    }
?>