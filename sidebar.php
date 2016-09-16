				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">


						
				<div class="barLat">

					
					<!--Widget lateral ================= -->
					<div class="revista__home">
						<?php
							rewind_posts(); 
							global $wp_query;
							$wp_query = new WP_Query("post_type=revista&post_status=publish&posts_per_page=1");
						?>

						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<a href="<?php the_permalink(); ?>">
							<h3>Última Edición Revisada</h3>
							<div class="vimg">
								<?php 
									if(has_post_thumbnail()){
										the_post_thumbnail('thumb-revista');
									}
								?>	
							</div>
							<?php 
								$date = DateTime::createFromFormat('Ymd', get_field('inicio_de_publicacion'));
								$date2 = DateTime::createFromFormat('Ymd', get_field('fecha_de_terminacion')); 
							 ?>
							<p class="fecha"><?php echo $date->format('F'); ?> - <?php echo $date2->format('F Y'); ?></p>
							<span class="boton_vermas boton_3" >Ver más ></span>
						</a>

						<?php endwhile; ?>

					</div>
					<!--FIN ================= -->
					<!--WIDGET RECOMENDADO EDITOR-->
					<div class="recomendados__editor__home">
						<h4 class="cajaazul"><a href="#"><?php echo get_cat_name(211); ?></a></h4>
						<ul class="puntosLI">
							<?php
								rewind_posts(); 
								global $wp_query;
								$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=212");
							?>
							
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<li><!--PLANTILLA INTERNA-->
								<a href="<?php the_permalink(); ?>">
									<h5><?php echo get_cat_name(212); ?></h5>
									<h2 class="bold"><?php if (strlen($post->post_title) > 80) { echo substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; } else { the_title(); } ?></h2>
									<p>En líneas generales puede decirse que la cirugía de la obesidad y procedimientos invasivos. El Comité de Servicios Preventivos de Estados Unidos (USPSTF sigla de United States Preventive Services Task Force) emitió una actualización de su guía de tamización para diabetes. </p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>
							</li><!--FIN PLANTILLA INTERNA-->
							
							<?php endwhile; ?>



							<?php
								rewind_posts(); 
								global $wp_query;
								$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=213");
							?>
							
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<li><!--PLANTILLA INTERNA-->
								<a href="<?php the_permalink(); ?>">
									<h5><?php echo get_cat_name(213); ?></h5>
									<h2 class="bold"><?php if (strlen($post->post_title) > 80) { echo substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; } else { the_title(); } ?></h2>
									<p>En líneas generales puede decirse que la cirugía de la obesidad y procedimientos invasivos. El Comité de Servicios Preventivos de Estados Unidos (USPSTF sigla de United States Preventive Services Task Force) emitió una actualización de su guía de tamización para diabetes. </p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>
							</li><!--FIN PLANTILLA INTERNA-->
							
							<?php endwhile; ?>

						</ul>
					</div>
					<!--FIN WIDGET RECOMENDADO EDITOR-->
					<div class="banner__sidebar">
						<div class="center">
							<?php if ($_SERVER["REQUEST_URI"] == '/iladiba/mapa-del-sitio.php') { ?>
								<a href="#"><img  src="http://dummyimage.com/300x250/d9d6d9/000" alt=""></a>
							<?}else{?>
								<?php echo cs_get_option( 'publicidad_sidebar_post' ); ?>
							<?};?>
							
						</div>
					</div>
					
					
					<!-- Newsletter sidebar home -->
					<div class="twelve columns newsletter center">
						<h4><a href="#">Regístrese al Newsletter ILADIBA</a></h4>
						<div class="bg-gray center">
							<p><span>Para enterarse de las noticias más relevantes de Salud</span></p>
							<input type="text" placeholder="Correo electrónico"><br>
							<a class="boton_vermas boton_2" href="#">Regístrese ></a>
						</div>
					</div>

					<div class="twelve columns salud__a__z">
							<h4 class="cajaazul"><a href="#">Salud de la A a la Z</a></h4>
							<div class="bg-gray">
								<ul>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_A' ); ?>">A</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_B' ); ?>">B</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_C' ); ?>">C</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_D' ); ?>">D</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_E' ); ?>">E</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_F' ); ?>">F</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_G' ); ?>">G</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_H' ); ?>">H</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_I' ); ?>">I</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_J' ); ?>">J</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_K' ); ?>">K</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_L' ); ?>">L</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_M' ); ?>">M</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_N' ); ?>">N</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_O' ); ?>">O</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_P' ); ?>">P</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_Q' ); ?>">Q</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_R' ); ?>">R</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_S' ); ?>">S</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_T' ); ?>">T</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_U' ); ?>">U</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_V' ); ?>">V</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_W' ); ?>">W</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_X' ); ?>">X</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_Y' ); ?>">Y</a></li>
									<li><a href="<?php echo home_url('/salud-a-z/#gti_Z' ); ?>">Z</a></li>
								</ul>
							</div>
						</div>	
					</div>
					
				</div>
