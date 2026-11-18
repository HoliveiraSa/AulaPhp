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
    <title>5. Contagem de números pares: Leia 20 números inteiros e informe quantos deles são pares.</title>
</head>
<body>
    <h1>Informe 20 números inteiros para saber quantos são pares</h1>
    <form method="post">
        <?php
            for ($i = 1; $i <= 20; $i++) {
                echo '<label for="num'.$i.'">Número '.$i.':</label> ';
                echo '<input type="number" id="num'.$i.'" name="num'.$i.'" required><br><br>';
            }
        ?>
        <button type="submit">Mostrar</button>
        <?php
            if(isset($_POST['num1'])) {
                $num1 = (int) $_POST['num1'];
                $num2 = (int) $_POST['num2'];
                $num3 = (int) $_POST['num3'];
                $num4 = (int) $_POST['num4'];
                $num5 = (int) $_POST['num5'];
                $num6 = (int) $_POST['num6'];
                $num7 = (int) $_POST['num7'];
                $num8 = (int) $_POST['num8'];
                $num9 = (int) $_POST['num9'];
                $num10 = (int) $_POST['num10'];
                $num11 = (int) $_POST['num11'];
                $num12 = (int) $_POST['num12'];
                $num13 = (int) $_POST['num13'];
                $num14 = (int) $_POST['num14'];
                $num15 = (int) $_POST['num15'];
                $num16 = (int) $_POST['num16'];
                $num17 = (int) $_POST['num17'];
                $num18 = (int) $_POST['num18'];
                $num19 = (int) $_POST['num19'];
                $num20 = (int) $_POST['num20'];

                $resultado = $funcoes->contarPares($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14, $num15, $num16, $num17, $num18, $num19, $num20); //usando o metodo
            }

        ?>
        <?php
            if (isset($_POST['num1'])) {
                echo "<br>" . $resultado;
            } else {
                echo "<br>Preencha todos os campos!";
            }
        ?>
    </form>

</body>
</html>