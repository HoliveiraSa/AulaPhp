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
    <title>17. Calcule o salário mensal a partir do valor da hora e horas trabalhadas.</title>
</head>
<body>
    <h1> Calcule o salário mensal a partir do valor da hora e horas trabalhadas. </h1>
    <form method = "POST">
        <label>Valor da hora: </label>
        <input type="number" id="valorHora" name="valorHora"/>
        <br><br>
        <label>Horas trabalhadas: </label>
        <input type="number" id="horasTrabalhadas" name="horasTrabalhadas"/>
        <br><br>
        <button type="submit">Calcular Salário</button>
    </form>

        <?php
            if(isset($_POST['valorHora']) && isset($_POST['horasTrabalhadas'])) {
                $valorHora = $_POST['valorHora'];
                $horasTrabalhadas = $_POST['horasTrabalhadas'];
                $resultado = $funcoes->horasTrabalhadas($valorHora, $horasTrabalhadas);
            }
        ?>
        <?php
            if (isset($_POST['valorHora']) && isset($_POST['horasTrabalhadas'])) {
                echo "O salário mensal é: ".$resultado;
            } else {
                echo "Preencha os campos!";
            }
        ?>