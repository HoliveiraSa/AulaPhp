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
    <title> Calcule a média entre três números. </title>
</head>
<body>
    <h1> Informe os valores para encontrar a média!</h1>
    <form method = "POST">

    <label>Informe o primeiro número: </label> <!-- Pega o primeiro numero!-->
        <input type="number" id= "primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo número: </label>
         <input type="number" id= "segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o terceiro número: </label>
         <input type="number" id= "terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular Média</button>
    </form>
    <?php
            if(isset($_POST['primeiroNumero'])) { //evita que de o erro quando entra no campo
            $num1 = $_POST ['primeiroNumero'];
            $num2 = $_POST ['segundoNumero'];
            $num3 = $_POST ['terceiroNumero'];

            $resultado = $funcoes->mediaDeTresNumeros($num1,$num2,$num3);
             //utilizando o método da classe funcões
            }
        ?>    
        </button> 
        </form>
        <?php
            if (isset($_POST['primeiroNumero'])) {

            echo "O resultado da média é: ".$resultado;
        }else{
            echo "Preencha os campos !";
        }
            ?>

</body>
</html>
