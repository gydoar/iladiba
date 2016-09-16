<?php
/*
 Template Name: Página de inicio
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>


<div class="home">
	
		<!-- Slidershow -->
		<div class="container">
			<div class="row">
				<!-- Slideshow -->
				<div class="eight columns">

					
					<div id="slider">


						 <a href="#"><img src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/home/slider/slide1.jpg" data-src-2x="<?php bloginfo('stylesheet_directory' ); ?>/library/images/home/slider/slide1.png" title="Abril 25 2016" alt="FDA alerta sobre arritmias con azitromicina" /></a>
						
					</div>


				</div>
				
				
				<div class="four columns art__slide__home">
					<div class="">
						<ul>

							<?php
								rewind_posts(); 
								global $wp_query;
								$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=3&cat=214");
							?>
							
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<li>
								<p><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></p>
								<a class="boton_vermas" href="<?php the_permalink(); ?>">Ver más ></a>
							</li>	

							<?php endwhile; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Lo mas destacado -->
		<div class="container sector-2">
			<div class="row">
				<div class="nine columns lo__mas__destacado">
					<h3><?php echo get_cat_name(205);?></h3> <div class="line__destacado__home"></div>
					<!-- Cajas destacado -->
					<div class="row cajas__destacado">
						<div class="four columns center">
							<!--INI WIDGET LO MAS DESTACADO===========-->
							<div class="widget_dest">
								<!--NOTICIA CON IMAGEN-->

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=205");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destsup">
									<div class="vimg">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumb-mas-destacado');
											}
										 ?>
									</div>

									<p><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></p>

									<span class="boton_vermas boton_2">Ver más ></span>

								</a>

								<?php endwhile; ?>

								<!--NOTICIA SIN IMAGEN-->
								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=205&offset=1");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destinf">
									<p><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>

								<?php endwhile; ?>
							</div>
							<!-- FIN===================================-->
						</div>
						<div class="four columns center">
							<!--INI WIDGET LO MAS DESTACADO===========-->
							<div class="widget_dest">
								<!--NOTICIA CON IMAGEN-->
								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=205&offset=2");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destsup">
									<div class="vimg">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumb-mas-destacado');
											}
										 ?>
									</div>
									<p><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>

								<?php endwhile; ?>
								<!--NOTICIA SIN IMAGEN-->

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=205&offset=3");
								?>
								
								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destinf">
									<p><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>

								<?php endwhile; ?>

							</div>
							<!-- FIN===================================-->
						</div>
						<div class="four columns center">
							<!--INI WIDGET LO MAS DESTACADO===========-->
							<div class="widget_dest">
								<!--NOTICIA CON IMAGEN-->
								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=205&offset=4");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destsup">
									<div class="vimg">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumb-mas-destacado');
											}
										 ?>
									</div>
									<p><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>

								<?php endwhile; ?>
								<!--NOTICIA SIN IMAGEN-->

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=205&offset=5");
								?>
								
								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destinf">
									<p><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>

								<?php endwhile; ?>
							</div>
							<!-- FIN===================================-->
						</div>
					</div>
				</div>
				<!-- Revista home -->
				<div class="three columns ">
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
				</div>
			</div>
		</div>


		
		<!-- Práctica Médica -->
		<div class="container sector-3">
			<div class="row">
				<div class="seven columns practica__medica">
					<h3><?php echo get_cat_name(194);?></h3> <div class="line__destacado__home"></div>
					<div class="row cajas__practica__home">
						<div class="six columns">
							<!--WIDGET COLUMNA TITULO GRIS 3 ELEMENTOS-->
							<div class="widgetCol">
								<h4 class="cajagris"><?php echo get_cat_name(195);?></h4>
								<ul class="puntosLI">
									<?php
										rewind_posts(); 
										global $wp_query;
										$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=3&cat=195");
									?>

									<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
									
									<li>
										<h2><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></h2>
										<a href="<?php the_permalink(); ?>" class="boton_vermas boton_2">Ver más ></a>
									</li>

									<?php endwhile; ?>
								</ul>
							</div>
							<!--FIN WIDGET COLUMNA TITULO GRIS 3 ELEMENTOS-->
						</div>
						<div class="six columns">
							<!--WIDGET COLUMNA TITULO GRIS 3 ELEMENTOS-->
							<div class="widgetCol">
								<h4 class="cajagris"><?php echo get_cat_name(196);?></h4>
								<ul class="puntosLI">
									<?php
										rewind_posts(); 
										global $wp_query;
										$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=3&cat=196");
									?>
									
									<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

									<li>
										<h2><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></h2>
										<a href="<?php the_permalink(); ?>" class="boton_vermas boton_2">Ver más ></a>
									</li>

									<?php endwhile; ?>
								</ul>
							</div>
							<!--FIN WIDGET COLUMNA TITULO GRIS 3 ELEMENTOS-->
						</div>
					</div>
				</div>

				<!-- Recomendados por el editor -->
				<div class="five columns">
					<!--WIDGET RECOMENDADO EDITOR-->
					<div class="recomendados__editor__home">
						<h4 class="cajaazul"><a href="#"><?php echo get_cat_name(209);?></a></h4>
						<ul class="puntosLI">
							<?php
								rewind_posts(); 
								global $wp_query;
								$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=3&cat=209");
							?>

							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<li><!--PLANTILLA INTERNA-->
								<a href="<?php the_permalink(); ?>">
									<h2 class="bold"><?php if (strlen($post->post_title) > 55) { echo substr(the_title($before = '', $after = '', FALSE), 0, 55) . '...'; } else { the_title(); } ?></h2>
									<p><?php excerpt('20'); ?></p>
									<span class="boton_vermas boton_2">Ver más ></span>
								</a>
							</li><!--FIN PLANTILLA INTERNA-->

							<?php endwhile; ?>
						</ul>
					</div>
					<!--FIN WIDGET RECOMENDADO EDITOR-->
				</div>
			</div>
		</div>

		<!-- Atencion Primaria -->
		<div class="container sector-4">
			<div class="row">
				<!-- Atencion Primaria -->
				<div class="seven columns atencion__primaria">
					<h3><?php echo get_cat_name(197); ?></h3> <div class="line__destacado__home"></div>
					<div class="row ">
						<div class="six columns">
							<!--WIDGET ATENCIO PRIMARIA-->
							<div class="cajas__atencion__primaria">
								<h4 class="cajagris"><?php echo get_cat_name(198); ?></h4>
								
								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=198");
								?>
								
								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destacado">
									<h2><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></h2>
									<div class="vimg">
										
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumb-atencion-primaria');
											}
										 ?>
										
									</div>
									<p><?php excerpt('12'); ?></p>
									<span class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></span>
								</a>

								<?php endwhile; ?>

								<h4 class="cajagris"><?php echo get_cat_name(200); ?></h4>

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=200");
								?>
								
								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>">
									<h2 class="font-weight-300"><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></h2>
									<span class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></span>
								</a>

								<?php endwhile; ?>

								<h4 class="cajagris"><?php echo get_cat_name(202); ?></h4>

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=202");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>">
									<h2 class="font-weight-300"><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></h2>
									<span class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></span>
								</a>

								<?php endwhile; ?>
							</div>
							<!--FIN WIDGET ATENCIO PRIMARIA-->
						</div>
						<div class="six columns">
							<!--WIDGET ATENCIO PRIMARIA-->
							<div class="cajas__atencion__primaria">
								<h4 class="cajagris"><?php echo get_cat_name(199); ?></h4>

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=199");
								?>
								
								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" class="destacado">
									<h2><?php if (strlen($post->post_title) > 95) { echo substr(the_title($before = '', $after = '', FALSE), 0, 95) . '...'; } else { the_title(); } ?></h2>

									<div class="vimg">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumb-atencion-primaria');
											}
										 ?>
									</div>
									<p><?php excerpt('12'); ?></p>
									<span class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></span>
								</a>

								<?php endwhile; ?>

								<h4 class="cajagris"><?php echo get_cat_name(201); ?></h4>

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=201");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>">
									<h2 class="font-weight-300"><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></h2>
									<span class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></span>
								</a>

								<?php endwhile; ?>

								<h4 class="cajagris"><?php echo get_cat_name(203); ?></h4>

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=203");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>">
									<h2 class="font-weight-300"><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></h2>
									<span class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></span>
								</a>

								<?php endwhile; ?>
							</div>
							<!--FIN WIDGET ATENCIO PRIMARIA-->
						</div>
					</div>	
				</div>
				
				<!-- Especiales Iladiba -->
				<div class="five columns">
					<div class="especiales_iladiba">
					<h4><a href="#"><?php echo get_cat_name(210); ?></a></h4>
						<!-- Place somewhere in the <body> of your page -->
						<div class="flexslider">
						  <ul class="slides">

						  	<?php
								rewind_posts(); 
								global $wp_query;
								$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=3&cat=210");
							?>

							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						    <li>
						      <p><strong><?php if (strlen($post->post_title) > 70) { echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else { the_title(); } ?></strong>
						      	<br><br>
						      	<?php excerpt('30'); ?></p>
						      <a class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></a>
						    </li>

						    <?php endwhile; ?>
						  </ul>
						</div>
					</div>
					<!-- De interés Sidebar-->
					<div class="de__interes__sidebar__home">
						<h4 class="cajaazul"><a href="#">De Interés</a></h4>
						<div>
							<h2><a href="<?php echo cs_get_option( 'link_de_interes_sidebar' ); ?>"><?php echo cs_get_option( 'titulo_de_interes_sidebar' ); ?></a></h2>
							<div class="video-container">
								<iframe class="twelve columns" height="315" src="https://www.youtube.com/embed/<?php echo cs_get_option( 'video_de_interes_sidebar' ); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<a class="boton_vermas boton_2" href="<?php echo cs_get_option( 'link_de_interes_sidebar' ); ?>">Ver más ></a>
						</div>
					</div>


					<!-- Salud de la A a la Z Sidebar -->
					<div class="twelve columns ">
						<div class="salud__a__z">
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
			</div>
		</div>
		
		<!-- Nuestros Portales -->
		<div class="container sector-5 NuestrosPortales">
			<div class="row">
				<!-- Nuestros portales -->
				<div class="eight columns ">
					<div class="nuestros__portales">
						<h3><?php echo get_cat_name(211); ?></h3> <div class="line__destacado__home"></div>
						<div class="left">

							<ul class="puntosLI">
								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=212");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<li>
									<h4><?php echo get_cat_name(212); ?></h4>

									<h2><a href="<?php the_permalink(); ?>"><?php if (strlen($post->post_title) > 80) { echo substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; } else { the_title(); } ?></a></h2>

									<p><?php excerpt('40'); ?></p>
									<a class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></a>									
								</li>

								<?php endwhile; ?>

								<!--HOY EN SALUD HOY -->

								<?php
									rewind_posts(); 
									global $wp_query;
									$wp_query = new WP_Query("post_type=post&post_status=publish&posts_per_page=1&cat=213");
								?>

								<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<li>
									<h4><?php echo get_cat_name(213); ?></h4>

									<h2><a href="<?php the_permalink(); ?>"><?php if (strlen($post->post_title) > 80) { echo substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; } else { the_title(); } ?></a></h2>

									<p><?php excerpt('40'); ?></p>
									<a class="boton_vermas boton_2" href="<?php the_permalink(); ?>">Ver más ></a>									
								</li>

								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>

				<!-- Banner IAB y Newsletter -->
				<div class="four columns ">
					<div class="banner__sidebar">
						<div class="center">
							<?php echo cs_get_option( 'publicidad_sidebar_home' ); ?>
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
					
				</div>
			</div>
		</div>
<!--Editor jefe -->
		<div class="container editor__jefe">
			<div>
				<div class="twelve columns">
					<h3><a href="#">EDITOR JEFE PUBLICACIONES ILADIBA</a></h3> <div class="line__medicina__alternativa"></div>
				</div>
				<div class="ten columns offset-by-two">
					<div class="twelve columns">
						<div class="two columns">
							<?php 
								$image_id = cs_get_option( 'image_editor_jefe' );
								$attachment = wp_get_attachment_image_src( $image_id, 'full' );
							 ?>

							<img alt="" src="<?php echo $attachment[0]; ?>" class="twelve columns">
						</div>

						<div class="ten columns">
							<h5><?php echo cs_get_option( 'titulo_editor_jefe' ); ?></h5>
							<p><?php echo cs_get_option( 'parrafo_editor_jefe' ); ?></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>


		<!-- Banner publicitario Footer Home 728 x 90-->
		<div class="container center">
			<div class="banner__home__728">
				<?php echo cs_get_option( 'publicidad_footer_tablet' ); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>