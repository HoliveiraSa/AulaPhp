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
    <title>7.  Converta temperatura de Celsius para Fahrenheit. </title>
</head>
<body>
    <h1>Informe uma temperatura em Celsius para ser convertida para Fahrenheit: </h1>
    <form method = "POST"> 
        <label>Informe a temperatura: </label>
        <input type="number" id= "temperatura" name="temperatura"/>
        <br><br>
        <button type="submit">Calcular Fahrenheit</button>    
            <?php
            if(isset($_POST['temperatura'])) {
            $num1 = $_POST ['temperatura'];
          

            $resultado = $funcoes->celciusParaFahrenheit($num1);
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['temperatura'])) {

            echo "A temperatura em Fahrenheit é: ".$resultado;
        }else{
            echo "Preencha o campo !";
        }
            ?>
</body>
</html>