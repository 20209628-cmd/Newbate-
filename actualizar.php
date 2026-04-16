<?php
include("conexion.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$categoria = $_POST['categoria'];

$sql = "UPDATE articulos SET 
        titulo='$titulo',
        contenido='$contenido',
        categoria='$categoria'
        WHERE id=$id";

if ($conexion->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error al actualizar";
}
?>