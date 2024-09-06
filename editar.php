<?php

include("conexion.php");

if ($_POST) {
    $id = $_POST["id"];
    $titulo_libro = $_POST["nombre"];
    $nombre_autor = $_POST["autor"];
    $resumen_libro = $_POST["resumen"];

    $query = $conexion->query("UPDATE `libros` 
    SET `titulo_libro`='$titulo_libro',`nombre_autor`='$nombre_autor',`resumen_libro`='$resumen_libro' WHERE id = $id");
}
header("location:index.php");
