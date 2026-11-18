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
    <title>20. Calcule a média aritmética de três números</title>
</head>
<body>
    <h1>Insira três números para calcular a média aritmética</h1>
    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1" step="0.01"/>
        <br><br>
        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2" step="0.01"/>
        <br><br>
        <label>Terceiro Número: </label>
        <input type="number" id="num3" name="num3" step="0.01"/>
        <br><br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $resultado = $funcoes->mediaAritmeticaTres($num1, $num2, $num3);
        }
    ?>
    <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
            echo "A média aritmética é: ".$resultado;
        } else {
            echo "Preencha todos os campos!";
        }
    ?>
</body>
</html>