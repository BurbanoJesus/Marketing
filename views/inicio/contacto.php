<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/marketing/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$contacto = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main" id="contacto">
		<div class="contenido">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_about">
					<i class="icon-filled-home file"></i>
					<span class="first">Inicio</span>
					<span>Contacto</span>
				</div>
			</div>
			<!--  -->
			<div class="wrap_contacto">
				<div class="capa_background_contacto"></div>
				<div class="content_contacto animacion anim_arriba_s">
					<h2 class="main">Contáctanos <span>Ahora</span></h2>
					<p class="main">Puedes contactarnos en cualquier momento, responderemos lo mas pronto posible.</p>
					<form class="form_contacto" action="<?php echo CONTROLLERS?>inicio/c_contacto.php" method="POST">
						<div class="input s50">
							<input type="text" name="nombre"  placeholder="Nombre" />
						</div>
						<div class="input s50">
							<input type="text" name="telefono"  placeholder="Telefono" />
						</div>
						<div class="input">
							<input type="text" name="correo"  placeholder="Correo" />
						</div>
						<div class="input">
							<textarea name="mensaje" cols="30" rows="5" placeholder="Mensaje"></textarea>
						</div>
						<div class="content_button">
							<button class="button" type="submit">
							Enviar
							<svg viewBox="0 0 299.000000 257.000000"
							 preserveAspectRatio="xMidYMid meet">
							<g transform="translate(0.000000,257.000000) scale(0.100000,-0.100000)"
							stroke="none">
							<path d="M0 2065 l0 -494 33 -6 c17 -3 491 -66 1052 -140 561 -75 1025 -137
							1030 -140 6 -2 4 -4 -3 -4 -21 -2 -2045 -271 -2079 -277 l-33 -6 0 -494 c0
							-272 3 -494 8 -494 17 0 2963 1268 2963 1275 0 7 -2946 1275 -2963 1275 -5 0
							-8 -223 -8 -495z"/>
							</g>
							</svg>
							</button>
						</div>
					</form>
				</div>
			</div>
			<!--  -->
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php
$scripts = ['comp_slider.js','comp_modal.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>