<?php
include 'cabecalho.php';
?>

<body>
    <div class="container">
        <h1>Bem Vindo ao 1º Sistema com CRUD</h1>
        <h2>Pietro</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo"<td>". $produto['id'] ."</td>";
                    echo"<td>". $produto['nome'] ."</td>";
                    echo"<td>". $produto['preco'] ."</td>";
                    echo"<td>". $produto['quantidade'] ."</td>";
                    echo"
                    <td>
                        <div class=btn-group' role='group' aria-label='Basic mixed styles example'>
                            <a href='form_atualizar.php?id=".$produto['id']."' type='button' class='btn btn-danger'>Atualizar</a>
                            <a href='#' type='button' class='btn btn-warning'>Apagar</a>
                        </div>
                    </td>";
                    echo "</tr>";
                  }
                ?>
            </tbody>
        </table>
    </div>
</body>