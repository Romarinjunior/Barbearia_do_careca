<?php
// Incluir o arquivo de conexão
include "conexão.php";

// Obter dados do formulário
$nomedousuario = $_POST['nomedousuario'];
$emaildousuario = $_POST['emaildousuario'];
$datadenascimento = $_POST['datadenascimento'];
$nomedobanco = $_POST['nomedobanco'];
$numerodaagencia = $_POST['numerodaagencia'];
$numerodaconta = $_POST['numerodaconta'];
$chavepix = $_POST['chavepix'];

// Preparar e executar a inserção
$sql = "INSERT INTO abc (nome_usuario, email, data_de_nascimento, nome_banco, numero_agencia, numero_conta, chave_pix) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Erro ao preparar a consulta: " . $conn->error);
}

$stmt->bind_param("sssssss", $nomedousuario, $emaildousuario, $datadenascimento, $nomedobanco, $numerodaagencia, $numerodaconta, $chavepix);

if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}

// Fechar a declaração e a conexão
$stmt->close();
$conn->close();
?>
