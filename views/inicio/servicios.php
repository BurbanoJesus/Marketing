<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/marketing/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$servicios = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main" id="servicios">
		<div class="contenido">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_about">
					<i class="icon-filled-home file"></i>
					<span class="first">Inicio</span>
					<span>Servicios</span>
				</div>
			</div>
			<!--  -->
			<div class="wrap_servicios">
				<div class="background"></div>
				<div class="content_wrap_servicios">
					<h2 class="main">Soluciones de <span>Marketing</span></h2>
					<p class="main">Ofrecemos soluciones digitales en los aspectos estratégicos que pueden desarrollarse de forma planificada para su empresa.</p>
					<div class="contenido_servicios">
						<div class="elemento_servicio">
							<div class="file_m">
								<i class="icon-filled-modulo-b icon"></i>
							</div>
							<div class="titulo">
								<h3>Plan de <span>Marketing</span></h3>
								<p>Puede considerarse como el conjunto de acciones o los aspectos estratégicos que pueden desarrollarse de forma planificada y abarcar multitud de aplicaciones.</p>
							</div>
						</div>
						<div class="elemento_servicio">
							<div class="file_m">
								<i class="icon-filled-target-b icon"></i>
							</div>
							<div class="titulo">
								<h3>Estrategia de <span>Ventas</span></h3>
								<p>Las estrategias de venta son uno de los pilares más importantes en cualquier empresa para poder conseguir unos buenos resultados económicos.</p>
							</div>
						</div>
						<div class="elemento_servicio">
							<div class="file_m">
								<i class="icon-filled-about-c icon"></i>
							</div>
							<div class="titulo">
								<h3>Marketing <span>Digital</span></h3>
								<p>En la era Internet, de los nuevos medios y de las redes sociales, y ante la imparable evolución de tecnologías como el Big data o la inteligencia artificial de nuestros días.</p>
							</div>
						</div>
						<div class="elemento_servicio">
							<div class="file_m">
								<i class="icon-filled-about-c icon"></i>
							</div>
							<div class="titulo">
								<h3>Email <span>Marketing</span></h3>
								<p>Email Marketing es un conjunto de estrategias llevadas a cabo por empresas para darle visibilidad a sus contenidos y ofertas.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--  -->
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php
$scripts = ['comp_modal.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>