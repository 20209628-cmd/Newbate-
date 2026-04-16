<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: index.php");
    exit();
}

include("conexion.php");
?>

<h1>Panel Admin - CRUD</h1>

<a href="crear.php">Crear Artículo</a>
<a href="logout.php">Cerrar sesión</a>

<hr>

<?php
$resultado = $conexion->query("SELECT * FROM articulos");

while($row = $resultado->fetch_assoc()){
?>
    <div>
        <h2><?php echo $row['titulo']; ?></h2>
        <p><?php echo $row['contenido']; ?></p>

        <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
        <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
    </div>
    <hr>
<?php } ?>