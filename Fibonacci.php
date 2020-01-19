<?php 

class Fibonacci{

    private $valorSerie;

    public function __construct(){
        $this->valorSerie=0;
    }

    public function getValorSerie(){
        return $this->valorSerie;
    }

    public function setValorSerie($valor){
        $this->valorSerie = $valor;
    }

    public function fibonacciHacerMientras(){
        $cont = 0;
        $p = 0;
        $f = 1;

        do{
            echo $p. " ";
            $a = $p + $f;
            $p = $f;
            $f = $a;
            $cont++;
        }while($cont < $this->getValorSerie());

    }


    public function fibonacciMientras(){
        $cont = 0;
        $p = 0;
        $f = 1;

        while($cont < $this->getValorSerie()){
            echo $p. " ";
            $a = $p + $f;
            $p = $f;
            $f = $a;
            $cont++;
        }

    }

    public function fibonacciPara(){
        $a = 0;
        $b = 1;

        for($i=1; $i<=$this->getValorSerie(); $i++){
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }
}


?>