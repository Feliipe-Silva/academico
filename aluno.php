<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/princ.css">
</head>
<body id="aluno">
    <p><a href="index.php"><strong>Voltar</strong></a></p>
    <h1>Cadastro dos Alunos</h1>

    <main>
        <form action="" method="post">
            <label for="">Matrícula</label>
                <input type="text" id="matricula" name="matricula" placeholder="Digite a matrícula">

            <label for="">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

            <label for="">Data de nascimento</label>
                <input type="date" id="data" name="data">

            <label for="">Gênero</label>
                <input type="radio" name="genero" id="genero" value="masculino">Masculino
                <input type="radio" name="genero" id="genero" value="feminino">Feminino
                
                <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>