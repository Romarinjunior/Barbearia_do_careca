<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            background-size: cover;
            background-position: center;
            color: #ffffff;
           background-image: linear-gradient(170deg,black,white);
        }
        .botao {
  margin-left: auto; 
  display: block;   
  }
</style>
<body>

<div class="container mt-3">
  <h2>Cadastro da Agenda do Barbeiro</h2>
  <form action="DadosAgenda.php" method="POST">

    <div class="mb-3 mt-3">
        <label for="barbeiro"> Barbeiro </label>
        <select id="barbeiro" name="barbeiro" class="form-select" REQUIRED>
          <option> Selecione um Barbeiro </option>
          <option> Jorge </option>
            <option> Cleiton </option>
            <option> Pedro </option>
            <option> Gabriel </option>
            <option> Paulo </option>
            <option> Marcos </option>
          </select>
    </div>
    <div class="mb-3 mt-3">
    <label for="dia_da_semana"> Dia da semana </label>
    <select id="dia_da_semana" name="dia_da_semana" class="form-select" >
            <option>Selecione o dia da semana</option>
            <option value="0">Domingo</option>
            <option value="1">Segunda-feira</option>
            <option value="2<">Terça-feira</option>
            <option value="3">Quarta-feira</option>
            <option value="4">Quinta-feira</option>
            <option value="5">Sexta-feira</option>
            <option value="6">Sábado-feira</option>
          </select>
    </div>

    <div class="mb-3 mt-3">
        <label for="horario_inicio">Horário início:</label>
        <input type="time" class="form-control" id="horario_inicio" placeholder="Enter email" name="horario_inicio" REQUIRED>
    </div>

    <div class="mb-3 mt-3">
        <label for="horario_saida_intervalo">Horário saída intervalo:</label>
        <input type="time" class="form-control" id="horario_saida_intervalo" placeholder="Enter email" name="horario_saida_intervalo" REQUIRED>
    </div>

    <div class="mb-3 mt-3">
        <label for="horario_volta_intervalo">Horário volta intervalo:</label>
        <input type="time" class="form-control" id="horario_volta_intervalo" placeholder="Enter email" name="horario_volta_intervalo"  REQUIRED>
    </div>

    <div class="mb-3 mt-3">
        <label for="horario_fim">Horário fim:</label>
        <input type="time" class="form-control" id="horario_fim" placeholder="Enter email" name="horario_fim" REQUIRED >
    </div>
    <div class="d-flex justify-content-between mt-3">
      <a href="index.php" class="btn btn-primary">Voltar</a>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>

</body>
</html>
