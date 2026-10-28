
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera página PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 50px;
        }

        h1 {
            color: blue;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <h1>Mi primera página en PHP</h1>

    <p>¡Hola, mundo!</p>

    <?php
        echo "<p>Bienvenido a mi página web.</p>";
        echo "<p>La fecha actual es: " . date("d/m/Y") . "</p>";
    ?>

</body>
</html>
