<?php
session_start();
include("conexion.php");

// validar sesión
if (!isset($_SESSION['docente'])) {
    header("Location: login.php");
    exit();
}

$docente = $_SESSION['docente'];

// CONSULTA: SOLO cursos del docente
$sql = "SELECT * FROM cursos WHERE cod_doc = $docente";
$res = pg_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Notas</title>
    <style>
        body{
            background:#e5e7eb;
            font-family: Arial;
        }
        .card{
            width:400px;
            margin:100px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0px 5px 15px rgba(0,0,0,0.2);
            text-align:center;
        }
        select, input{
            width:100%;
            padding:10px;
            margin:10px 0;
        }
        button{
            background:#4f46e5;
            color:white;
            border:none;
            padding:10px;
            width:100%;
            border-radius:5px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>📘 Sistema de Notas</h2>

    <form action="menu.php" method="GET">
        
        <!-- CURSOS -->
        <select name="cod_cur" required>
            <option value="">Seleccione Curso</option>

            <?php
            while ($row = pg_fetch_assoc($res)) {
                echo "<option value='".$row['cod_cur']."'>".$row['nomb_cur']."</option>";
            }
            ?>

        </select>

        <!-- AÑO -->
        <input type="number" name="year" placeholder="Año" required>

        <!-- PERIODO -->
        <div>
            <label><input type="radio" name="periodo" value="1" required> Periodo I</label>
            <label><input type="radio" name="periodo" value="2"> Periodo II</label>
        </div>

        <button type="submit">Continuar</button>
    </form>
</div>

</body>
</html>