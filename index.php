<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">


  <title>Cadastro</title>
</head>



<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro de Jesus</h1>
        <form action="cadastro.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digitar...">
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="endereco" placeholder="Digitar...">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digitar...">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Digitar...">
          </div>
          <div class="mb-3">
            <label for="data" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" name="data-nascimento" placeholder="Digitar...">
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>