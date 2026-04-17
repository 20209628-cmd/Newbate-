<?php 
session_start(); 
if(!isset($_SESSION['admin'])){ 
    header("Location: index.php"); 
    exit(); 
} 
include("conexion.php"); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Admin</title>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Color principal */
.btn-ebony {
    background-color: #506658;
    color: #fff;
    border: none;
}

.btn-ebony:hover {
    background-color: #3e5146;
    color: #fff;
}

/* Navbar personalizada */
.navbar-ebony {
    background-color: #506658;
}

/* Cards */
.card {
    border-left: 5px solid #506658;
}

/* Títulos */
.text-ebony {
    color: #506658;
}

/* Cards con imagen de fondo */
.card {
    border-left: 5px solid #506658;
    position: relative;
    overflow: hidden;
}

/* Imagen de fondo */
.card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url('img/1.jpg') no-repeat center center;
    background-size: cover;
    opacity: 0.9;
}

/* Capa oscura para legibilidad */
.card::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
}

/* Contenido encima */
.card-body {
    position: relative;
    z-index: 1;
    color: #fff;
}

/* Mantener títulos con color Ebony */
.text-ebony {
    color: #ffffff !important;
}

/* Fondo global */
body {
    background: url('img/1.jpg') no-repeat center center fixed;
    background-size: cover;
    position: relative;
}

/* Capa oscura para mejorar visibilidad */
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
}

/* Contenedor principal más limpio */
.container {
    position: relative;
    z-index: 1;
}
/* Fondo con blur */
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.4); /* oscurece un poco */
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px); /* soporte Chrome/Safari */
    z-index: -1;
}

/* Contenedor tipo glass */
.container {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 12px;
    padding: 20px;
    color: white;
}
</style>

</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-ebony mb-4">
    <div class="container-fluid">
        <span class="navbar-brand text-white">Panel Admin</span>
        <a href="logout.php" class="btn btn-light btn-sm">Cerrar sesión</a>
    </div>
</nav>

<div class="container">

    <!-- Botón crear -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-ebony">Artículos</h2>
        <a href="crear.php" class="btn btn-ebony">Crear Artículo</a>
    </div>

    <div class="row">
        <?php 
        $resultado = $conexion->query("SELECT * FROM articulos"); 

        while($row = $resultado->fetch_assoc()){ 
        ?>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title text-ebony">
                            <?php echo $row['titulo']; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $row['contenido']; ?>
                        </p>

                        <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">
                            Editar
                        </a>
                        <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                            Eliminar
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

</body>
</html>