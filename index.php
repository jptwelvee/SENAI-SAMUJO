<?php
    require("conn.php");

    $tabela = $pdo->prepare("SELECT id_prod, descricao_prod,categoria_prod,preco_prod,quant_prod,comentario_prod
    FROM produtos;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }


?>
<fundo>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title>RAZ AUTOPARTZ</title>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">PREÇO</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">COMENTÁRIO</th>
            </tr>
        </thead>
        <tbody>


            <?php
            
                foreach ($rowTabela as $linha){
                    echo '<tr>';
                    echo "<th scope='row'>".$linha['id_prod']."</th>";
                    echo "<td>".$linha['descricao_prod']."</td>";
                    echo "<td>".$linha['categoria_prod']."</td>";
                    echo "<td>".$linha['preco_prod']."</td>";
                    echo "<td>".$linha['quant_prod']."</td>";
                    echo "<td>".$linha['comentario_prod']."</td>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

</body>
</html>