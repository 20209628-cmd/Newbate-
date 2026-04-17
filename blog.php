<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Blog - Proyecto</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ===== CARDS ESTILO BANNER ===== */
.card-banner {
    position: relative;
    overflow: hidden;
    border: none;
    border-radius: 12px;
    height: 100%;
    color: white;
}

/* Imagen base (se sobrescribe por clase) */
.card-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.4s ease;
}

/* 🔥 IMÁGENES PERSONALIZADAS */
.bg-tec::before { background-image: url('img/tecnologias.png'); }
.bg-back::before { background-image: url('img/php.jpg'); }
.bg-front::before { background-image: url('img/html.webp'); }
.bg-boot::before { background-image: url('img/bootstrap.webp'); }
.bg-test::before { background-image: url('img/selenium.jpg'); }
.bg-alc::before { background-image: url('img/alcance.png'); }
.bg-out::before { background-image: url('img/green2.jpg'); }

/* Overlay */
.card-banner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.6);
}

/* Contenido */
.card-body {
    position: relative;
    z-index: 1;
}

/* Hover */
.card-banner:hover::before {
    transform: scale(1.05);
}

/* Fondo global con imagen */
body {
    background: url('img/green2.jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
}

/* Capa blur + oscurecido */
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5); /* oscurece */
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    z-index: -1;
}
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar mb-4">
    <div class="container-fluid">
        <span class="navbar-brand text-white">Blog del Proyecto</span>
        <a href="index.php" class="btn btn-light btn-sm">Volver</a>
    </div>
</nav>

<div class="container">

    <div class="row g-4">

        <!-- TECNOLOGIAS -->
        <div class="col-md-6">
            <div class="card card-banner bg-tec shadow">
                <div class="card-body">
                    <h4 class="card-title">Tecnologías</h4>
                    <ul>
                        <li>PHP (CRUD + sesiones)</li>
                        <li>HTML5 y CSS3</li>
                        <li>Bootstrap 5</li>
                        <li>Selenium (Python)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- BACKEND -->
       <div class="col-md-6">
        <div class="card card-banner bg-back shadow">
                <div class="card-body">
                    <h4 class="card-title">Backend</h4>
                    <ul>
                        <li>PHP</li>
                        <li>Sesiones</li>
                        <li>Lógica CRUD</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FRONTEND -->
        <div class="col-md-6">
           <div class="card card-banner bg-front shadow">
                <div class="card-body">
                    <h4 class="card-title">Frontend</h4>
                    <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Color #506658</li>
                        <li>Blur + glassmorphism</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- BOOTSTRAP -->
        <div class="col-md-6">
            <div class="card card-banner bg-boot shadow">
                <div class="card-body">
                    <h4 class="card-title">Framework</h4>
                    <ul>
                        <li>Bootstrap 5</li>
                        <li>Grid system</li>
                        <li>Cards y formularios</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- PRUEBAS -->
        <div class="col-md-6">
            <div class="card card-banner bg-test shadow">
                <div class="card-body">
                    <h4 class="card-title">Pruebas</h4>
                    <ul>
                        <li>Selenium</li>
                        <li>Validación login</li>
                        <li>Pruebas CRUD</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ALCANCE -->
        <div class="col-md-6">
            <div class="card card-banner bg-alc shadow">
                <div class="card-body">
                    <h4 class="card-title">Alcance</h4>
                    <ul>
                        <li>Login admin</li>
                        <li>CRUD artículos</li>
                        <li>Interfaz responsiva</li>
                        <li>MySQL</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FUERA DEL ALCANCE -->
        <div class="col-md-12">
            <div class="card card-banner bg-out shadow">
                <div class="card-body">
                    <h4 class="card-title">Fuera del Alcance</h4>
                    <ul>
                        <li>Registro de usuarios</li>
                        <li>Múltiples roles</li>
                        <li>API REST</li>
                        <li>Seguridad avanzada</li>
                        <li>Producción real</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>