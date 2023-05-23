<!DOCTYPE html>
<html>
<head>
    <title>Archivos del Cliente</title>
</head>
<body>
    <h2>Archivos del Cliente</h2>

    <?php
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener el nombre de usuario desde la URL
    if(isset($_GET['username'])) {
        $username = $_GET['username'];

        // Consultar la base de datos para obtener los archivos del cliente
        $sql = "SELECT * FROM archivos WHERE destino='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los archivos del cliente
            while ($row = $result->fetch_assoc()) {
                $nombreArchivo = $row['name'];
                $descripcion = $row['description'];
                $rutaArchivo = $row['ruta'];

                echo "<p>Nombre de archivo: $nombreArchivo</p>";
                echo "<p>Descripción: $descripcion</p>";
                echo "<a href='$rutaArchivo' download>Descargar</a>";
                echo "<hr>";
            }
        } else {
            // El cliente no tiene archivos
            echo "No tiene archivos.";
        }
    } else {
        // Redireccionar a login_clientes.php
        echo '<meta http-equiv="refresh" content="0;url=clientes_login.php">';
        exit();
    }

    $conn->close();
    ?>
</body>
</html>
