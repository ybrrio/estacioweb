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
    $vezes = $_GET['vezes'];
    $i = 0;
    while($i<$vezes){
        echo 'SOL ';
        $i++;
    }
?>