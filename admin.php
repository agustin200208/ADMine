<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos y Usuarios</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #33a8db;
            margin-top: 30px;
        }

        .section {
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .section-header {
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    $host = "";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if (isset($_POST['submitArchivos'])) {
        // Subir archivo
        $nombre = $_POST['nombre'];
        $destino = $_POST['destino'];
        $descripcion = $_POST['descripcion'];
        $ruta = "upload/";
        $nombreArchivo = $_FILES['fichero']['name'];
        $tipoArchivo = $_FILES['fichero']['type'];
        $tamanoArchivo = $_FILES['fichero']['size'];
        $archivoTemporal = $_FILES['fichero']['tmp_name'];
        $rutaCompleta = $ruta . $nombreArchivo;

        // Crear el directorio "upload/" si no existe
        if (!is_dir($ruta)) {
            mkdir($ruta, 0777, true);
        }

        if (move_uploaded_file($archivoTemporal, $rutaCompleta)) {
            $sql = "INSERT INTO archivos (name, destino, description, ruta, tipo, size)
                    VALUES ('$nombre', '$destino', '$descripcion', '$rutaCompleta', '$tipoArchivo', '$tamanoArchivo')";

            if ($conn->query($sql) === true) {
                echo "El archivo se ha subido con éxito y se ha registrado en la base de datos.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error al subir el archivo.";
        }
    }

    if (isset($_POST['submitUsuarios'])) {
        // Subir usuario
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sqlUsuarios = "INSERT INTO usuarios (username, password, role)
                        VALUES ('$username', '$password', '$role')";

        if ($conn->query($sqlUsuarios) === true) {
            echo "Los datos del usuario se han registrado en la base de datos.";
        } else {
            echo "Error: " . $sqlUsuarios . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['submitMostrarArchivos'])) {
        // Mostrar archivos por usuario
        $usernameMostrar = $_POST['usernameMostrar'];

        $sqlMostrar = "SELECT * FROM archivos WHERE destino = '$usernameMostrar'";
        $resultMostrar = $conn->query($sqlMostrar);

        if ($resultMostrar->num_rows > 0) {
            echo "<h2>Archivos de $usernameMostrar:</h2>";
            while ($row = $resultMostrar->fetch_assoc()) {
                $nombreArchivo = $row['name'];
                $descripcion = $row['description'];
                $rutaArchivo = $row['ruta'];

                echo "<p><strong>Nombre:</strong> $nombreArchivo</p>";
                echo "<p><strong>Descripción:</strong> $descripcion</p>";
                echo "<p><a href='$rutaArchivo' download>Descargar</a></p>";
                echo "<hr>";
            }
        } else {
            echo "No se encontraron archivos para el usuario $usernameMostrar.";
        }
    }
    ?>

    <h1>Subir Archivos y Usuarios</h1>

    <div class="section">
        <div class="section-header">
            <h2>Subir Archivo</h2>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <label for="fichero">Seleccione archivo:</label>
            <input type="file" name="fichero" id="fichero">
            <br><br>
            <label for="nombre">Nombre archivo:</label>
            <input type="text" name="nombre" id="nombre">
            <br><br>
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion">
            <br><br>
            <label for="destino">Mail de usuario:</label>
            <input type="text" name="destino" id="destino">
            <br><br>
            <input type="submit" name="submitArchivos" value="Subir Archivo">
        </form>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>Subir Usuario</h2>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
            <br><br>
            <label for="role">Rol:</label>
            <input type="text" name="role" id="role">
            <br><br>
            <input type="submit" name="submitUsuarios" value="Subir Usuario">
        </form>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>Mostrar Archivos por Usuario</h2>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="usernameMostrar">Nombre de usuario:</label>
            <input type="text" name="usernameMostrar" id="usernameMostrar">
            <br><br>
            <input type="submit" name="submitMostrarArchivos" value="Mostrar Archivos">
        </form>
    </div>
</body>
</html>
