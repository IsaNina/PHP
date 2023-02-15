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


?>