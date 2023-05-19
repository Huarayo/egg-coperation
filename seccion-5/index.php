<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <?php 

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $descripcion = $_POST["descripcion"];


            $conexion = new mysqli("localhost","root","","test");

            if($conexion->connect_error){
                die("404 Ocurrio un error");
            }

            $sql = "INSERT INTO usuarios_egg (name,lastName,email,descripcion) VAlUES ('$nombre','$apellido','$email','$descripcion')";

            if($conexion->query($sql)) {
                echo "Los datos se han insertado correctamente";
            } else {
                echo "Error al insertar los datos: " . $conexion->error;
            }
        }

    ?>
    
    <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" class="myForm__input" name="nombre">

        <label for="apellido">Apellido: </label>
        <input type="text" id="apellido" class="myForm__input" name="apellido">

        <label for="email">Email: </label>
        <input type="email" id="email" class="myForm__input" name="email">

        <textarea id="" cols="30" rows="10" class="myForm__input" name="descripcion"></textarea>
        <input type="submit" value="Enviar" class="myForm__submit">

    </form>

<script src="./script.js"></script>
</body>
</html>