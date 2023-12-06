<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <?php
    $id_lanche = $_GET["id_lancre"];

    include_once "conexao_bd.php";

    $sql = "SELECT * FROM lanche WHERE id_lancre = '$id_lanche'";

    $resultado = retornarDados($sql);

    $linha = mysqli_fetch_assoc($resultado);
    $preco = $linha["preco"];
    $descricao = $linha["descricao"];
    ?>
    <form method="post">
        <ul>
            <li><label>Descrição do lanche</label></li>
            <li><input type="text" name="txtDescricao" value = " <?php echo $descricao ?>" ></li>
            <li><label>Preço R$</label></li>
            <li><input type="text" name="txtPreco" value = " <?php echo $preco ?>" ></li>
            <li>Quantidade</li>
            <li><button formaction="lanche_atualizar.php" type="submit">Atualizar</button></li>
            <li><button formaction="lanche_remover.php" type="submit">Remover</button></li>
            
        </ul>
    </form>
</body>
</html>