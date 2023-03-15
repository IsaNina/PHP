<?php

/* BASE64
 É um método para codificação dos dados para transferÊncia na Internet. Ela é uma codificação de mão dupla, e usando uma segunda função você pode descobrir a string original de uma string codificada.*/

 $string = 'O rato roeu a roupa do rei de Roma';

 $codificada = base64_encode($string);

 echo "Resultado da codificação usando base64: " . $codificada;

 echo "<br><br>";

 $original = base64_decode($codificada);

 echo "Resultado da decodificação usando base64: " . $original;
 // a $original será igual a $string
?>