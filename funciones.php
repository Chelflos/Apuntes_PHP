<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

//funciones sin parámetros
        function saludo() {
            echo 'Hola<br>'; //“echo” es una de las formas que tiene PHP de devolver al navegador los datos que procesa
            //con <br> hacemos salto de línea
        }

//función nombre de la función saludo (entre los paréntesis vendría las variables){tarea que ejecutaremos}
        //Observamos que el echo está dentro de la tarea
        saludo(); //ejecutamos la función llamando el nombre de la función saludos()

//funciones con parámetros
        function llegada($Bienvenidos) {
            echo $Bienvenidos . "<br>"; //“echo” es una de las formas que tiene PHP de devolver al navegador los datos que procesa
            //para salto de línea también podemos poner $Bienvenidos."<br>"
        }

//función nombre de la función saludo (entre los paréntesis vendría la variables $Bienvenida){tarea que ejecutaremos}
        //Observamos que el echo está dentro de la tarea
        llegada("Bienvenidos campeones"); //ejecutamos la función llamando el nombre de la función llegada(con lo que deseemos decir)
//funciones con retorno

        function retorno($retornar) {
            return $retornar; //solicitamos que realice un retorno con return de la variable del parámetro $retornar
        }

//función nombre de la función saludo (entre los paréntesis vendría la variables $Bienvenida){tarea que ejecutaremos}
        //Observamos que el echo está fuera de la tarea
        echo retorno("retornando"); //Solicitamos que nos ejecute la función llamando retorno y en la variable del parametro ("retornando")
//Hemos visto tres formas de funciones (Sin parámetros, con parámetros, con retorno)
//Su gran utilidad es para programación orientada por objetos
        ?>
    </body>
</html>
