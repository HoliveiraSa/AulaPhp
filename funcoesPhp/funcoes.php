<?php
    namespace projetoExercicios\funcoesPhp; // tudo vai ser feito aqui, como declaração de variaveis

    Class Funcoes{
        private float $num1; //variaveis privadas
        private float $num2;
        private float $resultado;
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

        public function idadeEmMeses )
        

    }//fim da classe
    



?>
