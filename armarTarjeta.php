<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Primera web</title>
    <script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>

    </header>
    <main>

            <form action="procesoTarjeta.php" method="POST">
                <label>Nombre:</label>
                <input type="text" class="form-control form-cust" name="nombreUs">
                <label>Apellido:</label>
                <input type="text" class="form-control form-cust" name="apellidoUs">
                <label>Profesion:</label>
                <input type="text" class="form-control form-cust" name="profesionUs">
                <label>Descripción:</label>
                <input type="text" class="form-control form-cust" name="descripcionUs">
                <input class="form-control" type="submit" name="enviar" value="Enviar datos">
            </form>
    </main>
</body>
</html>