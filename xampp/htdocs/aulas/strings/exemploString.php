<?php

    $texto = " cotil - unicamp ";

    //trim - Retira o espaço no início e no final de uma string
    echo "-" . trim($texto) . "-" . "<br>";

    //rtrim - Retira espaços em branco (ou outos caracteres) do fim de uma string
    echo "-" . rtrim($texto) . "-" . "<br>";

    //ltrim - Retira espaços em branco (ou outos caracteres) do início de uma string
    echo "-" . ltrim($texto) . "-" . "<br>";

    //tudo maiúsculo
    echo strtoupper ($texto) . "<br>";

    //tudo minúsculo
    echo strtolower ($texto) . "<br>";

    //1ª letra minúscula
    echo ucfirst($texto) . "<br>";

    //1ª letra maiúscula
    echo ucwords($texto) . "<br>";

    //retorna o tamanho de uma string
    echo strlen($texto) . "<br>";

    //reversão da string
    echo strrev($texto) . "<br>";

    //quebra a string a cada 3 caractéres
    $str = str_split($texto, 3);
    print_r($str);
    echo "<br>";

    //encontra a posição da primeira ocorrência de uma string
    echo strpos($texto, "unicamp") . "<br> ";
    $email = "amanda@unicamp.br";

    //retorna a string a partir do caractere informado
    echo strchr($email, "@") . "<br>";

    //retorna a string antes do caractere informado
    echo strchr($email, "@", true) . "<br>";

    //retorna uma parte de uma string
    echo substr('abcdef', 1) . "<br>"; //bcdf
    echo substr('abcdef', 1, 3) . "<br>"; //bdc

    echo str_replace("i", "x", $texto) . "<br>"; 

    //casting
    $foo = "0"; //foo é uma string (ASCII 48)
    $foo += 2; // foo é agora um inteiro (2)
    $foo = $foo + 1.3; //foo agora é um float (3.3)
    echo $foo;
    echo "<br>";
    

    echo "----------------------------------------------------------------------------------";

    $senha = "minhasenha";
    
    /*
    ** md5 - gera uma cópia criptografada - mão única
    ** algoritimo de um hash de 128 bits - 32 caracteres
    ** -> problema: para a mesma string, sempre o mesmo resultado. Fácilachar na internet listas com resultados.
    ** -> solução: concatenar um salt
    */
    echo "<br> *** md5 *** <br>";
    $x = md5($senha);
    echo($x);
    echo "<br>";

    if (md5($senha) == $x){
        echo "Senha ok!<br><br>";
    }

    //com salt - Uma string de slat para base de encriptação
    $salt = "c0t1lUn1camp";
    $senha = $senha . $salt;
    echo "senha = " . $senha;
    echo "<br>";

    $x = md5($senha);
    echo($x);
    echo "<br>";

    if (md5($senha) == $x){
        echo "Senha ok!<br><br>";
    }

    /*
    ** sha1 -  gera uma cópia criptografada - mão única
    ** 160 bites - 40 caracteres
    ** considerar a mesma regra de segurança com o uso do salt, abordade mo md5
    */
    echo "<br> *** sha1 *** <br>";
    $x = sha1($senha);
    echo($x);
    echo "<br>";

    if(sha1($senha) == $x){
        echo "Senha ok!<br><br>";
    }

    /*
    ** crypt - gera uma cópia criptografada 
    ** retornará uma string criptografada usando o algoritimo de encriptação Unix Stantard DES-based ou algoritimos alternativos disponíveis no sistema.
    */
    echo "<br> *** crypt *** <br>";

    //o 2º parâmetro é o salt, que não são fornecidos, será gerado randomicamente pelo PHP cada vez que chamar essa função.
    $x = crypt($senha, "");
    //$x = crypt($senha, "c0t1lUn1camp");
    echo $x;
    echo "<br>";

    if(crypt($senha, "") == $x){
        echo "Senha ok!<br><br>";
    }


?>  