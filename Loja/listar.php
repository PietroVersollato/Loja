<?php
include 'cabecalho.php';
?>

<body>
    <div class="container">
        <h1>Bem Vindo ao 1º Sistema com CRUD</h1>
        <h2>Pietro Alfa e Victor Gigante</h2>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Biriri</td>
                    <td>R$ 3000.99</td>
                    <td>10</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                            <a href="#" type="button" class="btn btn-warning">Apagar</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>