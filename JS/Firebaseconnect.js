
/*import { initializeApp } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyCLlI8KWRFHZPGMzUParYWT2rPa8Nfb25s",
    authDomain: "cuchara-de-oro.firebaseapp.com",
    projectId: "cuchara-de-oro",
    storageBucket: "cuchara-de-oro.appspot.com",
    messagingSenderId: "183573130255",
    appId: "1:183573130255:web:e99847663baf52c5ac477a"
  };

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();

export class ManageAccount {
  register(email, password) {
    createUserWithEmailAndPassword(auth, email, password)
      .then((_) => {
        window.location.href = "login.html";
        // Mostrar alerta de registro exitoso
        alert("Registro exitoso. Serás redirigido a la página de inicio de sesión.");
      })
      .catch((error) => {
        console.error(error.message);
            // Mostrar alerta de error de registro
            alert("Error al registrar: " + error.message);
      });
  }

  authenticate(email, password) {
    signInWithEmailAndPassword(auth, email, password)
      .then((_) => {
        window.location.href = "index.html";
        // Mostrar alerta de inicio de sesión exitoso
        alert("Has iniciado sesión correctamente. Serás redirigido a la página principal.");
      })
      .catch((error) => {
        console.error(error.message);
                // Mostrar alerta de error de inicio de sesión
                alert("Error al iniciar sesión: " + error.message);
      });
  }

  signOut() {
    signOut(auth)
      .then((_) => {
        window.location.href = "index.html";
      })
      .catch((error) => {
        console.error(error.message);
      });
  }
}*/


  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
  import { getAuth } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyCLlI8KWRFHZPGMzUParYWT2rPa8Nfb25s",
    authDomain: "cuchara-de-oro.firebaseapp.com",
    projectId: "cuchara-de-oro",
    storageBucket: "cuchara-de-oro.appspot.com",
    messagingSenderId: "183573130255",
    appId: "1:183573130255:web:e99847663baf52c5ac477a"
  };

  // Initialize Firebase
 export const app = initializeApp(firebaseConfig);
 export const auth = getAuth(app);