<?php
//código para establecer la conexión con MongoDB
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$databaseMongo = $mongoClient->ejemploMongo;
$collectionMongo = $databaseMongo->usuarios;

//Código para establecer la conexión con MySQL
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "ejemploSQL";

$connMySQL = new mysqli($servername, $username, $password, $dbname);

//Verificar la conexión a MySQL
if ($connMySQL->connect_error) {
    die("Error de conexión MySQL: " . $connMySQL->connect_error);
}

//Obtener los datos del formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    //verificar las credenciales en Mongodb
    $credencialesMongo = [
        "email" => $email,
        "contrasena" => $contrasena
    ];
    $resultadoMongo = $collectionMongo->findOne($credencialesMongo);

    //Verificar las credenciales en MySQL
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
    $result = $connMySQL->query($sql);

    if ($resultadoMongo !== null && $result->num_rows === 1) {
        //Inicio de sesión exitooso
        echo "Inicio de sesión exitoso";
    } else {
        //Credenciales inválidas
        echo "Credenciales inválidas";
    }
}
?>

