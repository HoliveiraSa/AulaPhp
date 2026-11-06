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
    <title>6.  Calcule a área de um círculo com base no raio. </title>
</head>
<body>
    <h1>Informe um raio para calcular a área do círculo: </h1>
    <form method = "POST"> 
        <label>Informe o raio: </label>
        <input type="number" id= "raio" name="raio"/>
        <br><br>
        <button type="submit">Calcular Área</button>    
            <?php
            if(isset($_POST['raio'])) {
            $num1 = $_POST ['raio'];
          

            $resultado = $funcoes->calculoCirculoComRaio($num1);
            }
        ?>
         </button> 
        </form>
        <?php
            if (isset($_POST['raio'])) {

            echo "A área do círculo é: ".$resultado;
        }else{
            echo "Preencha o campo !";
        }
            ?>
    
</body>
</html>