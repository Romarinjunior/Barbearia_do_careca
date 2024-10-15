<?php
include "conexao.php";

echo "<pre>";

print_r($_POST);
//agenda agenda
$barbeiro = $_POST['barbeiro'];
$dia_da_semana = $_POST['dia_da_semana'];
$horario_inicio = $_POST['horario_inicio'];
$horario_saida_intervalo = $_POST['horario_saida_intervalo'];
$horario_volta_intervalo = $_POST['horario_volta_intervalo'];
$horario_fim = $_POST['horario_fim'];

// exit('<br>não inseriri');

$sql_agenda = "INSERT INTO agenda (barbeiro, dia_da_semana, horario_inicio, horario_saida_intervalo, horario_volta_intervalo, horario_fim) 
VALUES ('$barbeiro','$dia_da_semana','$horario_inicio','$horario_saida_intervalo','$horario_volta_intervalo','$horario_fim')";


if ($conn->query($sql_agenda) === TRUE) {
    echo "New record created successfully";
    header("Location: visualizar_agendas.php");
  } else {
    echo "Error: " . $sql_agenda . "<br>" . $conn->error;
  }

$conn->close();

?>
