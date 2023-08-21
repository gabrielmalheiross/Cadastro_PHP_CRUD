<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
  <title>Alteração de cadastro</title>
</head>

<body>

  <?php
    include "conexao.php";

    $id = $_GET['id'] ?? null;
    $sql = "SELECT * FROM pessoas WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);

  ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro de Jesus</h1>
        <form action="edit_script.php" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digitar..." required value="<?php echo $linha['nome']?>">
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="endereco" placeholder="Digitar..." required value="<?php echo $linha['endereco']?>">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" name="telefone" placeholder="Digitar..." required value="<?php echo $linha['telefone']?>">
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Digitar..." required value="<?php echo $linha['email']?>">
          </div>
          <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" name="data_nascimento" placeholder="Digitar..." required value="<?php echo $linha['data_nascimento']?>">
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-success" value="Salvar Alterações">
          </div>
        </form>
        <a href="pesquisar.php" class="btn btn-primary">Voltar</a>
        <input type="hidden" name="id" value="<?php echo $linha['id']?>">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>