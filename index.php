<h1>Hola mundo.</h1>

<br>
<?php
    $saludo = "Hola Mundo.";
    Echo $saludo;
?>
<br>

<?php
    $num1 = 23;
    $num2 = 15  ;
    Echo "La suma entre ",$num1," y ",$num2," es: ",$num1 + $num2;
?>
<br>
<?php
    Echo "La resta entre ",$num1," y ",$num2," es: ",$num1 - $num2;
?>
<br>
<?php
    Echo "El producto de ",$num1," por ",$num2," es: ",$num1 * $num2;
?>
<br>
<?php
    Echo "El valor entero de la división entre ", $num1, " y ", $num2, " es: ",intval($num1 / $num2);
?>
<br>

<?php
    Echo "El resto de la división entre ", $num1, " y ", $num2, " es: ",$num1 % $num2;
?>
<br>

<?php
    $celsius = 20;
    Echo $celsius," grados celsius equivalen a ",$celsius * 1.8 + 32," grados fahrenheit.";
?>
<br>

<?php
    $base = 18;
    $altura = 12;
    $radio = 30;
    Echo "El área de un rectángulo de base ", $base, "cm. y altura ", $altura, "cm. es: ",$base * $altura,"cm2, es decir, ",($base * $altura)/100,"m2.";
?>
<br>
<?php
    Echo "El perímetro de un rectángulo de base ", $base, "cm. y altura ", $altura, "cm. es: ",($base + $altura)*2,"cm.";
?>
<br>
<?php
    Echo "El área de un círculo de radio ",$radio,"cm es: ",3.14 * $radio*$radio,"cm2, es decir, ", (3.14*$radio*$radio)/100,"m2.";
?>
<br>
<?php
    Echo "El perímetro de un círculo de radio ",$radio,"cm es: ",3.14 * $radio * 2,"cm.";
?>