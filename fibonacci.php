<?php

function fibonacciSeries($n){
    $num1 = 0;
    $num2 = 1;
  
      for ( $i = 0; $i < $n; $i++ ) {
        echo $num1 . ", ";
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
    }
}


$n = 20;
echo "Fibonacci Series of $n is : ";  
fibonacciSeries($n);

?>