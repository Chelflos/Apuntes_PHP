<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            $a=5;
            $b=10;
            if($a>$b){
                echo 'a es mayor que b';
                
            }else if($a==$b){
                echo 'a es igual a b';
            }
            else{
                echo 'a es menor que b';
            }
            echo '<br><br>';

            $dia='lunes';//segun cambiemos el dia cambiara el caso
            switch($dia){
                case 'viernes':
                echo'Voy al entrenamiento';
                    break;
                case 'sabado':
                    echo 'Voy al partido de futbol';
                    break;
                case 'domingo':
                    echo 'Voy a casa de mi abuela';
                    break;

                default: echo 'Voy al centro de estudios Tajamar';
            }
            echo,<br></br>;

            $ n =1;
            while($n<5){
                echo $n;
                $n++;
            }
            echo '<br><br';
            $n=1;

            while($n <=5){
                echo $n;
                $n++;
            }

            echo '<br><br>';

            $n =1;

            while ($n<5){

                $n++;
                $n=1;
                echo $n;
            }
            echo '<br><br>';

            $n = 1;

            do{
                echo $n;
                $n++;
            }while ($n <=5);
            echo '<br><br>';

            for ($i = 1; $i<=5; $i++){
                echo$i;
            }
            ?>            

    </body>
</html>