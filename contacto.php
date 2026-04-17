<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contacto</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Color principal */
.bg-ebony {
    background-color: #506658;
}

.text-ebony {
    color: #506658;
}

.btn-ebony {
    background-color: #506658;
    color: white;
    border: none;
}

.btn-ebony:hover {
    background-color: #3e5146;
    color: white;
}

/* Card */
.card {
    border-left: 5px solid #506658;
}

/* Fondo */
body {
    background: url('img/1.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* Blur overlay */
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    backdrop-filter: blur(6px);
    z-index: -1;
}
</style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar bg-ebony mb-4">
    <div class="container-fluid">
        <span class="navbar-brand text-white">Contacto</span>
        <a href="index.php" class="btn btn-light btn-sm">Volver</a>
    </div>
</nav>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body text-center">

                    <h3 class="text-ebony mb-3">Juan de Mota</h3>

                    <p><strong>Correo:</strong> 2020-9628@gmail.com</p>
                    <p><strong>Teléfono:</strong> +1 (809) 555-1234</p>
                    <p><strong>Dirección:</strong> Santo Domingo, República Dominicana</p>
                    <p><strong>Ocupación:</strong> Desarrollador Web</p>

                    <hr>

                    <h5 class="text-ebony">Envíame un mensaje</h5>

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Correo">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>
                        </div>

                        <button class="btn btn-ebony w-100">Enviar</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>