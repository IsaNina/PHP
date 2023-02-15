<!-- não é necessário declarar as variaveis pelo tipo delas-->

<?php

//variaveis

$nome = "COTIL";
echo $nome;
echo "<br><br>";

var_dump($nome); //exibe o tipo de dado, tamanho e valor
echo "<br><br>";

$outroNome = "UNICAMP";

echo $nome . " " . $outroNome;
echo "<br><br>";

unset($nome); //remove a variavel se quiser limpar varias separar por virgula

if (isset($nome)){
  echo $nome;
  echo "<br><br>";
} else {
  echo "A variavel está vazia :(<br>";
}

$valor = 50.15;
echo $valor;
echo "<br><br>";

$aprovado = true;
echo $aprovado;
echo "<br><br>";

$disciplina = array("BD", "LP", "DAW");
echo $disciplina[2];
echo "<br><br>";

//constantes

define("PI", 3.14);
define("NOME_ALUNO", "Maria");

$resultado = 3 * PI;
echo $resultado . "<br><br>";
echo "Nome do Aluno: " . NOME_ALUNO . "<br><br>";

//-----------Supervariaveis--------//

echo "<br><br>";
echo $_SERVER["SERVER_ADDR"] . "<BR>";
echo $_SERVER["SERVER_NAME"] . "<BR>";
echo $_SERVER["HTTP_USER_AGENT"] . "<BR>";
echo $_SERVER["REMOTE_ADDR"] . "<BR>";
echo $_SERVER["SCRIPT_NAME"] . "<BR>";




?>