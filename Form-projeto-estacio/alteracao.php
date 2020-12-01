
  
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
    <link rel="stylesheet" href="estilos/cadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>$("input").prop('required',true);</script>
    <title>tabela de users</title>
</head>
<body>
    <div class="alinhar">
        <form action="update.php" method="POST" class="alteracao">
            <h3>Editar:</h3>
            <div class="ajustes">
                <input type="hidden" name="cod" value="<?php echo $cod;?>">
                <p>Nome <span style="color:red;">*</span><input type="text" class="inputs" name="nome" value="<?php echo $nome;?>" required></p>
            </div>
            <div class="ajustes">
                <p>Email <span style="color:red;">*</span><input type="email" class="inputs" name="email" value="<?php echo $email;?>" required></p>
            </div>
            <div class="ajustes">
                <p>Telefone <span style="color:red;">*</span><input type="tel" class="inputs" name="tel" value="<?php echo $tel;?>" required></p>
            </div>
            <div style="padding-left: 26%;">
                <input type="submit" class="btn btn-primary" value="salvar">
            </div>
        </form>
    </div>
</body>
</html>