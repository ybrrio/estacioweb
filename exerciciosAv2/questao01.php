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
    $nome = $_GET['nome'];
    $aumento = $_GET['aumento'];
    $sal = $_GET['sal'];

    echo 'nome:',$nome;
    echo'<br>';
    $valor_aumento = ($aumento/100)*$sal;
    echo 'aumento: R$',$valor_aumento;
    echo'<br>';
    $valor_total = $valor_aumento + $sal;
    echo 'valor atual: R$',$valor_total;
?>