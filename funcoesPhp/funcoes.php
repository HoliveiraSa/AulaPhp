<?php
    namespace projetoExercicios\funcoesPhp; // tudo vai ser feito aqui, como declaração de variaveis

    Class Funcoes{
        private float $num1; //variaveis privadas
        private float $num2;
        private mixed $resultado;
        private float $num3;
        private float $desconto;
       

        //criando um construtor = Instancia as variaveis -> Ceia as variaveis na memoria do servidor
        public function __construct (){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;

        } //fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed //pode retornar int ou double
        {

            return $this->dado;

        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
           
        }//fim do set
        
        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2;
            return $this->resultado;
        } //fim do metodo

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        } //fim do metodo

        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        } //fim do metodo

        public function dividirDoisNumeros(float $num1, float $num2){
            if ($num2 <= 0){
                return "Impossível divir por zero!";
            }else{
                
            $this->resultado = $num1 / $num2;
            return $this->resultado;
            }
        } //fim do metodo

        public function delta(int $a, int $b, int $c){
        $delta = pow($b,2) - 4 * $a * $c;
        return $delta;
        } //fim do bhaskara


        public function calcularX1X2(int $a, int $b, int $c){
            $del =$this->delta($a,$b,$c);
        if($del < 0){
            return "Impossível calcular X1 e X2,delta negativo!";
        }else{
                $x1 = (-$b + sqrt($del)) / 2 * $a;
                $x2 = (-$b - sqrt($del)) / 2 * $a;
            return "X1 = ".$x1." e X2 = ".$x2;

        }
        }//fim de bhaskara

        public function dobro (float $num1){
          $this->resultado = $num1 * 2;
          return $this->resultado;

        }//fim do metodo
        
        public function mediaDeTresNumeros(float $num1, float $num2, float $num3){
            $this->resultado = ($num1 + $num2 + $num3) / 3;
            return $this->resultado;

        }//fim do metodo

        
        public function raizQuadrada(float $num1){
            $this->resultado = (sqrt($num1));
            return $this->resultado;
        }//fim do metodo

        public function metroParaCentimetro(float $num1){
            $this->resultado = $num1 * 100;
            return $this->resultado;
        }//fim do metodo

        public function calculoCirculoComRaio (float $raio){
            $this->resultado = 3.14 * pow($raio,2);
            return $this->resultado;
        }//fim do metodo

        public function celciusParaFahrenheit(float $num1){
            $this->resultado = ($num1 * 1.8) + 32;
            
            return $this->resultado;
        }//fim do metodo

        public function descontoProduto (float $num1){ //quando vai ser criado a variavel dentro nao precisa ser mencionada
        $desconto = $num1 * 0.90;
        return $desconto;
        }//fim do metodo

        public function idadeParaMeses (float $num1){
            $this->resultado = $num1 * 12;
            return $this->resultado;
        }//fim do metodo
        
        public function numeroParImpar(float $num1){

            $this->resultado = $num1 % 2 == 0 ? "O número é par" : "O número é ímpar";
            return $this->resultado;
            
        }//fim do metodo

        public function areaTriangulo (float $num1, float $num2){
            $this->resultado = ($num1 * $num2) / 2;
            return $this->resultado;
        }//fim do metodo

        public function volumeCaixaRetangular (float $num1, float $num2, float $num3){
            $this->resultado = $num1 * $num2 * $num3;
            return $this->resultado;
        }//fim do metodo

        public function calQuaCub(float $num1){
            $this->resultado = "O quadrado do número é: ".pow($num1,2)." e o cubo do número é: ".pow($num1,3);
            return $this->resultado;
        }//fim do metodo
    
       public function impostoProduto (float $num1){ //quando vai ser criado a variavel dentro nao precisa ser mencionada
        $imposto = $num1 * 0.18;
        $num1 = $imposto + $num1;
        return $num1;
        }//fim do metodo
    
        public function velocidadeMedia(float $num1, float $num2){
            $this->resultado = $num1 / $num2;
            return $this->resultado;
        }//fim do metodo

        public function mediaAritmeticaDois(float $num1, float $num2){
            $this->resultado = ($num1 + $num2) / 2;
            return $this->resultado;
        }//fim do metodo

        public function tabuada(float $num){ //tabuada do 0 ao 10
            $msg= "";//no string pode guardar varias coisas dentro das aspas
            for($i = 0;$i <= 10;$i++){ //não precisa tipar pq o php ja ve o que ta sendo inserido, e o ++ pra ir adicionadno o numero
            $msg.= "<br>$num * $i = ".($num * $i); //.= repete a variavel msg, e o .= concatena a variavel msg com o que vem depois
            //nao pode por o return dentro do for
        //usar o return aqui e echo na tela 
            }
        return $msg;
        }//fim do metodo

        public function decimalBinario (float $decimal){

        $resultado ="";
        while ($decimal / 2 != 0 ) {
               $resultado .= " ".($decimal % 2);//coletando o resto da divisão
               $decimal = (int)$decimal/2;//contribuir para o criterio de parada

        }//fim do while
        return strrev($resultado);//inverte a string pq ele pega da direita pra esquerda

        }//fim do decimalBinario


        public function decimalHexadecimal (float $decimal){
        $valor = 0;
        $resultado ="";
        while ($decimal / 16 != 0 ) {
               $resto = $decimal % 16;//coletando o resto da divisão
               switch ($resto) {
                case 10:
                    $resultado = "A";
                    break;
                case 11:
                    $resultado = "B";
                    break;
                case 12:
                    $resultado = "C";
                    break;
                case 13:
                    $resultado = "D";
                    break;
                case 14:
                    $resultado = "E";
                    break;
                case 15:
                    $resultado = "F";
                    break;
                default:
                    $resultado .= $resto;

               }//fim do switch

               $decimal = (int)$decimal/16;//contribuir para o criterio de parada

        }//fim do while
        return strrev($resultado);//inverte a string pq ele pega da direita pra esquerda

        }//fim do decimalHexadecimal

        public function cadastroProduto(string $senha){
            $senhaBD = 1234;
            do{
                if ($senha != $senhaBD){
                    $msg = "Erro, digite novamente!";
            }else{
                $msg = "Bem-vindo!";
            } 

            } while($senhaBD != $senha);
            return $msg;

        }//fim do metodo

        public function horasTrabalhadas(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do metodo

        public function idadeParaDias(int $num1){
            $this->resultado = $num1 * 365;
            return $this->resultado;
        }

        public function tempoRestanteDeVida(int $num1){
            $anosRestantes = 100 - $num1;
            return $anosRestantes;
        }

          public function mediaAritmeticaTres(float $num1, float $num2, float $num3){
            $this->resultado = ($num1 + $num2 + $num3) / 3;
            return $this->resultado;
        }//fim do metodo

        //REPETIÇÃO------------------------------------------------------------
        
        public function contagemCrescente(int $num){

            if ($num <= 0) {
                return "Informe um número inteiro POSITIVO!";
            }
            else {
                $msg = "";
                for ($i = 1; $i <= $num; $i++) {
                    $msg .= "<br>" . $i;
                }
                return $msg;
            }
           
        }//fim do metodo

      
        public function contagemRegressiva(int $num1){
            
            if ($num1 <= 0) {
                return "Informe um número inteiro positivo!";
            }
            else {
                $msg = "";
                for ($i = $num1; $i >= 0; $i--) {
                    $msg .= "<br>" . $i;
                }
                return $msg;
            }
        }//fim do metodo

        public function somaDeNumeros(int $num1){
            if ($num1 <= 0) {
                return "Informe um número inteiro positivo!";
            }
            else {
                $soma = 0;
                for ($i = 1; $i <= $num1; $i++) {
                    $soma += $i;
                }
                return "A soma de todos os números inteiros de 1 até ".$num1." é: ".$soma;
            }
        }//fim do metodo

        public function multiplosDeUmNumero(int $num1){
            if ($num1 == 0) {
                return "O número zero não possui múltiplos entre 1 e 100!";
            }
            else {
                $msg = "<br>Múltiplos  entre 1 e 100 de: " . $num1 . "<br>";
                for ($i = 1; $i <= 100; $i++) {
                    if ($i % $num1 == 0) {
                        $msg .= $i . "<br>";
                    }
                }
                return $msg;
            }
        }//fim do metodo

        public function contarPares(int $num1, int $num2, int $num3, int $num4, int $num5, int $num6, int $num7, int $num8, int $num9, int $num10, int $num11, int $num12, int $num13, int $num14, int $num15, int $num16, int $num17, int $num18, int $num19, int $num20){
            $qtdPares = 0;

            for ($i = 1; $i <= 20; $i++) {
                $variavelAtual = "num" . $i; // monta o nome: n1, n2, n3... até n20
                if ($$variavelAtual % 2 == 0) {
                    $qtdPares++;
                }
            }


            return "Quantidade de números pares digitados: " . $qtdPares;
            

        }//fim do metodo
    
        public function tabuadaRep(int $num1){
            $msg = "<br>Tabuada do " . $num1 . ":<br>";
            for ($i = 1; $i <= 10; $i++) {
                $multiplicacao = $num1 * $i;
                $msg .= $num1 . " x " . $i . " = " . $multiplicacao . "<br>";
            }
            return $msg;
        }//fim do metodo

        public function calcularMedia(float $num1, float $num2, float $num3, float $num4, float $num5, float $num6, float $num7, float $num8){
            $soma = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8;
            $media = $soma / 8;

            if ($media >= 7) {
                return "A média do aluno é: " . $media . " - aprovado!";
            } else {
                return "A média do aluno é: " . $media . " - reprovado!";
            }
        }//fim do metodo







    }//fim da classe

    
?>