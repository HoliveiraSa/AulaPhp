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
    <title>Subtrair</title>
</head>
<body>
    <h1> Informe os valores que deseja subtrair </h1>
    <form method ="POST"> <!-- informa o metodo que vai ser usado, post ou get !-->
        <label>Informe o primeiro número: </label> <!-- Pega o primeiro numero!-->
        <input type="number" id= "primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo número: </label>
         <input type="number" id= "segundoNumero" name="segundoNumero"/>

         <button type="submit">Subtrair<!-- Faz o pedido pro banco!-->
        <?php
        if(isset($_POST['primeiroNumero'])) { //evita que de o erro quando entra no campo
            $num1 = $_POST ['primeiroNumero'];
            $num2 = $_POST ['segundoNumero'];

            $resultado = $funcoes->subtrairDoisNumeros($num1,$num2); //utilizando o método da classe funcões
        }
       ?>    
        </button> 
        </form>
        <?php
             if (isset($_POST['primeiroNumero'])) {

            echo "O resultado da subtração é: ".$resultado;
        }else{
            echo "Preencha os campos !";
        }
            ?>
</body>
</html>
