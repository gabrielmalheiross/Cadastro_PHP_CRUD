<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <title>Tela de cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro de Jesus</h1>
        <form action="cadastro_script.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digitar..." required>
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="endereco" placeholder="Digitar..." required>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digitar..." required>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Digitar..." required>
          </div>
          <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" name="data_nascimento" placeholder="Digitar..." required>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-success">
          </div>
        </form>
        <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>