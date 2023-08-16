<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de Alunos</title>
</head>

<body>
    <a href="index.php">Home</a> | <a href="consultaRadiobutton.php">Consulta</a>
    <hr>
    <h2>Exclusão Alunos</h2>  
</body>
</html>

<?php

    include("conexaoBD.php");

    //if (!isset($_POST["raAluno"])) {
    if (!isset($_GET["raAluno"])) {
        echo"Selecione o aluno a ser excluido!";
    } else {
        $ra = $_GET["raAluno"];
        try {
        include("conexaoBD.php");
        $stmt= $pdo->prepare('DELETE FROM alunos WHERE ra = :ra');
        $stmt->bindParam(':ra',$ra);
        $stmt->execute();
        echo $stmt->rowCount() . " aluno de RA $ra foi removido!";
        
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }
?>