<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear Artículo</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

.btn-ebony {
    background-color: #506658;
    color: white;
    border: none;
}

.btn-ebony:hover {
    background-color: #3e5146;
    color: white;
}


.header-ebony {
    background-color: #506658;
    color: white;
    padding: 15px;
    border-radius: 8px;
}


.card {
    border-left: 5px solid #506658;
}

body {
    background: url('img/green2.jpg') no-repeat center center fixed;
    background-size: cover;
    position: relative;
}


body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
}


.container {
    position: relative;
    z-index: 1;
}

body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.4); 
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px); 
    z-index: -1;
}


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

<div class="container mt-5">

    <div class="header-ebony mb-4">
        <h3 class="mb-0">Crear Artículo</h3>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="guardar.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input 
                        type="text" 
                        name="titulo" 
                        class="form-control"
                        placeholder="Ingrese el título"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Contenido</label>
                    <textarea 
                        name="contenido" 
                        class="form-control"
                        rows="5"
                        placeholder="Ingrese el contenido"
                    ></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <input 
                        type="text" 
                        name="categoria" 
                        class="form-control"
                        placeholder="Ingrese la categoría"
                    >
                </div>

                <div class="d-flex justify-content-between">
                    <a href="javascript:history.back()" class="btn btn-secondary">Volver</a>
                    <button type="submit" class="btn btn-ebony">Guardar</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>