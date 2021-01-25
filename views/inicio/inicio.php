<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/marketing/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','estilos_form.css','comp_slider.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$inicio = "active";
include VIEWS.'templates/header.php';
?>
<div class="slider_full_start">
	<div class="wrap_slider">
		<section class="active">
			<div class="back"></div>
			<div class="wrap_mult">
				<div class="titulo">
					<div class="text">
						Marketing
						<span>Digital</span>
					</div>
					<p>A lo largo de los años, tanto el Marketing como su definición también han ido evolucionando, así como los procesos y estrategias que lo engloban también se han ido adaptando a los mercados y a las nuevas tendencias.</p>
					<div class="content_button">
						<button onclick="window.location = '<?php echo HOST?>contacto'" class="button btn_inline" type="button">Contacto</button>
						<button onclick="window.location = '<?php echo HOST?>acerca'" class="button btn_outline btn_inline" type="button">Acerca de</button>
					</div>
				</div>
				<div class="file_multimedia">
					<img class="file" src="<?php echo IMG?>default/g1.jpg" alt="" />
				</div>
			</div>
		</section>
		<section>
			<div class="back"></div>
			<div class="wrap_mult">
				<div class="titulo">
					<div class="text">
						Estrategias de
						<span>Ventas</span>
					</div>
					<p>Las estrategias de venta son uno de los pilares más importantes en cualquier empresa para poder conseguir unos buenos resultados económicos.</p>
					<div class="content_button">
						<button onclick="window.location = '<?php echo HOST?>contacto'" class="button btn_inline" type="button">Contacto</button>
						<button onclick="window.location = '<?php echo HOST?>acerca'" class="button btn_outline btn_inline" type="button">Acerca de</button>
					</div>
				</div>
				<div class="file_multimedia">
					<img class="file" src="<?php echo IMG?>default/g1.jpg" alt="" />
				</div>
			</div>
		</section>
		<section>
			<div class="back"></div>
			<div class="wrap_mult">
				<div class="titulo">
					<div class="text">
						Marketing
						<span>Online</span>
					</div>
					<p>En la era Internet, de los nuevos medios y de las redes sociales, y ante la imparable evolución de tecnologías como el Big data o la inteligencia artificial de nuestros días.</p>
					<div class="content_button">
						<button onclick="window.location = '<?php echo HOST?>contacto'" class="button btn_inline" type="button">Contacto</button>
						<button onclick="window.location = '<?php echo HOST?>acerca'" class="button btn_outline btn_inline" type="button">Acerca de</button>
					</div>
				</div>
				<div class="file_multimedia">
					<img class="file" src="<?php echo IMG?>default/g1.jpg" alt="" />
				</div>
			</div>
		</section>
		<section>
			<div class="back"></div>
			<div class="wrap_mult">
				<div class="titulo">
					<div class="text">
						Email
						<span>Marketing</span>
					</div>
					<p>Email Marketing es un conjunto de estrategias llevadas a cabo por empresas para darle visibilidad a sus contenidos y ofertas.</p>
					<div class="content_button">
						<button onclick="window.location = '<?php echo HOST?>contacto'" class="button btn_inline" type="button">Contacto</button>
						<button onclick="window.location = '<?php echo HOST?>acerca'" class="button btn_outline btn_inline" type="button">Acerca de</button>
					</div>
				</div>
				<div class="file_multimedia">
					<img class="file" src="<?php echo IMG?>default/g1.jpg" alt="" />
				</div>
			</div>
		</section>
		<div class="btn_horizontal btn_left"><i class="icon-arrow-c"></i></div>
		<div class="btn_horizontal btn_right"><i class="icon-arrow-c"></i></div>
		<div id="btn_start" class="btn_down"><i class="icon-arrow-c"></i></div>
		<div class="btn_panel">
			<div class="circle active"></div>
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
		</div>
	</div>
