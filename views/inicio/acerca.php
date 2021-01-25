<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/marketing/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$nosotros = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main" id="acerca">
		<div class="contenido">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_about">
					<i class="icon-filled-home file"></i>
					<span class="first">Inicio</span>
					<span>Acerca de</span>
				</div>
			</div>
			<div class="wrap_about">
				<div class="background"></div>
				<div class="content_wrap_about">
					<h2 class="main">¿Qué es el <span>Marketing?</span></h2>
					<p class="main">Conjunto de técnicas o estrategias utilizadas para estudiar el comportamiento de los mercados.</p>
					<div class="contenido_about">
						<div class="elemento_about">
							<div class="file_m">
								<i class="icon-filled-modulo-b icon"></i>
							</div>
							<div class="titulo">
								<h3>Importancia del <span>Marketing</span></h3>
								<p>Puede considerarse como el conjunto de acciones o los aspectos estratégicos que pueden desarrollarse de forma planificada.</p>
							</div>
						</div>
						<div class="elemento_about">
							<div class="file_m">
								<i class="icon-filled-target-b icon"></i>
							</div>
							<div class="titulo">
								<h3>Marketing <span>Online</span></h3>
								<p>Las estrategias de venta son uno de los pilares más importantes en cualquier empresa para poder conseguir unos buenos resultados económicos.</p>
							</div>
						</div>
						<div class="elemento_about">
							<div class="file_m">
								<i class="icon-filled-about-c icon"></i>
							</div>
							<div class="titulo">
								<h3>Marketing <span>digital</span></h3>
								<p>De los nuevos medios y de las redes sociales, y ante la imparable evolución de tecnologías como el Big data o la inteligencia artificial.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php
$scripts = ['comp_modal.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>