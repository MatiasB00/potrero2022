<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo práctico 4</title>
</head>
<body>
    <h1>Estructuras de control: parte 2</h1>

    <?php
        print "Numeros del 1 al 100: ";
        echo "<br>";
        for ($i = 1; $i<101; $i++) {
            echo $i," ";
        }
        echo "<br>";
        print "Numeros del 100 al 1: ";
        echo "<br>";
        for ($i = 100; $i>0; $i--) {
            echo $i," ";
        }
        echo "<br>";
        print "Numeros pares del 1 al 100: ";
        echo "<br>";
        for ($i = 0; $i<101; $i = $i+2) {
            echo $i," ";
        }
        echo "<br>";
        print "Numeros impares del 1 al 100: ";
        echo "<br>";
        for ($i = 1; $i<101; $i = $i+2) {
            echo $i," ";
        }
        echo "<br>";
        print "La suma de los numeros del 1 al 20: ";
        echo "<br>";
        $suma = 0;
        for ($i = 1; $i<21; $i++) {
            $suma += $i;
        }
        print $suma;
        echo "<br>";
        print "La suma de los numeros impares del 1 al 20: ";
        echo "<br>";
        $suma_impar = 0;
        for ($i =1; $i<21; $i += 2){
            $suma_impar += $i;
        }
        echo $suma_impar;
    ?>
</body>
</html>