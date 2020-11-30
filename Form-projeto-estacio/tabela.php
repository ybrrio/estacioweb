  
<?php

include_once("conexao.php");
$select = "SELECT * FROM users";

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <title>Tabela de Users</title>
</head>
<body>

<style>
    button{
        border: 0px;
       
    }
    a{
        text-decoration: none;
    

    }
    h4{
        padding-left: 30px;
       padding-top: 50px;
       font-family: arial; 
       font-weight: bolder;
    }
    .cad-usuario{
    padding-left: 20px;
     padding-bottom: 6px;
     padding-right: 20px;
     padding-top: 6px;
     margin-top: 6px;
    }
    .cad-link{
        font-weight: bolder;
        color: white;
        border: none;
    }

    .div-cad{
        padding-left: 80%;
    }
</style>
            <h4>
              Usuários Cadastrados
            </h4>
          
<table class="table" style=" position: absolute;
    top: 20%;
    font-size: 20px;
    color: rgb(49, 48, 48);
    border-radius: 5px;
    text-align: center;" >
    
   <tr class="titulos alert alert-secondary">
      <th scope="col">Código</th>
      <th scope="col">Nome do Usuário</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col" colspan="2">Ações</th>
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
    echo "<td> <icon><a href='alteracao.php?id=$cod' class='alt btn btn-primary'>editar</a></td></icon>";
    echo "<td> <icon><a href='exclusao.php?id=$cod' class='alt btn btn-danger'>remover</a></td></button>";
    echo"</tr>";
}

?>
    <div class="div-cad">
 <button type="button" class="btn btn-primary cad-usuario">
         <a class="cad-link" href="cadastro.html" >Cadastrar Novo Usuário</a>
 </button>
      </div>
   
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384
</body>
</html>