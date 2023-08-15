<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "gabriel";

    if ($conn = mysqli_connect($server, $user, $pass, $db)) {
        echo "Conectado";
    } else {
        echo "Erro";
    }

    function mensagem($texto, $tipo) {
        echo 
        "<div class='alert alert-$tipo' role='alert'>
            $texto
        </div>";
    }
?>