</div>
<main>
	<div class="main" id="inicio">
		<div class="contenido">
			<!-- Acerca de -->
			<div id="target_btn_start" class="wrap_about">
				<!-- <div class="background"></div> -->
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
								<h3>Marketing <span>Digital</span></h3>
								<p>De los nuevos medios y de las redes sociales, y ante la imparable evolución de tecnologías como el Big data o la inteligencia artificial.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--  -->
			<!-- Servicios -->
			<div class="wrap_servicios">
				<div class="background"></div>
				<div class="content_wrap_servicios">
					<h2 class="main dark">Soluciones de <span>Marketing</span></h2>
					<p class="main dark">Ofrecemos soluciones digitales en los aspectos estratégicos que pueden desarrollarse de forma planificada para su empresa.</p>
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
			<!-- Comentarios -->
			<div class="wrap_comentarios">
				<div class="background"></div>
				<div class="content_wrap_comentarios">
					<h2 class="main">Comentarios de <span>Marketing</span></h2>
					<p class="main">Conjunto de técnicas o estrategias utilizadas para estudiar el comportamiento de los mercados.</p>
					<div class="wrap_slider_scroll">
						<div class="contenido_comentarios slider_scroll">
							<div class="content_slider_scroll">
								<div class="elemento_comentario slider_section">
									<div class="file_m">
										<img class="file" src="<?php echo IMG?>personas/p1.jpg" alt="">
									</div>
									<div class="titulo">
										<div class="props">
											<h3>Jack <span>Smith</span></h3>
											<p class="comentario">"El Marketing es la actividad, el conjunto de instituciones y los procesos para crear, comunicar, entregar, e intercambiar ofertas que tienen valor para los clientes, los socios y la sociedad en general."</p>
										</div>
										<p class="cargo">Jefe de marketing</p>
									</div>
								</div>
								<div class="elemento_comentario slider_section">
									<div class="file_m">
										<img class="file" src="<?php echo IMG?>personas/p2.jpg" alt="">
									</div>
									<div class="titulo">
										<div class="props">
											<h3>Andrew <span>Kenner</span></h3>
											<p class="comentario">"Marketing es un intercambio de comunicación permanente con los clientes de una manera que educa, informa y construye una relación con el tiempo. Sólo con el tiempo se puede construir la confianza."</p>
										</div>
										<p class="cargo">Accesor</p>
									</div>
								</div>
								<div class="elemento_comentario slider_section">
									<div class="file_m">
										<img class="file" src="<?php echo IMG?>personas/p3.jpg" alt="">
									</div>
									<div class="titulo">
										<div class="props">
											<h3>Karen <span>Jones</span></h3>
											<p class="comentario">"Marketing es la ciencia y el arte de explorar, crear y entregar valor para satisfacer las necesidades de un mercado objetivo con un beneficio. El Marketing identifica necesidades y deseos insatisfechos."</p>
										</div>
										<p class="cargo">Analista</p>
									</div>
								</div>
								<div class="elemento_comentario slider_section">
									<div class="file_m">
										<img class="file" src="<?php echo IMG?>personas/p4.jpg" alt="">
									</div>
									<div class="titulo">
										<div class="props">
											<h3>Ray <span>Scott</span></h3>
											<p class="comentario">"Marketing es la ciencia y el arte de explorar, crear y entregar valor para satisfacer las necesidades de un mercado objetivo con un beneficio. El Marketing identifica necesidades y deseos insatisfechos."</p>
										</div>
										<p class="cargo">Abogado</p>
									</div>
								</div>
							</div>
						</div>
						<div class="btn_horizontal btn_left disable"><i class="icon-arrow-c"></i></div>
						<div class="btn_horizontal btn_right"><i class="icon-arrow-c"></i></div>
						<!-- <div class="btn_panel">
							<div class="circle active"></div>
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div> -->
					</div>
				</div>
			</div>
			<!--  -->
			<!-- Contacto -->
			<div class="wrap_contacto">
				<div class="capa_background_contacto"></div>
				<div class="content_contacto animacion anim_arriba_s">
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
		<div id="theater" class="theater" data="">
			<div index="" class="indicador"></div>
			<div class="close"><i class="icon-cancelar"></i></div>
			<div index="" class="btn_left"><i class="icon-arrow-c"></i></div>
			<div index="" class="btn_right"><i class="icon-arrow-c"></i></div>
			<div class="theater_main">
				<div class="theater_content">
					<img index="0" src="" id="img_theater">
				</div>
			</div>
		</div>
		<div id="div_mod_eliminar"></div>
	</div>	
</main>
<?php
$scripts = ['comp_slider.js','comp_slider_scroll.js','comp_modal.js'];
include VIEWS.'templates/footer.php'; 
include VIEWS.'templates/foot.php';
?>