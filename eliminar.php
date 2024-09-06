<?php

include("conexion.php");

if($_GET) {
    $id = $_GET["id"];
    $query = $conexion -> query("DELETE FROM `libros` WHERE id = $id");    
}
header("location:index.php");