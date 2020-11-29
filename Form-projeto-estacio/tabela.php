  
<?php

include_once("conexao.php");
$select = "SELECT * FROM users";

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>tabela de users</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<table>
    <tr class="titulos">
        <td>Código</td>
        <td>Nome do Usuário</td>
        <td>Email</td>
        <td>Telefone</td>
        <td colspan="2">Ações</td>
    </tr> 
<?php
$result = $conexao->query($select);
while($tbl = mysqli_fetch_array($result)){
    $cod = $tbl['codigo'];
    $nome = $tbl['nome'];
    $email = $tbl['email'];
    $tel = $tbl ['tel'];

    echo "<tr>";
    echo "<td>$cod</td>";
    echo "<td>$nome</td>";
    echo "<td>$email</td>";
    echo "<td>$tel</td>";
    echo "<td> <button><a href='alteracao.php?id=$cod' class='alt'>editar</a></td></button>";
    echo "<td> <button><a href='exclusao.php?id=$cod' class='alt'>remover</a></td></button>";
    echo"</tr>";
}

?>

    <td class="td-cad"><button class="button-cad">
         <a class="cad-link" href="cadastro.html">Cadastrar</a>
      </button>
    <td>

</body>
</html>