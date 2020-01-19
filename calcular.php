<?php 
//Valido que si haya presionado el botón desde el index.php
if(isset($_POST["btncalcular"])){
    //LLamo el archivo de la clase
    require_once 'Fibonacci.php';

    //Realizo la instacia de la clase Fibonacci
    $fibonacci = new Fibonacci();

    //Recupero valor que viene de index.php
    $valor = $_POST["txtvalor"];

    //Entrego el valor al atributo de la clase Fibonacci
    $fibonacci->setValorSerie($valor);

    //Traigo el cálculo desde la clase Fibonacci
    $fibonacci->fibonacciHacerMientras();

    echo "<br>";

    $fibonacci->fibonacciMientras();

    echo "<br>";

    $fibonacci->fibonacciPara();

}else{
    echo "No me hackees";
}
?>