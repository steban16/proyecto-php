<?php
$host = "localhost";
$port = "5432";
$dbname = "proyecto";
$user = "postgres";
$password = "postgres"; // <-- cámbialo

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Error de conexión a la base de datos";
} else {
    echo "Conexión exitoswdwa";
}
?>