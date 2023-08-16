<body>
    <a href="index.html">Home</a> | <a href="consultaRadiobutton.php">Consulta</a>
    <hr>
    <h2>Edição de Alunos</h2>

<?php
    include("conexaoBD.php");

    $ra = $_POST['ra'];
    $novoNome = $_POST['nome'];
    $novoCurso = $_POST['curso'];

    //foto
    $novaFoto = $_FILES['foto'];
    $nomeFoto = $novaFoto['name'];
    $tipoFoto = $novaFoto['type'];
    $tamanhoFoto = $novaFoto['size'];

    //faz update da foto apenas se o arquivo foi enviado
    if($nomeFoto != "") {
        //lê o conteúdo do arq para uma var
        $fotoBinario = file_get_contents($novaFoto['tmp_name']);
        $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso, foto = :novaFoto WHERE ra = :ra' );
        $stmt->bindparam(':novoNome', $novoNome);
        $stmt->bindparam(':novoCurso', $novoCurso);
        $stmt->bindparam(':novaFoto', $fotoBinario);
        $stmt->bindparam(':ra', $ra);
    }
    else {
        $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $stmt->bindparam(':novoNome', $novoNome);
        $stmt->bindparam(':novoCurso', $novoCurso);
        $stmt->bindparam(':ra', $ra);
        $stmt->execute();

    }

    try {
        $stmt->execute();
        echo "Os dados do aluno de RA $ra foram alterados!";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>
</body>