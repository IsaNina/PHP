<body>
    <a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
    <hr>
    <h2>Edição de Alunos</h2>

<?php
    $ra = $_POST['ra'];
    $novoNome = $_POST['nome'];
    $novoCurso = $_POST['curso'];

    try {
        include("conexaoBD.php");

        $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $stmt->bindparam(':novoNome', $novoNome);
        $stmt->bindparam(':novoCurso', $novoCurso);
        $stmt->bindparam(':ra', $ra);
        $stmt->execute();

        echo "Os dados do aluno de RA $ra foram alterados!";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
?>
</body>