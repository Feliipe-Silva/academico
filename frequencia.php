<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico - Justificativa de frequencia</title>
    <link rel="stylesheet" href="css/princ.css">
    <script type="text/javascript" src="script/codigo.js"></script>

</head>

<body id="frequencia">
    <a href="index.php"><strong>Voltar</strong></a>

    <main>
        <form action="" method="post">
            <h1>Frenquencia de Alunos</h1>
            <label for="">Matrícula</label>
            <input type="text" name="matricula" id="matricula">

            <label for="">Nome do Aluno(a)</label>
            <input type="text" name="nomealuno" id="nomealuno">

            <label for="">Data da falta</label>
            <input type="date" name="datafalta" id="datafalta">

            <button type="button" name="button" onclick="justificaFalta(this.form)">Justificar Falta</button>
        </form>
    </main>

</body>

</html>