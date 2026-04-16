<?php
include("conexion.php");

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO articulos (titulo, contenido, categoria)
        VALUES ('$titulo', '$contenido', '$categoria')";

$conexion->query($sql);

header("Location: index.php");
?>