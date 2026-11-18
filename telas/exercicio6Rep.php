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
    <title>6. Tabuada personalizada: Solicite um número inteiro e exiba sua tabuada de multiplicação, do 1 ao 10.</title>
</head>
<body>
    <h1>Informe um número inteiro para exibir sua tabuada do 1 ao 10</h1>
    <form method="post">
        <label for="numero">Informe um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar</button>
        <?php
            if(isset($_POST['numero'])) {
                $num1 = (int) $_POST['numero'];
                $resultado = $funcoes->tabuada($num1); //usando o metodo
            }

        ?>
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