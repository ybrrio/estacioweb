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
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    
    $media = ($n1+$n2)/2;

    echo 'Média aritimetica:',$media;
    echo'<br>';

    if ($media<3) {
        echo 'REPROVADO!';
    }if ($media>=3 && $media<=7) {
        echo 'EXAME!';
    }
    if ($media>7) {
        echo 'APROVADO!';
    }
?>
