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
    <title>4. Números múltiplos: Solicite um número inteiro e exiba todos os seus múltiplos entre 1 e 100.</title>
</head>
<body>
    <h1>Informe um número inteiro para exibir todos os seus múltiplos entre 1 e 100</h1>
    <form method="post">
        <label for="numero">Informe um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar</button>
        <?php
            if(isset($_POST['numero'])) {
                $num1 = (int) $_POST['numero'];
                $resultado = $funcoes->multiplosDeUmNumero($num1); //usando o metodo
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