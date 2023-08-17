<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "jesus";

if ($conn = mysqli_connect($server, $user, $pass, $db)) {
    // echo "Conectado";
} else {
    echo "Erro";
}

function mensagem($texto, $tipo)
{
    echo
    "<div class='alert alert-$tipo' role='alert'>
            $texto
        </div>";
}

function mostra_data($data)
{
    $d = explode('-', $data);
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
}

function mover_foto($vetor_foto)
{
    $vtipo = explode("/", $vetor_foto['type']);
    $tipo = $vtipo[0] ?? null;
    $extensao = ".".$vtipo[1] ?? null;
    if ((!$vetor_foto['error']) && ($vetor_foto['size'] <= 500000) && ($tipo == "image")) {
        $nome_arquivo = date('dmYHis') . ".jpg";
        move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo);
        return $nome_arquivo;
    } else {
        return 0;
    }
}


function masc_tel($tel) {
        $tam = strlen(preg_replace("/[^0-9]/", "", $tel));
        
        if ($tam == 13) {
            return "+".substr($tel, 0, $tam-11)." (".substr($tel, $tam-11, 2).") ".substr($tel, $tam-9, 5)."-".substr($tel, -4);
        }
        if ($tam == 12) {
            return "+".substr($tel, 0, $tam-10)." (".substr($tel, $tam-10, 2).") ".substr($tel, $tam-8, 4)."-".substr($tel, -4);
        }
        if ($tam == 11) {
            return " (".substr($tel, 0, 2).") ".substr($tel, 2, 5)."-".substr($tel, 7, 11);
        }
        if ($tam == 10) {
            return " (".substr($tel, 0, 2).") ".substr($tel, 2, 4)."-".substr($tel, 6, 10);
        }
        if ($tam <= 9) {
            return substr($tel, 0, $tam-4)."-".substr($tel, -4);
        }
    }
