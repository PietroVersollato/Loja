<?php
include 'conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE produtos SET nome=:nome, preco=:preco, quantidade=:quantidade WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nome' => $_POST['nome'],
        ':preco' => $_POST['preco'],
        ':quantidade' => $_POST['quantidade'],
        ':id' => $_POST['id']
    ]);
    header("Location: listar.php");
}
