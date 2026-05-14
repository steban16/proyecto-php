<?php
session_start();
include("conexion.php");

if ($_POST) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = "SELECT * FROM docentes WHERE nomb_doc='$usuario' AND clave='$clave'";
    $res = pg_query($conn, $sql);

    if (pg_num_rows($res) > 0) {
        $row = pg_fetch_assoc($res);
        $_SESSION['docente'] = $row['cod_doc'];
        header("Location: index.php");
    } else {
        $error = "Datos incorrectos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Docente</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f') no-repeat center center fixed;
            background-size: cover;
        }

        .login-box {
            width: 350px;
            margin: 120px auto;
            background: rgba(0,0,0,0.85);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            color: white;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: none;
        }

        button {
            width: 95%;
            padding: 10px;
            background: purple;
            color: white;
            border: none;
            border-radius: 5px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>🔐 Login Docente</h2>

    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="clave" placeholder="Contraseña" required>
        <button type="submit">fberbe</button>
    </form>
</div>

</body>
</html>
