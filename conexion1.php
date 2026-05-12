<?php
$conexion = pg_connect("host=localhost dbname=datos user=postgres password=postgres");


if(!$conexion){

echo "error de conexion";

}
else {echo "la conexion ha cido exitosa ";}
?>
