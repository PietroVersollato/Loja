<?php
include 'conexao.php';
$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
header("Location: listar.php");
