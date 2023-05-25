<?php                                    //CARLOS TENAJAS
$nombre=$_POST['nombre'];               
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];
$localidad=$_POST['localidad'];


if(!empty($nombre) || !empty($apellido)|| !empty($telefono) || !empty($mail) || !empty($direccion) || !empty($localidad)){      //Verifica si se han rellenado los campos,en caso contrario, lanza una advertrencia
    $host = "localhost";        
    $dbusername = "root";       //Nombre de usuario
    $dbpassword = "";           //Contraseña
    $dbname ="formulario";      //Nombre de la base de datos

    $conexion = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('Error de conexión('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT telefono from examen where telefono =? limit 1";
        $INSERT = "INSERT INTO examen(nombre,apellido,telefono,mail,direccion,localidad) values(?,?,?,?,?,?)";

        $stmt = $conexion->prepare($SELECT);
        $stmt -> bind_param("i",$telefono);
        $stmt ->execute();
        $stmt ->bind_result($telefono);
        $stmt ->store_result();
        $apilar = $stmt->num_rows;
        if($apilar == 0){
            $stmt ->close();
            $stmt = $conexion->prepare($INSERT);
            $stmt ->bind_param("ssisss", $nombre,$apellido,$telefono,$mail,$direccion,$localidad);
            $stmt ->execute();
            echo "REGISTRO COMPLETADO CON ÉXITO.<br>";
        }else{echo "Número ya registrado.";}
    }
    $stmt->close();
    $conexion->close();
}else{
    echo "Debes rellenar todos los campos";
}
echo "<br>Los datos introducidos son: <br>";
echo "$nombre,$apellido,$telefono,$mail,$direccion y $localidad.";
?>