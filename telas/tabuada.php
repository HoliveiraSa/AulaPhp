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
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form method="post">
        <label for="numero">Informe um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar</button>
        <?php
            if(isset($_POST['numero'])) {
                $num = $_POST['numero'];
                $resultado = $funcoes->tabuada($num); //usando o metodo
            }

        ?>

        </button>
    </form>

    <?php
        if (isset($_POST['numero'])) {
          echo $resultado;
        } else {
            echo "Preencha o campo!";
        }
    ?>
</body>
</html>