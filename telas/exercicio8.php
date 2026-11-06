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
    <title>Calcule o valor de um produto com 10% de desconto. </title>
</head>
<body>
    <h1> Informe o valor do produto para inserir 10% de desconto: </h1>
    <form method = "POST">

    <label>Informe o valor do produto: </label> <!-- Pega o primeiro numero!-->
        <input type="number" id= "primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular Desconto</button>
    </form>
    <?php
            if(isset($_POST['primeiroNumero'])) { //evita que de o erro quando entra no campo
            $num1 = $_POST ['primeiroNumero'];


            $resultado = $funcoes->descontoProduto($num1);
             //utilizando o método da classe funcões
            }
        ?>    
        </button> 
        </form>
        <?php
            if (isset($_POST['primeiroNumero'])) {

            echo "O resultado do desconto é: ".$resultado;
        }else{
            echo "Preencha os campos !";
        }
            ?>

</body>
</html>