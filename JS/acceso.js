const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const registerBtnlisto = document.getElementById('registerlisto');
const loginBtnlisto = document.getElementById('loginlisto');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

//registerBtnlisto.addEventListener('click', () => {
//    // Validar campos del formulario de registro
//    const email = document.querySelector('input[type="email"]').value;
//    const password = document.querySelector('input[type="password"]').value;
//
//    if (email && password) {
//        // Redirigir solo si los campos están llenos y son válidos
//        setTimeout(function() {
//            window.location.href = '../HTML/exitoacceso.php';
//        }, 1000); // Redirigir después de 1 segundo (1000 milisegundos)
//    } else {
//        console.log('Por favor, complete todos los campos REGISTRO.');
//        // Puedes mostrar un mensaje de error al usuario si los campos están vacíos o son inválidos
//    }
//});
//
//loginBtnlisto.addEventListener('click', (event) => {
//    event.preventDefault(); // Previene el envío automático del formulario
//
//    // Realiza la validación de campos
//    const email = document.querySelector('input[type="email"]').value;
//    const password = document.querySelector('input[type="password"]').value;
//
//    if (email && password) {
//        // Redirige solo si los campos están llenos y son válidos
//        window.location.href = '../HTML/home.php';
//    } else {
//        console.log('Por favor, complete todos los campos SESION.');
//    }
//});
