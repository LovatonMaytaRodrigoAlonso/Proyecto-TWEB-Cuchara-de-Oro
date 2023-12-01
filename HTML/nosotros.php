<?php include_once '../PHP/Header.php'; ?>

<main>

	<h1>¿Quienes somos?</h1>
	<div class="container-nosotros">

		<p class="parrafo-nosotros">
			Nuestro restaurante criollo “Cuchara de Oro” fue fundado hace 11 años,
			nuestro propósito además de ser una fuente de ingresos fue para rendir tributo a la cocina peruana.
			El restaurante con el tiempo se convirtió en un punto de referencia para los vecinos y sus conocidos
			gracias
			al boca a boca.
		</p>
		<img class="imagen-mediana" src="../Imagenes/Cuchara de Oro.jpg" alt="">
	</div>
	<h1>Ubicanos</h1>
	<div style="display: flex; justify-content: center;"> <br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.097554522585!2d-77.0450461!3d-11.8982951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d16d5b8ffcef%3A0x378965e80406be8e!2sCuchara%20de%20Oro!5e0!3m2!1ses!2spe!4v1701397268052!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	<!-- Preguntas frecuentes -->
	<section id="preguntas-frecuentes">
		<h2>Preguntas Frecuentes</h2>
		<center>
			<div class="container">
				<div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Dónde se encuentran?</h3>
					</div>
					<div class="respuesta">
						Nos encontramos en Av. San Felipe Mz. B, Comas 15311.
					</div>
				</div>

				<div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Cuál es la especialidad de su restaurante?</h3>
					</div>
					<div class="respuesta">
						Nos dedicamos a ofrecer comida criolla
					</div>
				</div>

				<div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Cuáles son sus horarios de atención?</h3>
					</div>
					<div class="respuesta">
						Nuestro horario de atención es de 7 am a 11 pm.
					</div>
				</div>

				<div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Ofrecen opciones de comida a domicilio?</h3>
					</div>
					<div class="respuesta">
						Sí, damos la opción de envío a domicilio con un cargo adicional.
					</div>
				</div>


				<div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Qué formas de pago aceptan?</h3>
					</div>
					<div class="respuesta">
						Aceptamos tarjetas de crédito, Yape y Plin.
					</div>
				</div>


				<div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Cuánto cuesta el envío?</h3>
					</div>
					<div class="respuesta">
						El envío a domicilio tiene un mínimo de 5 soles.
					</div>
				</div>
			</div>
		</center>


		<script>
			const preguntas = document.querySelectorAll(".pregunta_encabezado");

			preguntas.forEach((pregunta) => {
				pregunta.addEventListener("click", () => {
					removerClaseActivo();
					pregunta.nextElementSibling.classList.add("activo");
				});
			});

			function removerClaseActivo() {
				preguntas.forEach((pregunta) => {
					pregunta.nextElementSibling.classList.remove("activo");
				});
			}
		</script>

	</section>
	<hr>
	<h1>Mira más de nosotros</h1>
	<div style="display: flex; justify-content: center;"> <br>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/kw-Cf20UyCc?si=vxAaAL2h_72c46tx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
</main>
<!--
    <footer>
        <div class="footer-datos">
            <h5>Contactanos: </h5>
            <h5>WhatsApp: +51 906 153 801</h5>
            <h5 id="copyright">2023 © Todos los derechos reservados</h5>
        </div>
        <div>
            <a href="/HTML/Reclamaciones.html"><img src="/Imagenes/Iconos/libro de reclamaciones.png" height="100"></a>
        </div>       
        
    </footer>
-->
<?php include_once '../PHP/Footer.php'; ?>

<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>