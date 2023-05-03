<?php

if (!isset($_COOKIE['Nome'])){
    $msg = "Você não está cadastrado em nosso site... para ter acesso completo acesse <a href='cadastro.php'> Clique aqui! </a>";

} else {
    $nome = $_COOKIE["Nome"];
    $idade = $_COOKIE["Idade"];
    $contasVisitas = $_COOKIE["contasVisitas"];

    if ($idade < 18){

        $msg ="<span style='color:red;'> Você não tem idade para acessar esse site</span>";

    } else {
        $cor = $_COOKIE["Cor"];

        if ($contasVisitas > 0) {
            $msg = "Olá, " . $nome . " Bem vindo de volta :3";
        } else {
            $msg = "Olá , " . $nome . " Bem vindo!";
            $contasVisitas++;
            setcookie("contasVisitas", $contasVisitas, time()+3600, "/");
        }
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $cor ?> ">
    <?= $msg ?>
</body>
</html>
