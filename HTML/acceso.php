<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/acceso.css">
    <link rel="stylesheet" href="../CSS/header1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.31/sweetalert2.min.js" integrity="sha512-dbgWBkIauIf3iy96dqgzBD9ysKHp7mAuym+V7AqaNIuICxDBVm6nzvl1Yi+rdfnh25SdmYDw2JbFk/FOXf6Ycg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.31/sweetalert2.css" integrity="sha512-eRBMRR/qeSlGYAb6a7UVwNFgXHRXa62u20w4veTi9suM2AkgkJpjcU5J8UVcoRCw0MS096e3n716Qe9Bf14EyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Iniciar sesión | Cuchara de Oro</title>
</head>

<body>
    
    <div class="container" id="container">
        
        ><!-- REGISTRAR USUARIO -->
        <div class="form-container sign-up">
            <form method="post" enctype="multipart/form-data">
                <h1>Crear cuenta</h1>
                <div class="social-icons">
                    <a href="https://accounts.google.com/login?hl=es" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="https://www.facebook.com/?locale=es_LA" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                  
                </div>
                <span>o usa tu e-mail para registrarte</span>                
                <input type="text" name="name" placeholder="Nombre">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Contraseña">
                <div>
                    <label for="evidencia">Subir foto de perfil *Opcional*</label>
                    <input type="file" name="foto" id="evidencia" accept=".png, .jpeg">
                </div>
                <button id="registerlisto" name="registrar">Registrarse</button>

            </form>
        </div>
        
        
        ><!-- INICIAR SESION -->
        <div class="form-container sign-in">
            <form action="../PHP/ValidarInicioSesion.php" method="post">
                <h1>Iniciar sesión</h1>
                <div class="social-icons">
                    <a href="https://accounts.google.com/login?hl=es" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="https://www.facebook.com/?locale=es_LA" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <span>o usa tu e-mail y contraseña</span>
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Contraseña">
                <a href="../HTML/olvidecontra.php">¿Olvidaste tu contraseña?</a>
                <input type="hidden" name="action" value="acceso_user">
                <button id="loginlisto" name="acceder">Acceder</button>
            </form>
        </div>
        
        
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido de vuelta!</h1>
                    <p>Ingresa para disfrutar de todas las funcionalidades de nuestra página.</p>
                    <button class="hidden" id="login">Iniciar sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola!</h1>
                    <p>Regístrate con tus datos personales para disfrutar de todas las funcionalidades de nuestra página.</p>
                    <button class="hidden" id="register">Registrarme</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="home.php">Continuar como Invitado</a>

    <script src="../JS/acceso.js"></script>
    <?php
    include ('../PHP/ValidarRegistro.php');
    ?>

</body>

</html>