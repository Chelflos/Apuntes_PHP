<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "UTF-8">
        <title>            
        </title>
    </head>
    <body>
        <?php

        //Variable numérica
        $numero = 5;
        echo 'Esto es una variable número: $numero<br>';         
        var_dump($numero);//Ayuda a identificar errores, y a las variables que estamos llamando a través de php
        
        echo "<br><br>";

        //Variable texto
        $palabra = "palabra";
        echo 'Esto es una variable texto: $palabra<br>';
        var_dump($palabra);

        echo "<br><br>";

        //Variable booleana
        $boleana = true;
        echo 'Esto es una variable booleana: $boleana<br>';
        var_dump($boleana);

        echo "<br><br>";

        //Variable array
        $colores = array("rojo","amarillo");
        echo 'Esto es una variable array: $colores[1]<br>';
        var_dump($colores);

        echo "<br><br>";

        //Variable array con propiedades
        $verduras = array("verduras1"=>"lechuga","verduras2"=>"cebolla");
        echo 'Esto es una variable array con propiedades: $verduras[verdura]<br>';
        var_dump($verduras);

        echo"<br><br>";

        //Variable objeto
        $frutas = (object)["fruta1"=>"manzana","fruta2"=>"melón"];
        echo 'Esto es una variable objeto: $frutas=>fruta1<br>';
        var_dump($frutas);

        echo "<br><br>";        
        ?>
    </body>
</html>