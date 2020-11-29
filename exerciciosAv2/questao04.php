  
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
    $diaria = $_GET['diaria'];

    echo 'Nome:',$nome;
    echo '<br>';

    $valdias = $diaria * 40;

    if ($diaria<10){
        $val = $valdias + 15;
        $taxa = 15;
    }
    if($diaria>=10){
        $val = $valdias+8;
        $taxa = 8;
    }

    echo 'valor da conta: R$',$val;
    echo '<br>';
    echo 'gastos: R$',$valdias,' de diarias que ficou e a taxa de R$',$taxa,' pedida pela pousada.'
?>