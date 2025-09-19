<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome       = trim($_POST['nome']);
    $preco      = trim($_POST['preco']);
    $quantidade = trim($_POST['quantidade']);

    $sql = "INSERT INTO produtos (nome, preco, quantidade)
            VALUES (:nome, :preco, :quantidade)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $quantidade);
    $stmt->execute();
    header("Location: listar.php");
}
