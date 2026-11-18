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
    <title>3. Soma de números: Solicite um número inteiro positivo e exiba a soma de 1 até esse número.</title>
</head>
<body>
    <h1>Informe um número inteiro positivo para calcular a soma de 1 até ele</h1>
    <form method="post">
        <label for="numero">Informe um número inteiro positivo:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <button type="submit">Mostrar</button>
        <?php
            if(isset($_POST['numero'])) {
                $num1 = (int) $_POST['numero'];
                $resultado = $funcoes->somaDeNumeros($num1);
            }

        ?>
        <br><br>
        <?php
            if (isset($_POST['numero'])) {
                echo "" . $resultado;
            } else {
                echo "Preencha o campo!";
            }
        ?>
    </form>



</body>
</html>