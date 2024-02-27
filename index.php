<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
    <link rel="stylesheet" href="css/princ.css">
                    
</head>
<body id="inicio">
    <main>
        <h1>Controle Acadêmico</h1>
        <p>Bem vindo ao sistema de controle acadêmico.</p> 
        <p>aqui você poderá consulta suas <a href="notas.php" alt="notas alunos">notas.</a></p> 
        <p>e também sua <a href="frequencia.php" alt="frequencia dos alunos">frequencias.</a></p>
    
            <h2>Menu</h2>
            <ul>
                <li><a href="aluno.php">Alunos</a></li>
                <li><a href="professor.php">Professores</a></li>
                <li><a href="disciplina.php">Disciplinas</a></li>
                <li><a href="turma.php">Turmas</a></li>
                <li><a href="nota.php">Notas</a></li>
                <li><a href="frequencia.php">Frequencias</a></li>
            </ul>
    
    </main>

    <?php
        $notas = array("prova1" => 8.3, "prova2" => 5.9, "prova3" => 9.2);

        echo "<p>Nota da prova: " .$notas["prova1"]. '</p>';
        echo "<p>Nota da prova: " .$notas["prova2"]. '</p>';
        echo "<p>Nota da prova: " .$notas["prova3"]. '</p>';

        echo "<p> --Media nota: ". $notas['prova1'] + $notas['prova2'] + $notas['prova3'] /2 . "</p>";
    
    ?>
</body>
</html>