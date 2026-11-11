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
    <title>13. Receba um número e calcule seu quadrado e cubo.</title>
</head>
<body>
    <h1> Insira um número para calcular seu quadrado e cubo.</h1>
    <form method = "POST"> 
        <label>Informe o número: </label>
        <input type="number" id= "numero" name="numero"/>
        <br><br>
        <button type="submit">Calcular</button>    
            <?php
            if(isset($_POST['numero'])) {
            $num1 = $_POST ['numero'];
          

            $resultado = $funcoes->calQuaCub($num1);
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['numero'])) {

            echo $resultado;
        }else{
            echo "Preencha o campo !";
        }
            ?>


</body>
</html>