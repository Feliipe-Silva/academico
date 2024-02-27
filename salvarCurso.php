<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        
        print "<h2>Confira os seus dados</h2>";

        echo "<p><strong>$nome</strong></p>";



            switch ($curso) {
                case 'm':
                    echo "Manutenção de Computador ";
                    break;

                case 'r':
                    echo "Redes de Computadores ";
                    break;

                case 'p':
                    echo "Programação de Computadores ";
                    break;

                case 'w':
                    echo "Programação Web ";
                    break;
                
                default:
                    echo "INFORME UM CURSO!";
                    break;
            }

              $grupo = array ("Alvaro", "Kelly", "Letícia", "Rodrigo");
            $i = 0;

            /*  while ($i < count($grupo)) {     // Primeira 
                $aluno = $grupo[$i];
                echo "<p>- $aluno</p>";
                $i++;
            }      

            do {                             // Segunda
                $aluno = $grupo[$i];
                echo "<p>- $aluno</p>";
                $i++;
            } while ($i < count($grupo));       */

            for ($i = 0; $i < count($grupo); $i++) {    // Terceira
                $aluno = $grupo[$i];
                echo "<p>- $aluno</p>";
            }    

            $disciplinas = array ("Redes de computadores", "Algoritmos", "Programação de Computadores", "Manutenção de Computadores");
            foreach ($disciplinas as $materias) {
            echo "<p>$materias</p>";
            }
    ?>
</body>
</html>