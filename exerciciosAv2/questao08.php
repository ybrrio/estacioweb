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
    $chave = $_GET['chave'];
    $chave2 = $chave;
    
    for($i = 0; $i < 4; $i++){
        echo($chave2)."<br>";
        $chave2 .= ' '.$chave;
    }

?>