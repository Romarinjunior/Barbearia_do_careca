<?php
include "conexao.php";

echo "<pre>";

print_r($_POST);

//dados usuario
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$id_grupo = $_POST['id_grupo'];

//dados bancarios
$nome_banco = $_POST['nome_banco'];
$numero_conta = $_POST['numero_conta'];
$numero_agencia = $_POST['numero_agencia'];
$chave_pix = $_POST['chave_pix'];


// exit('<br>não inseriri');


$sql_abc = "INSERT INTO abc (nome, email, data_de_nascimento, id_grupo)
VALUES ('$nome', '$email', '$data_de_nascimento', '$id_grupo')";


$sql_dados = "INSERT INTO dados_bancarios (nome_banco, numero_conta, numero_agencia, chave_pix )
VALUES ('$nome_banco', '$numero_conta', '$numero_agencia', '$chave_pix')";

if ($conn->query($sql_abc) === TRUE) {
  echo "New record created successfully";
  header("Location: visualizar_registros.php");
} else {
  echo "Error: " . $sql_abc . "<br>" . $conn->error;
}

if ($conn->query($sql_dados) === TRUE) {
  echo "New record created successfully";
  header("Location: visualizar_registros.php");
} else {
  echo "Error: " . $sql_dados . "<br>" . $conn->error;
}

$conn->close();



?>
