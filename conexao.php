<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "jesus";

    if (mysqli_connect($server, $user, $pass, $bd)) {
        echo "Conectado";
    } else {
        echo "Erro";
    }
?>