<?php

include("conexion.php");

if ($_POST) {

    $titulo_libro = $_POST["nombre"];
    $nombre_autor = $_POST["autor"];
    $resumen_libro = $_POST["resumen"];

    $query = $conexion->query("INSERT INTO `libros`(`id`, `titulo_libro`, `nombre_autor`, `resumen_libro`) 
    VALUES (null,'$titulo_libro','$nombre_autor',' $resumen_libro')");
}

header("location:index.php");

