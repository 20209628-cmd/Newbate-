<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $categoria = $_POST['categoria'];

  
    $conexion->query("INSERT INTO articulos (titulo, contenido, categoria) 
    VALUES ('$titulo','$contenido','$categoria')");

   
    header("Location: admin.php");
    exit();
}
?>