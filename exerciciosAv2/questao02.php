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
    $salb = $_GET['salbruto'];
    $prestacao = $_GET['prestacao'];

    $condicao = $salb * 0.30;

    if ($prestacao<=$condicao) {
        echo 'seu emprestimo foi APROVADO';
    } else {
        echo 'seu emprestimo foi RECUSADO';
    }
    
?>