<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>

  <style>
    #automatico{
      font-family: 'courier new';
      font-size:1rem;
      text-align: center;
    }
  </style>
</head>
<body>
<?php

$op = 3;

switch($op){
  case 1:
    cadastar();
    echo "Cadastro a seguir!<br>";
    break;
  case 2:
    //emitirRelatorioVenda();
    echo "Retatórios";
    break;
    default:
    echo "Opção invalida";
    break;
}

echo "<span id='automatico'><br><br>Mensagem automatica bipbip<br><br></span>";

$x = 2;
if($x%2==0){
  $resultado = "par";

} else {
  $resultado = "impar";
}

$resultado = ($x%2)==0? "par" : "impar";

echo $resultado;
?>
</body>
</html>


