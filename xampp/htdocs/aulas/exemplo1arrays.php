<?php
    /*
        $aExemplo = array( "ra"=>18101, 
                        "serie"=>3, 
                        "aluno"=>array("nome"=>"José A.", 
                        "sobrenome"=>"Matioli"));

        echo $aExemplo["ra"] . " - " . $aExemplo["aluno"]["nome"] . " " .  $aExemplo ["aluno"]["sobrenome"];
    */

    $aExemplo = array(18101, 3, "José Alberto Matioli");

    
    //$aExemplo[0] = 18101;
    //$aExemplo[1] = 3;
    //$aExemplo[2] = "José Alberto Matioli";
    

    echo $aExemplo[0] . " - " . $aExemplo[2];

    $aExemplo[2] = "J. A. Matioli";

    echo "<br>";

    echo $aExemplo[0] . " - " . $aExemplo[2];
?>


