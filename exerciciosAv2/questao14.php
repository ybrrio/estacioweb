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
    $massa = $_GET['massa'];
    $meiavida = 0.25;
    $g = 1;
    $temp = 0;

    while ($g > 0.10) {
        $g = $massa * $meiavida;
        $massa = $g;
        $temp++;

    }

    $t = $temp *30;
    echo 'o tempo necessario para a massa radioativa ficar menor que 0,10g : ',$t,'seg';
?>