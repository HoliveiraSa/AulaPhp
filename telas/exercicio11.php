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
    <title>11. Calcule a área de um triângulo a partir da base e altura.</title>
</head>
<body>
    <h1>Informe a base e a altura de um triângulo para calcular a área: </h1>
    <form method = "POST"> 
        <label>Informe a base: </label>
        <input type="number" id= "base" name="base"/>
        <br><br>
        <label>Informe a altura: </label>
        <input type="number" id= "altura" name="altura"/>
        <br><br>
        <button type="submit">Calcular Área</button>    
        
            <?php
            if(isset($_POST['base']) && isset($_POST['altura'])) {
            $num1 = $_POST ['base'];
            $num2 = $_POST ['altura'];
          
            $resultado = $funcoes->areaTriangulo($num1, $num2);
            }
        ?>
         </button> 
        </form>
        <?php
        
            if (isset($_POST['base']) && isset($_POST['altura'])) {

            echo "A área do triângulo é: ".$resultado;
        }else{
            echo "Preencha os campos !";
        }

        ?>
</body>
</html>