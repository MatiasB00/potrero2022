<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP N° 4.</title>
</head>
<body>
    <h1>TP N° 4 - Arrays.</h1>
    
    
    <h2>Los primeros 10 números pares, dentro de un array.</h2>
    <?php
        $pares10 = [];

        for($i=0;$i<=20;$i+=2)
        {
            $pares10[] = $i;
            print $pares10[$i/2];
            print "\n - ";
        }
        echo "<br>";    
        print_r($pares10);
    ?>



    <h2>Crear un array y mostrarlo por pantalla con el comando print_r.</h2>
    <?php
        $ejercicio2 = ["Pedro","Ana",34,1];
        print_r($ejercicio2);
    ?>



    <h2>Crear un array asociativo con los siguientes valores: </h2>
    <?php
        $ejercicio3 = ['Nombre'=>"Pedro",'Apellido'=>"Torres",'Direccion'=>"Av. Mayor 3703",'Telefono'=>1122334455];
        print_r($ejercicio3);
    ?>




    <h2>Crear un array con nombres de ciudades, y mostrar el contenido de este.</h2>
    <?php
        $ciudades = ["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
        for($i=0;$i<count($ciudades);$i++)
        {
            echo "La ciudad con índice ",$i," tiene el nombre ",$ciudades[$i],".<br>";
        }
    ?>



    <h2>Crear un array asociativo con nombres de ciudades, y mostrar el contenido de este.</h2>
    <?php
        $ciudadesAsoc = ['MD'=>"Madrid",'BCL'=>"Barcelona",'LD'=>"Londres",'NY'=>"New York",'LA'=>"Los ángeles",'CCG'=>"Chicago"];
        foreach($ciudadesAsoc as $indice=>$valor)
        {
            echo "El índice de ",$valor," es ",$indice,".<br>";
        }
    ?>


</body>
</html>