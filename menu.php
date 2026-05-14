<?php
$cod_cur = $_GET['cod_cur'];
$year = $_GET['year'];
$periodo = $_GET['periodo'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menú</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: #eef2f7;
        }
        .box {
            margin-top: 80px;
        }
        a {
            display: block;
            margin: 15px;
            font-size: 18px;
            text-decoration: none;
            color: white;
            background: #28a745;
            padding: 10px;
            width: 250px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
        }
    </style>
</head>

<div class="box">
    <h2>📚 Menú del Curso</h2>

    <a href="inscribir.php?cod_cur=<?php echo $cod_cur ?>&year=<?php echo $year ?>&periodo=<?php echo $periodo ?>">Inscribir Estudiantes</a>

    <a href="notas.php?cod_cur=<?php echo $cod_cur ?>&year=<?php echo $year ?>&periodo=<?php echo $periodo ?>">Registrar Notas</a>

    <a href="reporte.php?cod_cur=<?php echo $cod_cur ?>&year=<?php echo $year ?>&periodo=<?php echo $periodo ?>">Ver Reporte</a>
</div>

</body>
</html>