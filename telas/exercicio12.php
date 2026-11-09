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
    <title>Calcule o volume de uma caixa retangular.</title>
</head>
<body>
    
    <h1>Informe as dimensões de uma caixa retangular para calcular o volume: </h1>
    <form method = "POST"> 
        <label>Informe a largura: </label>
        <input type="number" id= "largura" name="largura"/>
        <br><br>
        <label>Informe a altura: </label>
        <input type="number" id= "altura" name="altura"/>
        <br><br>
        <label>Informe o comprimento: </label>
        <input type="number" id= "comprimento" name="comprimento"/>
        <br><br>
        <button type="submit">Calcular Volume</button>    
        
            <?php
            if(isset($_POST['largura']) && isset($_POST['altura']) && isset($_POST['comprimento'])) {
            $num1 = $_POST ['largura'];
            $num2 = $_POST ['altura'];
            $num3 = $_POST ['comprimento'];
          
            $resultado = $funcoes->volumeCaixaRetangular($num1, $num2, $num3);
            }
        ?>
         </button> 
        </form>
        <?php
        
            if (isset($_POST['largura']) && isset($_POST['altura']) && isset($_POST['comprimento'])) {

            echo "O volume da caixa retangular é: ".$resultado;
        }else{
            echo "Preencha os campos !";
        }

        ?>



</body>
</html>