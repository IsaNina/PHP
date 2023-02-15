<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOLETIM</title>
<style>
 #rec{
  color: pink;
 }
 #aprovado{
  color: green;
 }
 #reprovado{
  color: red;
 }
</style>

</head>
<body>
  
<?php

$media = 4.5;
if($media >= 6.5) {
  echo  "<span id='aprovado'> Aprovado!<br> </span>";

} else if ( ($media > 3.0) && ($media <6.0) ) {
  echo "<span id='rec'> Recuperação >:( <br> </span>";
}  
else {
  echo "<span id='reprovado'> Reprovado....<br> </span>";
}

?>

</body>
</html>

