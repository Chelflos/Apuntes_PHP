<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO1</title>
    </head>
    <body>
        <?php
/*LAS CONDICIONES pedirles a las funciones la ejecute dependiendo de una condición. ejemplo: cuando yo voy a trabajar antes realizo una serie 
de tareas....*/
 
        $a = 15;
        $b = 10;
        if ($a > $b) {  //if=si
            echo 'a es mayor que b'; //“echo” es una de las formas que tiene PHP de devolver al navegador los datos que procesa
        } else if ($a == $b) {//y también
            echo 'a es igual a b';
        }
// else si no se cumple ninguna de las anteriores condiciones, que se cumpla:
        else {
            echo 'a es menor que b';
        }
        echo '<br><br>'; // Realizo unos saltos de línea
        
        
//LOS SWITCH, que son los swiches
        $dia = 'gato'; //según cambiemos el día cambiara el caso
        
        /*La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera 
         comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que 
         valor es igual. Para esto es exactamente la expresión switch.*/
        
        switch ($dia) {
            case 'viernes':
                echo 'voy al entrenamiento';
                break;
            case 'sabado':
                echo 'voy al partido de futbol';
                break;
            case 'domingo':
                echo 'voy a casa de mi abuela';
                break;
            default : echo 'voy al centro de estudios CES';
        }
        echo '<br><br>'; // Realizo unos saltos de línea
        //
//---------------------------------------------------------------------------------
//LOS CICLOS, nos sirven para incrementar un valor
        
        $n = 0;
        //while, este ciclo permite que pueda dar una condición
        while ($n < 5) {//si n es menor a 5, entonces se incremente $n++
            echo $n;
            $n++; //n, se irá incrementando hasta llegar a 5
        }
        echo '<br><br>'; // Realizo unos saltos de línea
        
//---------------------------------------------------------------------------------  
        $n = 0;
        //while, este ciclo permite que pueda dar una condición
        while ($n <= 5) {//si n es menor o igual a 5, entonces se incremente $n++
            echo $n;
            $n++; //n, se irá incrementando hasta llegar a 5
        }
        echo '<br><br>'; // Realizo unos saltos de línea
        
        
//-----------------------------------------------------------------------------------      
        //Para el caso anterior si cambiamos el orden de echo, empezara por 2 hasta llegar a 5
        $n = 1;
        //while, este ciclo permite que pueda dar una condición
        while ($n < 5) {//si n es menor a 5, entonces se incremente $n++
            $n++; //n, se irá incrementando hasta llegar a 5, empezando por el valor 1 $n=1. Es decir 2 3 4 5
            echo $n;
        }
        echo '<br><br>'; // Realizo unos saltos de línea 
           
//--------------------------------------------------------------------------------------       
//LOS CICLOS DO WHILE
        $n = 0;
        do {//do = haz lo siguiente
            echo $n;
            $n++; //n, se irá incrementando hasta llegar a 5
        } while ($n <= 5);
        echo '<br><br>'; // Realizo unos saltos de línea  
//LOS CICLOS FOR
        for ($i = 0; $i <= 5; $i++) {
            echo $i;
        }//Colocamos dentro del método for una variable $i con valor que inicio a de cero
        // posteriormente decimos mientras la variable $i sea menor o igual que 5
        // entonces incrementa el inicio hasta llegar a 5
        ?>
    </body>
</html>