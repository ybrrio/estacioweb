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
    $metros = $_GET['metros'];

    $litro = $metros/6;
    
    $sit1 = $litro/18;
    $val_sit1 = $sit1*80;

    $sit2 = $litro/3.6;
    $val_sit2 = $sit2*25;

    echo 'metros digitado: ',$metros,'m²';
    echo '<br>';
    echo 'quantidade se pedir 18l: ',number_format($sit1, 2, '.', ',');
    echo '<br>';
    echo 'valor: R$',number_format($val_sit1, 2, '.', ',');
    echo '<br>';
    echo 'quantidade se pedir 3,6l: ',number_format($sit2, 2, '.', ',');
    echo '<br>';
    echo 'valor: R$',number_format($val_sit2, 2, '.', ',');
?>