<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #33a8db;
            margin-top: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            color: #555;
            background-color: #f2f2f2;
        }

        input[type="submit"] {
            background-color: #33a8db;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2c87ad;
        }

        a {
            display: block;
            margin-top: 20px;
            color: #33a8db;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
        }

        table {
            border-collapse: collapse;
        }

        form label {
            font-size: 24px;
            font-weight: bold;
            color: #555;
            margin-bottom: 20px;
        }

        .bad {
            text-align: center;
            color: red;
        }
    </style>
<body>
    <h2>Iniciar sesión</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Iniciar sesión">
    </form>

    <?php
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos ingresados por el usuario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Consultar la base de datos para verificar las credenciales
        $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Inicio de sesión exitoso
            $row = $result->fetch_assoc();
            $role = $row['role'];

            // Redireccionar según el rol del usuario
            if ($role == 'admin') {
                header("location:admin.php?username=$username");
                exit();
            } else if ($role == 'cliente') {
                header("location:cliente.php?username=$username");
                exit();
            } else {
                echo "Rol desconocido";
            }
        } else {
            // Credenciales incorrectas
            echo "Usuario o contraseña incorrectos";
        }
    }

    $conn->close();
    ?>
</body>
</html>
