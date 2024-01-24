<?php
$servername = "localhost";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbName = "MYSQL_DATABASE_NAME";

try {
    // Agregar código de verificación
    echo "Intentando conectar...<br>";
    echo "Usuario: " . $username . "<br>";
    echo "Contraseña: " . $password . "<br>";
    echo "Base de Datos: " . $dbName . "<br>";

    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $username, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    echo "Conexión exitosa.<br>";

    // Resto de tu código...

} catch (PDOException $e) {
    // Manejo de errores de conexión
    echo "Error de conexión PDO: " . $e->getMessage() . "<br>";
    echo "<pre>";
    print_r($e);
    echo "</pre>";
    die(); // O realiza cualquier otra acción necesaria en caso de error
}


