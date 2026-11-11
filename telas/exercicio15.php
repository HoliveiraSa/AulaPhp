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
    <title>15. Leia a distância e o tempo para calcular a velocidade média.</title>
</head>
<body>
    <h1> Informe a distância e o tempo para calcular a velocidade média: </h1>
    <form method = "POST">
        <label>Distância metros: </label>
        <input type="number" id="distancia" name="distancia"/>
        <br><br>
        <label>Tempo segundos: </label>
        <input type="number" id="tempo" name="tempo"/>
        <br><br>
        <button type="submit">Calcular Velocidade Média</button>
    </form>

        <?php
            if(isset($_POST['distancia']) && isset($_POST['tempo'])) {
                $num1 = $_POST['distancia'];
                $num2 = $_POST['tempo'];
                $resultado = $funcoes->velocidadeMedia($num1, $num2);
            }
        ?>
        <?php
            if (isset($_POST['distancia']) && isset($_POST['tempo'])) {
                echo "A velocidade média é: ".$resultado." m/s";
            } else {
                echo "Preencha os campos!";
            }
        ?>

</body>
</html>