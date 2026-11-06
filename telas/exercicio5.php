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
    <title>5. Leia um valor em metros e converta para centímetros. </title>
</head>
<body>
    <h1>Informe o valor que vai ser transformado de METROS para CENTÍMETROS! </h1>
    <form method = "POST"> 
    <label>Informe o valor em METROS: </label>
        <input type="number" id= "metros" name="metros"/>
        <br><br>
        <button type="submit">Converter para Centímetros</button>    
            <?php
            if(isset($_POST['metros'])) {
            $num1 = $_POST ['metros'];
          

            $resultado = $funcoes->metroParaCentimetro($num1);
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['metros'])) {

            echo "O valor em centímetros é: ".$resultado;
        }else{
            echo "Preencha o campo !";
        }
            ?>
    
</body>
</html>