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
    <title>14. Leia o preço de um produto e adicione 18% de imposto.</title>
</head>
<body>
    <h1> Informe o preço de um produto para calcular o valor com imposto de 18%: </h1>
    <form method = "POST">
        <label>Preço do produto: </label>
        <input type="number" id= "precoProduto" name="precoProduto"/>
        <br><br>
        <button type="submit">Calcular Imposto</button>    
            <?php
            if(isset($_POST['precoProduto'])) {
            $num1 = $_POST ['precoProduto'];
          

            $resultado = $funcoes->impostoProduto($num1);
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['precoProduto'])) {

            echo "O valor do produto com imposto é: ".$resultado;
        }else{
            echo "Preencha o campo !";
        }
            ?>
    
</body>
</html>
