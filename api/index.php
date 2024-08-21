<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedores" id="formSaludo">
    <!-- Formulario para capturar el nombre -->
        <form id="formularioNombre" method="post" action="">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
    

    <div class="contenedores">
    <!-- Aquí se muestra el saludo personalizado -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            echo "<p>¡Hola, $nombre! Bienvenido.</p>";
        }
        ?>
    </div>
    
</body>
</html>
