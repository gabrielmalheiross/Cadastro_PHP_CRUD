<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="container-fluid py-5">
                    <h1 class="display-4 fw-bold">Login Jesus</h1>
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Login</label>
                            <input type="text" class="form-control" name="login">
                            <small id="emailHelp" class="form-text">Entre com seus dados de acesso</small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Acessar</button>
                    </form>
                    <?php

                    if (isset($_POST['login'])) {
                        $login = $_POST['login'];
                        $senha = md5($_POST['senha']);

                        include "restrito/conexao.php";
                        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

                        if ($result = mysqli_query($conn, $sql)) {
                            $num_registros = mysqli_num_rows($result);
                            if ($num_registros == 1) {
                                $linha = mysqli_fetch_assoc($result);
                                if (($login == $linha['login']) && ($senha == $linha['senha'])) {
                                    
                                    session_start();
                                    $_SESSION['login'] = "Gabriel";
                                    header("location: restrito");
                                    
                                } else { echo "Login Inválido"; }
                            } else { echo "Login ou senha não encontrados ou inválido."; }
                        } else { echo "Nenhum resultado do Banco de Dados."; }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>