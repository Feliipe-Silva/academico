<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/princ.css">
    <script type="text/javascript" src="script/codigo.js"></script>

</head>
<body id="aluno">
    <a href="index.php"><strong>Voltar</strong></a>

    <main>
        <h1>Cadastro dos Alunos</h1>
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
                
            <label for="nota1">Primeira nota</label>
                <input type="number" name="nota1" id="nota1" min="0" max="10">

            <label for="nota2">Segunda nota</label>
                <input type="number" name="nota2" id="nota2" min="0" max="10">
                <input type="button" value="Calcular a média" onclick="resultado(this.form)">
        </form>
    </main>
</body>
</html>