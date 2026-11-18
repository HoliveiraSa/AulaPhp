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
    <title>19. Calcule o tempo restante de vida até 100 anos</title>
</head>
<body>
    <h1>Insira sua idade atual para calcular o tempo de vida até 100 anos</h1>
    <form method="POST">
        <label>Idade: </label>
        <input type="number" id="idade" name="idade"/>
        <br><br>
        <button type="submit">Calcular Tempo Restante</button>
    </form>

    <?php
        if(isset($_POST['idade'])) {
            $idade = $_POST['idade'];
            $resultado = $funcoes->tempoRestanteDeVida($idade);
        }
    ?>
    <?php
        if (isset($_POST['idade'])) {
            echo "O tempo restante de vida é: ".$resultado." anos";
        } else {
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>