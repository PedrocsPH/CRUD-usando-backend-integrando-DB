<?php

$cargos = "cargos"; 
$categorias = "categorias"; 
$clientes = "clientes"; 
$funcionarios = "funcionarios"; 
$producao = "producao";
$produtos = "produtos";
$setor = "setor";

// Cria a conexão
$conn = new mysqli($cargos, $categorias, $clientes, $funcionarios);

// Checa a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
?>