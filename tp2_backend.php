<h1>Trabajo práctico Nro. 2.</h1>
<?php
    $n = -4;
    $numero1 = 9;
    $numero2 = -6;
    echo "La variable es: ",$n,"<br>";
    if ($n < 0) {
        echo "La variable es negativa.";
    }
    else {
        echo "La variable es positiva.";
    }
    echo "<br>";
    if ($n < 10 and $n > 1) {
        echo "la variable es mayor a 1 y menor que 10.", "<br>";
    }
    if ($n > 10 or $n < 2) {
        echo "La variable es mayor que 10 o menor que 2.","<br>";
    }
    echo "Variable nro. 1: ",$numero1,"<br>","Variable nro. 2: ",$numero2,"<br>";
    if ($numero1 > $numero2) {
        echo $numero1," es mayor que ",$numero2,".<br>
        La suma de estos da como resultado ",$numero1+$numero2,".<br>
        La resta de estos dos da como resultado: ",$numero1-$numero2,".<br>";
    }
    else if ($numero1 < $numero2) {
        echo $numero1," es menor que ",$numero2,".<br>
        El producto de estos da como resultado: ",$numero1*$numero2,".<br>
        La división entera de estos números da como resultado: ",intval($numero1/$numero2),".<br>
        El resto de esta división es: ",$numero1 % $numero2,".<br>";
    }
    else {
        echo "Los números ingresados son iguales.";
    }
?>