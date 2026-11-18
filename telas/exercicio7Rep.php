<?php
    namespace projetoExercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//ele sai do arquivo que tava com ../
    use projetoExercicios\funcoesPhp\Funcoes;
    $funcoes = new Funcoes(); //criando um vinculo com a classe Funcoes
    $resultado ="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7. Média de notas: Solicite 8 notas de um aluno, calcule a média e informe se ele foi aprovado ou reprovado.</title>
</head>
<body>
    <h1>Informe 8 notas do aluno para calcular a média</h1>
    <form method="post">
        <?php
            for ($i = 1; $i <= 8; $i++) {
                echo '<label for="nota'.$i.'">Nota '.$i.':</label> ';
                echo '<input type="number" step="0.01" id="nota'.$i.'" name="nota'.$i.'" required><br><br>';
            }
        ?>
        <button type="submit">Mostrar</button>
        <?php
            if(isset($_POST['nota1'])) {
                $num1 = (float) $_POST['nota1'];
                $num2 = (float) $_POST['nota2'];
                $num3 = (float) $_POST['nota3'];
                $num4 = (float) $_POST['nota4'];
                $num5 = (float) $_POST['nota5'];
                $num6 = (float) $_POST['nota6'];
                $num7 = (float) $_POST['nota7'];
                $num8 = (float) $_POST['nota8'];

                $resultado = $funcoes->calcularMedia($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8); //usando o metodo
            }

        ?>
        <?php
            if (isset($_POST['nota1'])) {
                echo "<br>" . $resultado;
            } else {
                echo "<br>Preencha todas as notas!";
            }
        ?>
    </form>

</body>
</html>