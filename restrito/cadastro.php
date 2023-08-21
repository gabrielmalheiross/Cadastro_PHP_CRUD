<!doctype html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <title>Tela de cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro de Jesus</h1>
        <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digitar..." required>
          </div>
          <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="endereco" placeholder="Digitar...">
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digitar..." required onkeyup="handlePhone(event)">
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" name="email" placeholder="Digitar...">
            </div>
            <div class="mb-3">
              <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
              <input type="date" class="form-control" name="data_nascimento" placeholder="Digitar...">
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Foto:</label>
              <input type="file" accept="image/*" class="form-control" name="foto" placeholder="Digitar...">
            </div>
            <div class="mb-3">
              <input type="submit" class="btn btn-success">
            </div>

            <script>
              const handlePhone = (event) => {
                let input = event.target
                input.value = phoneMask(input.value)
              }

              const phoneMask = (value) => {
                if (!value) return ""
                value = value.replace(/\D/g, '')
                value = value.replace(/(\d{2})(\d)/, "($1) $2")
                value = value.replace(/(\d)(\d{4})$/, "$1-$2")
                return value
              }
            </script>

        </form>
        <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>