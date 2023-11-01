<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         include ("conexao_bd.php");

         $descricao = $_POST["txtDescricao"];
         $preco = $_POST["txtPreco"];

         $sql = "INSERT INTO lanche(descricao,preco) VALUES ('$descricao','$preco')";

         if (executarComando($sql)) {
            echo"<h1>Seu lanche foi inserido.</h1>";
         } 
         else {
            echo "<h1>Não foi possível cadastrar.</h1>";
         }
    ?>

    <a href="index.php">
        <button type="button">Voltar
        </button>
    </a>
    
</body>
</html>