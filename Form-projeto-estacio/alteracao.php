
<?php
    include_once("conexao.php");

    $id = $_GET['id'];
    
    $select = "SELECT * FROM `users` WHERE `codigo`='$id'";
    
    $result = $conexao->query($select);
    
    while($tbl = mysqli_fetch_array($result)){
        $cod = $tbl['codigo'];
        $nome = $tbl['nome'];
        $email = $tbl['email'];
        $tel = $tbl ['tel'];
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>tabela de users</title>
</head>
<body>
    <form action="update.php" method="POST" class="alteracao">
        <input type="hidden" name="cod" value="<?php echo $cod;?>">
        <input type="text" name="nome" value="<?php echo $nome;?>">
        <input type="email" name="email" value="<?php echo $email;?>">
        <input type="tel" name="tel" value="<?php echo $tel;?>">
        <input type="submit" value="salvar">
    </form>
</body>
</html>