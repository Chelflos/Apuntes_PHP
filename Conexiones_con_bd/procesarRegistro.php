<?php
//Código para estableceer la conexión con MongoDB
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$mongoDatabase = $mongoClient->ejemploMongo;
$mongoCollection = $mongoDatabase->usuarios;

//Código para establecer la conexion con MySQL
$mysqlConn = new mysqli("localhost", "usuario", "contraseña", "ejemploSQL");

//Verificar la conexión a MySQL
if ($mysqlConn->connect_error) {
    die("Error de conexión a MySQL: " . $mysqlConn->connect_error);
}

//Obtener los datos del formulario de registro
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    //Verificar si todos los campos están completos
    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($contrasena)) {
        // Insertar los datos en MongoDB
        $registroMongo = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "email" => $email,
            "contrasena" => $contrasena
        ];
        $mongoCollection->insertOne($registroMongo);

        //Insertar los datos en MySQL
        $sql = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$contrasena')";
        if ($mysqlConn->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error en el registro: " . $mysqlConn->error;
        }

        //Cerrar la conexión a MySQL
        $mysqlConn->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
