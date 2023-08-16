<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <title>Cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
      include "conexao.php";

      $nome = $_POST['nome'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $data_nascimento = $_POST['data_nascimento'];

      $foto = $_FILES['foto'];
      $nome_foto = mover_foto($foto);

      $sql = "INSERT INTO `pessoas`
        (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`, `foto`) 
        VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento', '$nome_foto')";

      if (mysqli_query($conn, $sql)) {
        echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'";
        mensagem("$nome cadastrado com sucesso!", 'success');
      } else {
        mensagem("$nome NÃo cadastrado!", 'danger');
      }
      ?>

      <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>