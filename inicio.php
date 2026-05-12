<?php 
include('conexion.php'); 

$sql = "SELECT * FROM empleados"; 
$result = pg_query($conexion, $sql); 

echo "<table border='2'>";
echo "<tr>";
echo "<th>Código</th>";
echo "<th>Nombre</th>";
echo "<th>edad</th>";
echo "<th>sexo</th>";
echo "<th>basico</th>";
echo "<th>estado</th>";
echo "<th>fecha de ingreso</th>";
echo "<th>telefono</th>";
echo "<th>cod_ciud</th>";

echo "</tr>";

while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){ 
	echo "<tr>";
	echo "<td>".$row['id']."</td>"; 
	echo "<td>".$row['nomb_emp']."</td>"; 
	echo "<td>".$row['edad']."</td>";
	echo "<td>".$row['sexo']."</td>";
	echo "<td>".$row['basico']."</td>";
	echo "<td>".$row['estado']."</td>";
	echo "<td>".$row['fecha_ingreso']."</td>";
	echo "<td>".$row['telefono']."</td>";
	echo "<td>".$row['cod_ciud']."</td>";
	echo "</tr>";
} 

echo "</table>";


$sql1 = "SELECT * FROM ciudades"; 
$result1 = pg_query($conexion, $sql1); 

echo "<table border='2'>";
echo "<tr>";
echo "<th>Código</th>";
echo "<th>Nombre</th>";


echo "</tr>";

while($row = pg_fetch_array($result1, NULL, PGSQL_ASSOC)){ 
	echo "<tr>";
	echo "<td>".$row['cod_ciud']."</td>"; 
	echo "<td>".$row['nomb_ciud']."</td>"; 
	echo "</tr>";
} 

echo "</table>";
?>