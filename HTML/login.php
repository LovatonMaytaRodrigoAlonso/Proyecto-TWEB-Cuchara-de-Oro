<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión - Cuchara de Oro</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
  </head>
  <body>
    
    <div class="login-box">
      <img src="../Imagenes/Cuchara de Oro.jpg" class="avatar" alt="Avatar Image">
      <h1>Iniciar Sesión</h1>
      <form>
        <!-- CORREO ENTRADA -->
        <label for="email">E-mail</label>
        <input type="text" placeholder="Ingresa tu e-mail" required>
        <!-- PASSWORD ENTRADA -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa tu contraseña" required>
        <input type="submit" value="Entrar">    

        <a href="../olvidecontra.php">¿Olvidaste tu contraseña?</a><br>
        <a href="../Registro.php">¿No tienes una cuenta? Regístrate</a><br>
       
        <i class='bx bxl-google'></i>
        <input class="google" type="submit" value="Iniciar sesión con Google">
        <i class='bx bxl-facebook-square' ></i>
        <input class="facebook" type="submit" value="Iniciar sesión con Facebook">

        <!--
        <hr>
        
        <input type="submit" value="Iniciar sesión con Google">
        <input type="submit" value="Iniciar sesión con Facebook"> -->
        

        <!--FIREBASE SCRIPTS-->

        <script type="module">
          // Import the functions you need from the SDKs you need
          import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
          import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";
          // TODO: Add SDKs for Firebase products that you want to use
          // https://firebase.google.com/docs/web/setup#available-libraries
        
          // Your web app's Firebase configuration
          // For Firebase JS SDK v7.20.0 and later, measurementId is optional
          const firebaseConfig = {
            apiKey: "AIzaSyCNdx5GxW6UyRFslPFi8QMbRi363iQzB0Q",
            authDomain: "login-707d2.firebaseapp.com",
            projectId: "login-707d2",
            storageBucket: "login-707d2.appspot.com",
            messagingSenderId: "427674472047",
            appId: "1:427674472047:web:f96db82b347f91c8d6c79a",
            measurementId: "G-T0QBMEDGD9"
          };
        
          // Initialize Firebase
          const app = initializeApp(firebaseConfig);
          const analytics = getAnalytics(app);
        </script>
<script src="../login.js"></script>

      </form>      
    </div>
<!--
    <footer>
        <h5>Contactanos: </h5>
        <h5>WhatsApp: +51 906 153 801</h5>
        <a href="Reclamaciones.html"><img src="Imagenes/Iconos/libro de reclamaciones.png" height="100"></a>
        <h5>2023 © Todos los derechos reservados</h5>
    </footer> -->
  </body>
</html>

