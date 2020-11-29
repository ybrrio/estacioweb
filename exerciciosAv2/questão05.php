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
    date_default_timezone_set("America/New_York");
    $livro = $_GET['livro'];
    $user = $_GET['user'];

    if ($user =="professor"){
        echo 'Recibo:';
        echo '<br>';
        echo 'empresa: biblioteca universidade';
        echo '<br>';
        echo 'nome do livro:'.$livro;
        echo '<br>';
        echo 'usuário: '.$user;
        echo '<br>';
        echo 'OBS: você tem até 10 dias para a devolução do livro!';
        echo '<br>';
        echo 'recibo gerado ',date("d/m/y");
    }if($user =="aluno"){
        echo 'Recibo:';
        echo '<br>';
        echo 'empresa: biblioteca universidade';
        echo '<br>';
        echo 'nome do livro:'.$livro;
        echo '<br>';
        echo 'usuário: '.$user;
        echo '<br>';
        echo 'OBS: você tem até 3 dias para a devolução do livro!';
        echo '<br>';
        echo 'recibo gerado ',date("d/m/y");
    }
?>