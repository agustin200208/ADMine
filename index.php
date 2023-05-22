<!DOCTYPE html>
<html>
<head>
    <title>Empresa ADMind - Página de inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* Blanco */
        }
    
        :root {
            --color-primario: #3E7BBA; /* Azul */
            --color-secundario: #FBBB00; /* Amarillo */
            --color-terciario: #34A853; /* Verde */
        }
    
        header {
            background-color: var(--color-primario);
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Alinea los elementos al extremo derecho y izquierdo */
        }
    
        header img {
            width: 200px;
            height: 40px;
            margin-right: 10px;
        }
    
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }
    
        nav ul li {
            display: inline-block;
            margin-left: 10px;
        }
    
        nav ul li a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
    
        nav ul li a:hover {
            background-color: var(--color-secundario);
            border-radius: 3px;
        }
    
        section {
            padding: 20px;
            border-bottom: 1px solid var(--color-primario); /* Línea inferior con el color primario */
        }
    
        h2 {
            color: var(--color-primario);
        }
    
        footer {
            background-color: var(--color-primario);
            color: #fff; /* Blanco */
            padding: 10px;
            text-align: center;
        }
    
        /* Estilos del pie de página */
        .contacto {
            color: #fff;
            margin-top: 20px;
        }
    
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }
    
        .float:hover {
            text-decoration: none;
            color: #FFF;
            background-color: #1ab152;
            animation: shake 1s;
            animation-iteration-count: infinite;
        }
    
        .my-float {
            margin-top: 16px;
        }
    
        section#Envianos-consulta label {
        display: block;
        margin-bottom: 10px;
        color: var(--color-primario);
        font-weight: bold;
        font-size: 14px;
    }
    section#Envianos-consulta input[type="text"],
    section#Envianos-consulta input[type="email"],
    section#Envianos-consulta input[type="tel"] {
        flex: 1;
        margin-right: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    section#Envianos-consulta textarea {
        width: 30%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }

    section#Envianos-consulta input[type="submit"] {
        background-color: var(--color-primario);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    section#Envianos-consulta input[type="submit"]:hover {
        background-color: var(--color-secundario);
    }

    section#Envianos-consulta h2 {
        text-align: center;
    }
    .datalist-style {
    width: 30%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    section#Envianos-consulta input[type="text"],
    section#Envianos-consulta input[type="email"],
    section#Envianos-consulta input[type="tel"],
    section#Envianos-consulta textarea {
        background-color: #393E40;
        color: #fff; /* Texto en blanco */
    }
    section#Envianos-consulta input[list="opciones"]::-webkit-calendar-picker-indicator {
        filter: invert(100%); /* Invierte los colores del ícono del selector de fecha */
    }

    section#Envianos-consulta .datalist-style {
        background-color: #393E40; /* Fondo negro */
        color: #fff; /* Texto en blanco */
        /* Resto de los estilos */
    }
    #btn-scroll-top {
    display: block;
    position: fixed;
    bottom: 20px;
    left: 20px; /* Cambiamos la posición a la parte derecha */
    background-color: transparent;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 60px; /* Aumentamos el ancho del botón */
    height: 60px; /* Aumentamos la altura del botón */
    font-size: 30px; /* Aumentamos el tamaño de la fuente del icono */
    text-align: center;
    line-height: 60px; /* Ajustamos el espacio para centrar verticalmente el icono */
    cursor: pointer;
    z-index: 9999;
}


    </style>
    
</head>
<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+5491169339031&text=Hola, me gustaria obtener más información sobre:" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float "></i>
    </a>
    <header>
    <img src="Logo-empresa2.png" style="width: 200px; height: 40px;" align="left">
    <nav>
        <ul>
            <li><a href="#que-hacemos">¿Qué hacemos?</a></li>
            <li><a href="#quienes-somos">¿Quiénes somos?</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li><a href="clientes_login.php">¿Sos cliente?</a></li>
        </ul>
    </nav>
</header>


    <section id="que-hacemos">
        <h2>¿Qué hacemos?</h2>
        <p>Aquí puedes describir en qué se especializa tu empresa o los servicios que ofreces.</p>
    </section>

    <section id="quienes-somos">
        <h2>¿Quiénes somos?</h2>
        <p>Brinda información sobre la empresa, su misión, visión y valores, así como su experiencia o trayectoria.</p>
    </section>

    <section id="Envianos-consulta">
    <h2>Envíanos tu consulta</h2>
    <form method="post" action="">
        <div style="display: flex; justify-content: center;">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
        </div>

        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <div>
                <label for="opciones">Elige una de estas opciones:</label>
                <input list="opciones" name="opcion" class="datalist-style" style="width: 300px; height: 30px;">
                <datalist id="opciones" class="datalist-style">
                    <option value="opcion1">
                    <option value="opcion2">
                    <option value="opcion3">
                </datalist>
            </div>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <label for="consulta">Consulta:</label>
        </div>
        <div style="text-align: center;">
            <textarea id="consulta" name="consulta" rows="6" required></textarea>
        </div>
        <div style="text-align: center; margin-top: 20px;">
        <input type="submit" name="Enviar" value="Enviar">
        </div>
    </form>
    <style>
    #Envianos-consulta {
        background-image: url('Fotofondo.jpg');
        background-size: cover;
        background-position: center;
    }
</style>
</section>


<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $destinatario = $_POST['email'];
        $asunto = $_POST['opcion'];
        $consulta = $_POST['consulta'];

        $conn = mysqli_connect("localhost","root","","test");
			if (!$conn) {
				die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
			}

        $cuerpo = '
            <html>
            <head>
                <title>Prueba de envio de correo</title>
            </head>
            <body>
                <h1>Solicitud de información sobre: ' . $asunto . '</h1>
                <h1>' . $consulta . '</h1>
                <p>
                    Contacto: ' . $_POST['nombre'] . ' <br>
                    Mensaje: Gracias por consultar <br>
                </p>
            </body>
            </html>
        ';

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Info.mind.ads@gmail.com\r\n";

        if (!empty($destinatario) && !empty($asunto) && !empty($cuerpo)) {
            if (mail($destinatario, $asunto, $cuerpo, $headers)) {
                echo "Correo enviado correctamente";
            } else {
                echo "Error al enviar el correo";
            }
        } else {
            echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
        }
    }
    ?>

        <footer>
            <div class="contacto">
                <p>Teléfono: +5491169339031</p>
                <p>Email: Info.mind.ads@gmail.com</p>
            </div>
            <p>© 2023 Empresa ADMind. Todos los derechos reservados.</p>
        </footer>
        <script>
       window.addEventListener('scroll', function() {
    var button = document.getElementById('btn-scroll-top');
    if (window.pageYOffset > 0) {
        button.classList.add('active');
    } else {
        button.classList.remove('active');
    }
});
    </script>
        <a href="#" id="btn-scroll-top" title="Volver arriba"><i class="fa fa-arrow-up"></i></a>
    </body>
    </html>
