<?php
    //Comentario de una línea.
    /*
    Comentario de varias lineas.
    */
    $nombre="Iveth";
    echo "Bienvenid@ " . $nombre;

    //Evaluar.
    if(isset($_POST["enviar"])){
        $seleccion = $_POST["selection"];
        INCLUDE $seleccion . ".php";

    }else{
        INCLUDE "es.php";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="selection" value="seleccionar">
        <option value="en">English</option>
        <option value="es">Spanish</option>
</select>
<input type="submit" name="enviar" value="seleccionar">
</form>
<h1><?php echo TITLE; ?></h1>
<h2><?php echo SUBTITLE; ?></h2>
</html>