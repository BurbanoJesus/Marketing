<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/marketing/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$active = (isset($_GET['active'])) ? $_GET['active'] : '';
$url_redirect = (isset($_GET['url_redirect'])) ? $_GET['url_redirect'] : HOST.'inicio';
$str_action = (isset($_GET['str_action'])) ? $_GET['str_action'] : '';
$titulo = (isset($_GET['titulo'])) ? $_GET['titulo'] : '';

$contactanos = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="portafolio">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_about">
					<i class="icon-filled-home file"></i>
					<span class="first">Inicio</span>
					<span>Contacto</span>
				</div>
			</div>
			<div class="wrap_success">
					<div class="success">
					<i class="icon-lineal-check"></i>
					<span><?php echo $str_action?></span>
					<?php 
						if (strlen($titulo) > 0 ) {
							echo '<p class="success_p">'.$titulo.'.</p>';
						}
					?>
					<div class="content_button next">
						<button onclick="javascript:window.location ='<?php echo $url_redirect?>'" type="button" class="button">Aceptar</button>
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