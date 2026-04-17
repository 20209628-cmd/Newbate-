<!DOCTYPE html>
<html lang="es">

<?php
session_start();

if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "admin" && $pass == "1234"){
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"" />
    <title>Newsbate4</title>
    <link rel="icon" type="favicon/x-icon" href="../News/img/supertux.png" />
   <link rel="stylesheet" href="css/styles.css?v=1">
   <link rel="stylesheet" href="css/responsive.css?v=1">
   <style>
/* Fondo global con imagen */
body {
    background: url('img/1.jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    height: 100vh;
    font-family: Arial, sans-serif;
}

/* Capa oscura + blur */
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    z-index: -1;
}

/* Contenedor centrado tipo login */
.container-login {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Caja tipo glass */
.box {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 12px;
    width: 300px;
    color: white;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    border: 1px solid rgba(255,255,255,0.2);
}

/* Inputs */
.box input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 6px;
}

/* Botón */
.box button {
    width: 100%;
    padding: 10px;
    background-color: #506658;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.box button:hover {
    background-color: #3e5146;
}
</style>

</head>

<body>
 
<header id="header">
    <div class="wrap">
        <div id="logo">
            <span class="gear">S</span>
            <h3>BLOG</h3>
        </div>

        <nav id="menu">
            <ul>
                
                <li><a href="blog.php">BLOG</a></li>
               
                <li><a href="contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
    </div>
</header>

    </header>
 


    <section class="wrap">
        <section id="info">

        <div id="banner">
            <h1>Newsbate4 v.02 (Beta)</h1>
        </div>

        <div id="cards">

            <a href="blog.php">
                <div class="card">
                    <p class="icon">H</p>
                    <h2 class="category">De este sitio</h2>
                    <p class="description">
                        Conoce con que este sitio fue desarrollado y con que finalidad
                    </p>
                </div>
            </a>

            <a href="contacto.php">
                <div class="card">
                    <p class="icon">_</p>
                    <h2 class="category">Perfil del autor</h2>
                    <p class="description">
                        Conoce al autor detrás del proyecto
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="card">
                    <p class="icon">S</p>
                    <h2 class="category">Under construction</h2>
                    <p class="description">
                        Men working
                    </p>
                </div>
            </a>

            <a href="#">
                <div class="card">
                    <p class="icon">u</p>
                    <h2 class="category">Rango de la pagina</h2>
                    <p class="description">
                        Ve el rango planeado de esta pagina
                    </p>
                </div>
            </a>

            <a href="contacto.php">
                <div class="card">
                    <p class="icon">a</p>
                    <h2 class="category">Trivia</h2>
                    <p class="description">
                        Contact me!
                    </p>
                </div>
            </a>

        </div>

    </section>
  
        <div class="clearfix"></div>
        <aside id="lateral">



            <h3>LOGIN</h3>
            <div id="login" class="aside-box">
                <form method="POST">
    <label id="user" class="icon">U</label>
    <input type="text" name="user" placeholder="Usuario" required />

    <label id="password" class="icon">w</label>
    <input type="password" name="pass" placeholder="Contraseña" required />
    <input type="submit" name="login" value="Entrar" />
    </form>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            </div>

            <h3>REDES SOCIALES</h3>
            <div id="social" class="aside-box">
                <div class="Twitter">
                    <a href="#" class="icon">t</a>
                    <p class="Overlay">
                        Twitter
                    </p>
                </div>
                <div class="Youtube">
                    <a href="#" class="icon">y</a>
                    <p class="Overlay">
                        Youtube
                    </p>
                </div>
                <div class="Facebook">
                    <a href="#" class="icon">f</a>
                    <p class="Overlay">
                        Facebook
                    </p>
                </div>
            </div>

            <h3>PATROCINADORES</h3>
            <div id="sponsors" class="aside-box">

            </div>

        </aside>





<?php include("conexion.php"); ?>

<section id="articles">
    <h2>Ultimos Comentarios</h2>

    <?php
    $resultado = $conexion->query("SELECT * FROM articulos ORDER BY fecha DESC");

    while($row = $resultado->fetch_assoc()){
    ?>
        <article>
            <div class="data">
                <span><?php echo $row['fecha']; ?></span>
                <span><?php echo $row['categoria']; ?></span>
            </div>

            <h4>
                <a href="#"><?php echo $row['titulo']; ?></a>
            </h4>

            <p><?php echo $row['contenido']; ?></p>
        </article>
    <?php } ?>
</section>


        </section>

    </section>
    <!--Pie de página-->
    <div class="clearfix"></div>
    <footer id="footer">
        <div class="wrap">

            <div id="menu_footer">
                <h5>MENÚ</h5>
                <ul>
                    <li><a href="#">INICIO</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">FORMACIÓN</a></li>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </div>

            <div id="location">
                <h5>¿Dónde Estamos?</h5>
                <div class="info">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7790.142913247247!2d-69.862183566476!3d18.475237195655133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf880cc92d29e7%3A0x554c3c92555a31b!2sFaro%20a%20Col%C3%B3n!5e0!3m2!1ses-419!2sdo!4v1760744846339!5m2!1ses-419!2sdo"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="info">
                <h5>Desarrollado con</h5>
                <p>
                    <img src="../News/img/html5-badge-h-css3-graphics-multimedia-performance-semantics.png"
                        alt="Creado con HTML y CSS" />
                </p>



                <h5>Optimizado para</h5>
                <p id="browsers">
                    <a href="#"><img src="img/firefox-icon.png" alt="Firefox" title="Firefox" /></a>
                    <a href="#"><img src="img/chrome.png" alt="Chrome" title="Chrome" /></a>
                    <a href="#"><img src="img/safari.png" alt="Safari" title="Safari" /></a>
                    <a href="#"><img src="img/ios.png" alt="IOS" title="IOS" /></a>
                    <a href="#"><img src="img/Opera_256x256.png" alt="Opera" title="Opera" /></a>
                    <a href="#"><img src="img/android.png" alt="Android" title="Android" /></a>
                </p>
                <h5>AUTOR</h5>
                <p>&copy; Juan Francisco De Mota - D. Mota Web.do</p>
            </div>

        </div>
    </footer>





</body>

</html>