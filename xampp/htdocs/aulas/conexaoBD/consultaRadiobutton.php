<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>
<body>
<a href="index.php">Home</a>
<hr>

<h2>Consulta de Alunos</h2>
    <form method="post">
        RA:<br>
        <input type="text" size="10" name="ra">
        <input type="submit" value="Consultar">
        <hr>
    </form>
    
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        
        include("conexaoBD.php");

        if (isset($_POST["ra"]) && ($_POST["ra"] !="")){
            $ra = $_POST["ra"];
            $stmt = $pdo->prepare("select * from alunos where ra= :ra order by curso, nome");
            $stmt->bindParam(':ra', $ra);
        } else {
            $stmt = $pdo->prepare("select * from alunos order by curso, nome");
        } try {
            //buscando dados
            $stmt ->execute();

            echo "<form method='post'>";
            echo "<table border='1px'>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>RA:</th>";
            echo "<th>Nome:</th>";
            echo "<th>Curso:</th>";
            echo "<th>Foto:</th>";
            echo "</tr>";

            while ($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td><input type='radio' name='raAluno' value='" . $row['ra'] . "'>";
                echo "<td>" . $row['ra'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['curso'] . "</td>";
                if($row["foto"] == null){
                    echo "<td align='center'><img src='user.jpg' width='100px' height='100px'></td>";
                } else {
                    echo "<td align='center'><img src='data:image;base64,".base64_encode($row["foto"])."' width='100px' height='100px'> </td>";
                }
                echo "</tr>";
            }

            echo "</table><br>";

            echo "<button type='submit' formaction='exclusao.php'>Excluir Alunos</button>";
            echo '   |   ';
            echo "<button type='submit' formaction='edicao.php'>Editar Alunos</button>";
            echo "</form>";

        } catch (PDOException $e) {
            echo 'Error:' . $e->getMessage();
        }
        
        $pdo = null;
    }
?>