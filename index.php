<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                        $senha = $_POST['senha'];
                        if (($login == "admin") && ($senha == "admin")) {
                            session_start();
                            $_SESSION['user'] = "Robson";
                            header("location: restrito");
                        } else {
                            echo "Login Inválido";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>