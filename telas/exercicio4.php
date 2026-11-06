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
    <title>Leia um número e exiba sua raiz quadrada</title>
</head>
<body>
    <h1> Informe um valor para ser calculada a raiz quadrada!</h1>
    <form method = "POST"> 
    <label>Informe o número: </label> <!-- Pega o primeiro numero!-->
        <input type="number" id= "primeiroNumero" name="primeiroNumero"/>
        <br><br>
        <button type="submit">Calcular Raiz Quadrada<!-- Faz o pedido pro banco!-->    
            <?php
            if(isset($_POST['primeiroNumero'])) { //evita que de o erro quando entra no campo
            $num1 = $_POST ['primeiroNumero'];
          

            $resultado = $funcoes->raizQuadrada($num1); //utilizando o método da classe funcões
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['primeiroNumero'])) {

            echo "A raiz quadrada do numero é: ".$resultado;
        }else{
            echo "Preencha os campos !";
        }
            ?>
    
</body>
</html>