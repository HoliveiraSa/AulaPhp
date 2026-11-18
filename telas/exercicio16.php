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
    <title>16. Leia dois números e exiba a média aritmética.</title>
</head>
<body>
    <h1> Informe dois números para calcular a média aritmética: </h1>
    <form method = "POST">
        <label>Número 1: </label>
        <input type="number" id="num1" name="num1"/>
        <br><br>
        <label>Número 2: </label>
        <input type="number" id="num2" name="num2"/>
        <br><br>
        <button type="submit">Calcular Média Aritmética</button>
    </form>

        <?php
            if(isset($_POST['num1']) && isset($_POST['num2'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $resultado = $funcoes->mediaAritmeticaDois($num1, $num2);
            }
        ?>
        <?php
            if (isset($_POST['num1']) && isset($_POST['num2'])) {
                echo "A média aritmética é: ".$resultado;
            } else {
                echo "Preencha os campos!";
            }
        ?>
</body>
</html>