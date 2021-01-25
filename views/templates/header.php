<header>
	<div id="menu_animacion" class="header">
		<div class="menu">
			<div class="info_empresa responsive_movil_on">
				<span class="call_modal" target="modal">
					<i class="icon-filled-chat"></i>
				</span>
			</div>
			<div class="lateral_izq">
				<div class="main_titulo" onclick="window.location = '<?php echo HOST?>inicio'">
					<span>MARKETING</span>
				</div>
			</div>
			<div class="lateral_der">
				<!-- <div class="separador responsive_movil_off"></div> -->
				<nav class="nav">
					<a class="nav_elemento <?php echo $inicio?>" href="<?php echo HOST?>inicio">Inicio</a>
					<a class="nav_elemento <?php echo $nosotros?>" href="<?php echo HOST?>acerca">Acerca de</a>
					<a class="nav_elemento <?php echo $servicios?>" href="<?php echo HOST?>servicios">Servicios</a>
					<a class="nav_elemento <?php echo $contacto?>" href="<?php echo HOST?>contacto">Contacto</a>
				</nav>
				<div class="call_modal responsive_menu responsive_movil_off" target="modal">
					<div class="a"></div>
					<div class="b"></div>
					<div class="c"></div>
				</div>
				<div class="responsive_menu responsive_movil_on">
					<div class="a"></div>
					<div class="b"></div>
					<div class="c"></div>
				</div>
				<div id="modal" class="modal modal_map">
					<div class="close"><i class="icon-cancelar"></i></div>
					<div class="modal_main size_modal">
						<div class="modal_content">
							<div class="wrap_contacto">
								<div class="content_contacto">
									<h2 class="main dark">Contáctanos <span>Ahora</span></h2>
									<p class="main dark">Puedes contactarnos en cualquier momento, responderemos lo mas pronto posible.</p>
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
											<button class="button acept" type="submit">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>