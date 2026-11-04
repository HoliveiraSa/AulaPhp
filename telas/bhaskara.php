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
    <title>Somar</title>
</head>
<body>
    <h1> Informe os valores de bhaskara (A, B e C)</h1>
    <form method ="POST"> <!-- informa o metodo que vai ser usado, post ou get !-->
        <label>Informe o valor de A: </label> <!-- Pega o primeiro numero!-->
        <input type="number" id= "primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o valor de B: </label>
         <input type="number" id= "segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o valor de C: </label>
         <input type="number" id= "terceiroNumero" name="terceiroNumero"/>

         <button type="submit">Calcular<!-- Faz o pedido pro banco!-->
        <?php
        if(isset($_POST['primeiroNumero'])) { //evita que de o erro quando entra no campo
            $a = $_POST ['primeiroNumero'];
            $b = $_POST ['segundoNumero'];
            $c = $_POST ['terceiroNumero'];

            $resultado = $funcoes->calcularX1X2($a, $b, $c); //utilizando o método da classe funcões
        }
        ?>    
        </button> 
        </form>
        <?php
        if (isset($_POST['primeiroNumero'])) {

            echo $resultado;
        }else{
            echo "Preencha os campos !";
        }
            ?>
</body>
</html>
