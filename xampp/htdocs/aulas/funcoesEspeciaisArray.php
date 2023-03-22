<?php
    
    $meuArray = array();
    $meuArray = array("Maçã", "Melão", "Uva");

    //echo ($meuArray); ñ funcionna, pq o echo imprime string
    //echo ($meuArray[0]); funcina pq tem string na posição 0
    
    print_r($meuArray); //imprime o array
    unset($meuArray[1]);

    echo "<br>";
    print_r($meuArray);


    $meuArray[1] = "Banana";
    echo "<br>";
    print_r($meuArray);
    

    $meuArray[1] = "Banana";
    sort($meuArray);
    echo "<br>";
    print_r($meuArray); 

    echo "<br>";

    echo count($meuArray);
    echo "<br>";
    echo sizeof($meuArray);
    echo "<br>";
    
    foreach($meuArray as $fruta){
        echo $fruta . ", ";
    }
    echo "<br>";

    array_push($meuArray, "Laranja");
    print_r ($meuArray);
    echo "<br>";

    array_pop($meuArray);
    print_r($meuArray);
    echo "<br>";

    array_unshift($meuArray, "Laranja");
    print_r($meuArray); 

    echo "<br>";
    echo "<br>";

    function insereDelimitador($valor){
        return "Fruta: ".$valor;
    }
    
    //map permite executar uma função para cada item do array

    $meuArray = array_map("insereDelimitador", $meuArray);

    foreach($meuArray as $fruta){
        echo $fruta . "<br>";
    }

    $novoArray = array();
    $novoArray = array("um" => "Maça", "dois" => "Melão", "três" =>"Uva");
    $key = array_search("Melão", $novoArray);
    echo $key;
                                    
    echo "<br>";

    $key = in_array("Melão", $novoArray); // 1 = true & " " = false
    echo $key;

    echo "<br>";

    echo array_key_exists("dois", $novoArray) ? "Tem Melão":"Não tem melão";









?>