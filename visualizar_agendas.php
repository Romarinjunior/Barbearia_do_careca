<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir o arquivo de conexão
include "conexao.php"; // Verifique o caminho aqui

// Consultar todos os registros
$sql = "SELECT * FROM agenda ORDER BY id_usuario DESC"; 
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Agendas</title>
    <style>
        body {
            background-color: #121212; /* Fundo preto */
            color: #ffffff; /* Texto branco */
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            margin: 20px 0;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            border-radius: 10px; /* Cantos arredondados na tabela */
            overflow: hidden; /* Para ocultar as bordas arredondadas */
        }

        th, td {
            border: 1px solid #444; /* Borda cinza */
            padding: 15px; /* Mais espaço interno */
            text-align: left;
            border-radius: 8px; /* Cantos arredondados nas células */
        }

        th {
            background-color: #1e1e1e; /* Cinza escuro */
        }

        tr:nth-child(even) {
            background-color: #2a2a2a; /* Cinza claro */
        }

        tr:hover {
            background-color: #333; /* Destaque ao passar o mouse */
        }

        .btn-voltar {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #444; /* Botão cinza */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-voltar:hover {
            background-color: #555; /* Destaque ao passar o mouse */
        }
    </style>
</head>
<body>

<h1>Registros da Barbearia</h1>

<table class="tabela-registros-barbearia">
    <thead>
        <tr>
            <th>barbeiro</th>
            <th>Dia da semana</th>
            <th>Horário início</th>
            <th>Horário saída intervalo</th>
            <th>Horário volta intervalo</th>
            <th>Horário fim</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Armazenar os dados em arrays
        // Armazenar os dados em arrays
$dados_agenda = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dados_agenda[] = [
            'barbeiro' => $row['barbeiro'],
            'dia_da_semana' => $row['dia_da_semana'],
            'horario_inicio' => $row['horario_inicio'],
            'horario_saida_intervalo' => $row['horario_saida_intervalo'],
            'horario_volta_intervalo' => $row['horario_volta_intervalo'],
            'horario_fim' => $row['horario_fim'],
        ];
    }
}

// Corrigir a linha aqui
$maxRows = count($dados_agenda);
for ($i = 0; $i < $maxRows; $i++) {
    echo "<tr>";
    // Dados da tabela agenda
    echo "<td>" . (isset($dados_agenda[$i]['barbeiro']) ? $dados_agenda[$i]['barbeiro'] : '') . "</td>";
    echo "<td>" . (isset($dados_agenda[$i]['dia_da_semana']) ? $dados_agenda[$i]['dia_da_semana'] : '') . "</td>";
    echo "<td>" . (isset($dados_agenda[$i]['horario_inicio']) ? $dados_agenda[$i]['horario_inicio'] : '') . "</td>";
    echo "<td>" . (isset($dados_agenda[$i]['horario_saida_intervalo']) ? $dados_agenda[$i]['horario_saida_intervalo'] : '') . "</td>";
    echo "<td>" . (isset($dados_agenda[$i]['horario_volta_intervalo']) ? $dados_agenda[$i]['horario_volta_intervalo'] : '') . "</td>";
    echo "<td>" . (isset($dados_agenda[$i]['horario_fim']) ? $dados_agenda[$i]['horario_fim'] : '') . "</td>";
    echo "</tr>"; // Falta fechar a linha da tabela
}

if (empty($dados_agenda)){
    echo "<tr><td colspan='6'>Nenhum registro encontrado.</td></tr>";
}

        ?>
    </tbody>
</table>

<a href="index.php" class="btn-voltar">Voltar</a>

</body>
</html>

<?php
// Fechar a conexão
$conn->close();
?>
