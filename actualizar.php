<?php
include("conexion.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$categoria = $_POST['categoria'];

$sql = "UPDATE articulos 
        SET titulo='$titulo', contenido='$contenido', categoria='$categoria' 
        WHERE id=$id";

if ($conexion->query($sql)) {
   
    header("Location: admin.php");
    exit();
} else {
    echo "Error al actualizar: " . $conexion->error;
}
?>