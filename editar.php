<?php
include("conexion.php");
$id = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM articulos WHERE id=$id");
$articulo = $resultado->fetch_assoc();
?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $articulo['id']; ?>">

    <input type="text" name="titulo" value="<?php echo $articulo['titulo']; ?>"><br>
    <textarea name="contenido"><?php echo $articulo['contenido']; ?></textarea><br>
    <input type="text" name="categoria" value="<?php echo $articulo['categoria']; ?>"><br>

    <button type="submit">Actualizar</button>
</form>