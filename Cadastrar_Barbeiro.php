<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ficha de Cadastro Barbeiro</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body{
    font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            background-size: cover;
            background-position: center;
            color: #ffffff;
           background-image: linear-gradient(170deg,black,white);
  }
</style>
<body>
<br><br><br><br>
<div class="container mt-3">
  <h2>Ficha de Cadastro de Barbeiro</h2>
  <form action="Cadastrar_Usuario.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="nomedousuario">Nome do Usuário:</label>
      <input id="nomedousuario" name="nomedousuario" class="form-control" value="" type="text">
    </div>
    <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input id="emaildousuario" name="emaildousuario" class="form-control" value="" type="email">
      </div>
    <div class="mb-3 mt-3">
        <label for="email">Data de Nascimento:</label>
        <input id="datadenascimento" name="datadenascimento" class="form-control" value="" type="date">
      </div>
      <div class="mb-3 mt-3">
        <label for="nomedobanco">Nome do Banco:</label>
        <input id="nomedobanco" name="nomedobanco" class="form-control" value="">
      </div>
      <div class="mb-3 mt-3">
        <label for="numerodaagencia">Número da Agência:</label>
        <input id="numerodaagencia" name="numerodaagencia" class="form-control" value="">
      </div>
      <div class="mb-3 mt-3">
        <label for="numerodaconta">Número da Conta:</label>
        <input id="numerodaconta" name="numerodaconta" class="form-control" value="">
      </diav>
      <div class="mb-3 mt-3">
        <label for="chavepix">Chave Pix:</label>
        <input id="chavepix" name="chavepix" class="form-control" value="">
      </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="index.php" class="btn btn-primary">Voltar</a>
  </form>
</div>


</body>
</html>
