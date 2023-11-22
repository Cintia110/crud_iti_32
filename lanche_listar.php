<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar lanches</title>
    <link rel="stylesheet" href="estilo.css" />

    <script src="https://kit.fontawesome.com/05420716e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Lanches disponiveis</h1>

    <?php
        include("conexao_bd.php");

        $sql = "SELECT * FROM lanche ORDER BY descricao";
        $resultado = retornarDados($sql);

    ?>

    <table>
        <th>
            <td>Descrição</td>
            <td>Preço</td>
            <td>Ações</td>

            <?php
            while($linha = mysqli_fetch_assoc($resultado))
            {

            ?>
            <tr>
                <td><?php echo $linha["descricao"]; ?></td>
                <td><?php echo $linha["preco"]; ?></td>
                <td>
                    <a href="lanche_ver.php? id_lancre=<?php echo $linha["id_lancre"]; ?>">
                        <i class="fa-solid fa-eye" style="color: #492730;"></i></td>
                    </a>
            </tr>
            
            <?php
            }
            ?>

        </th>
    </table>
</body>
</html>