<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        //funciones sin parámetros
        // function + nombre de la función (Variables) + {Tareas a ejecutar}
        function saludo(){
            echo 'hola<br>';
            //echo es una de las maneras que tiene php de devolver al navegador los datos que procesa
            //<br> es un salto de linea
        }           
        saludo();//Se ejecuta la función.


        //Funciones con parámetros
        // function + nombre de la función (Variables) + {Tareas a ejecutar}

        function llegada($Bienvenidos){
            echo $Bienvenidos."<br>";            
        }
        llegada("Bienvenidos!"); //Se ejecuta la funcion(entre parentesis el valor que queramos dar a la variable)

        //Funciones con retorno
        //function + nombre de la función (Variables) + {return + Tareas a ejecutar}
        function retorno ($retornar){
            return $retornar
            }
        echo retorno("retornando"); //Se solicita que una funcion echo ejecute la funcion retorno(entre parentesis el valor de la variable)
        ?>
    </body>
</html>
