<?php

    $turmas = array(
        "3DSD"=>array("16117"=>"Amanda",
                      "16557"=>"Bruno",
                      "16887"=>"Carolina"),

        "3DSN"=>array("16144"=>"Aline",
                      "16789"=>"Bianca",
                      "13258"=>"Caio"),

        "3DSD"=>array("19478"=>"Allan",
                      "16577"=>"Bruna",
                      "11477"=>"Carlos"),

    );

    if (!isset($_GET["turma"]) || (trim($_GET["turma"]) == "")){
        echo "Informe a Turma!";
    } else {

        $turma = strtoupper($_GET["turma"]);

        echo "<h1>Alunos da Turma " . $turma . "</h1>";

        echo "<table border='1px'>";

        foreach($turmas[$turma] as $aluno){
        echo "<tr><td>" . $aluno . "</td></tr>"; 
    }
        echo "</table>";
    }
    

    
?>