<?php
$agora = time();
echo $agora;
echo "<br>";

//date_default_timezone_set("America/Sao_Paulo")

echo date_default_timezone_get();
echo "<br>";

echo date("Y-m-d H:i:s", time());
echo "<br>";
echo date("Y-m-d", time());
echo "<br>";
echo date("D");
echo "<br>";
echo date("l");
echo "<br>";

if(checkdate(02, 20, 2022)) // resultado = true
echo "Data valida obrigada <br>";
else
echo "invalido poxa <br>";

if(checkdate(02, 30, 2022)) // resultado = false
echo "Data valida obrigada <br>";
else 





echo "invalido poxa <br>";

?>