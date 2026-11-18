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
    <title>18. Leia a idade de uma pessoa e converta para dias.</title>
</head>
<body>
    <h1>18. Leia a idade de uma pessoa e converta para dias.</h1>
    <form method="POST">
        <label>Idade: </label>
        <input type="number" id="idade" name="idade"/>
        <br><br>
        <button type="submit">Converter para Dias</button>
    </form>

    <?php
        if(isset($_POST['idade'])) {
            $idade = $_POST['idade'];
            $resultado = $funcoes->idadeParaDias($idade);
        }
    ?>
    <?php
        if (isset($_POST['idade'])) {
            echo "A idade em dias é: ".$resultado;
        } else {
            echo "Preencha o campo!";
        }
    ?>