<?php
require_once __DIR__ . '/../Config/connection.php';

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

if (empty($nome) || empty($email) || empty($telefone) || empty($mensagem)) {
    die("Todos os campos são obrigatórios.");
}
try {
    $stmt = $pdo->prepare("INSERT INTO chamados (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nome, $email, $telefone, $mensagem]);
    echo "<script>alert('Orçamento registrado com sucesso!'); window.location.href = '../../index.php';</script>";
} catch (PDOException $e) {
    echo "<script>alert('Erro ao registrar o orçamento: " . $e->getMessage() . "'); window.location.href = '../../index.php';</script>";
}


?>