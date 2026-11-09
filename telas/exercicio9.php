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
    <title>Leia a idade de uma pessoa em anos e exiba em meses</title>
</head>
<body>
    <h1>Informe a idade de uma pessoa em anos para exibir em meses: </h1>
    <form method = "POST"> 
        <label>Informe a idade: </label>
        <input type="number" id= "idade" name="idade"/>
        <br><br>
        <button type="submit">Calcular Idade</button>    
            <?php
            if(isset($_POST['idade'])) {
            $num1 = $_POST ['idade'];
          

            $resultado = $funcoes->idadeParaMeses($num1);
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['idade'])) {

            echo "A idade em meses é: ".$resultado;
        }else{
            echo "Preencha o campo !";
        }
            ?>    


</body>
</html>