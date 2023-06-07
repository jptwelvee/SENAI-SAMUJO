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
                    echo '<td><a href=edit_tabela.php?produto='.$linha['id_prod'].' class="button2"><b>EDITAR</b</a></td>';
                    echo '<td><a href=CRUD\del_sol.php?produto='.$linha['id_prod'].' class="entregar"><b>ENTREGAR</b></a></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

</body>
</html>