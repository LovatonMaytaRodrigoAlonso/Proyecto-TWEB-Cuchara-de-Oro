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
				<?php include_once '../PHP/ObtenerFAQ.php'; ?>
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

<?php include_once '../PHP/Footer.php'; ?>

<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>