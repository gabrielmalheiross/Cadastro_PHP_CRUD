<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <title>Exclusão de Cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
        include "conexao.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];


        $sql = "DELETE FROM `pessoas` WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            mensagem("$nome excluído com sucesso!", 'success');
        } else {
            mensagem("$nome NÃO excluído!", 'danger');
        }
      ?>  

      <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>