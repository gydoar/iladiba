<?php get_header(); ?>

<div class="articulo">
		<div class="container left miga__de__pan">
			<?php echo breadcrumbs(); ?>
		</div>	
		<!-- Lo mas destacado -->
		<div class="container sector-2">
			<div class="row">
				<div class="nine columns left ">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Cajas destacado -->
					<div class="row articulo__contenido">
						<!--OPCIONES ARTICULO-->
						<div class="twelve columns opcionesArt">
							<div class="six columns zoom">
								<div id="text-resizer-controls">
									<a href="#nogo" class="zoom A1">A</a>
									<a href="#nogo" class="zoom A2">A</a>
									<a href="#nogo" class="zoom A3">A</a>
								</div>		
								<a href="" class="print"></a>
								<a href="mailto:?subject=Te han compartido un link de interés&body=Hola, alguien compartio el siguiente enlace contigo. <?php the_permalink(); ?>" class="mail"></a>
							</div>
							<div class="six columns compartidos right ">

								<div class="likely">
									<div class="facebook" data-url="<?php the_permalink(); ?>" data-title="<?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?>">Share</div>
								  	<div class="twitter" data-url="<?php the_permalink(); ?>" data-title="<?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?>" data-via="comuniladiba">Tweet</div>
								    <div class="gplus" data-url="<?php the_permalink(); ?>" data-title="<?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?>">Plus</div>
								</div>						
							</div>
						</div>
						<!--OPCIONES ARTICULO-->
						<div class="twelve columns fechaVisitas">
							<div class="six columns">
								<?php the_date('F j, Y'); ?>
							</div>

							<?php setPostViews(get_the_ID()); ?>
							<div class="six columns right"><?php echo getPostViews(get_the_ID()); ?></div>
						</div>
						<!--contenido articulo -->
						<div class="contenidoArt" id="content">
							<h1><?php the_title(); ?></h1>
							
							<div class="center">
								<?php 
									if(has_post_thumbnail()){
										the_post_thumbnail('thumb-post');
									}
								?>
							</div>
							
							
							<?php the_content(); ?>

						</div>

						
						<!-- fin contenido articulo -->
						<div class="paginador">
							<div class="row">
								<?php $prev_post = get_previous_post(); ?>

								<?php if ( !empty( $prev_post ) ) : ?>  
									<div class="six columns"><a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="btnPag btnPrev">< Artículo Anterior</a>
									</div>
								<?php endif; ?>

								
								<?php $next_post = get_next_post(); ?>

								<?php if ( !empty( $next_post ) ) : ?>
						
									<div class="six columns"><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="btnPag btnNext">Artículo Siguiente ></a></div>

								<?php endif; ?>

								
								
							</div>
						</div>
						<!--OPCIONES ARTICULO-->
						<div class="twelve columns opcionesArt">
							<div class="six columns zoom">
								<div id="text-resizer-controls">
									<a href="#nogo" class="zoom A1">A</a>
									<a href="#nogo" class="zoom A2">A</a>
									<a href="#nogo" class="zoom A3">A</a>
								</div>	
								<a href="" class="print"></a>
								<a href="mailto:?subject=Te han compartido un link de interés&body=Hola, alguien compartio el siguiente enlace contigo. <?php the_permalink(); ?>" class="mail"></a>
							</div>
							<div class="six columns compartidos right ">
								<div class="likely">
									<div class="facebook" data-url="<?php the_permalink(); ?>" data-title="<?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?>">Share</div>
								  	<div class="twitter" data-url="<?php the_permalink(); ?>" data-title="<?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?>" data-via="comuniladiba">Tweet</div>
								    <div class="gplus" data-url="<?php the_permalink(); ?>" data-title="<?php if (strlen($post->post_title) > 40) { echo substr(the_title($before = '', $after = '', FALSE), 0, 40) . '...'; } else { the_title(); } ?>">Plus</div>
								</div>								
							</div>
						</div>
						<!--TAGS ARTICULO-->
						<div class="twelve columns tagsarticulo">
							<div class="one columns rojo">Tags:</div>
							<div class="eleven columns"> 
								<a href=""><?php the_tags( '', ', ' ); ?> </a>
								
							</div>
						</div>
						<!--ARTICULOS RELACIONADOS-->


						<!-- Funcion para obtener los articulos relacionados -->

					
						<!-- Fin de la funcion para articulos relacionados -->
						<div class="relacionados">
							<h2 class="rojo">Articulos Relacionados</h2>
							<ul>

								<?php 

									$tags = wp_get_post_tags($post->ID );
									if ($tags) {
										$first_tag = $tags[0] -> term_id;
										$args = array(
											'tag__in' => array($first_tag),
											'post__not_in' => array($post->ID),
											'posts_per_page' => 4,
											'caller_get_posts' => 1
											);
										$my_query = new wp_query($args);
										if($my_query -> have_posts()){
											while ($my_query -> have_posts()):$my_query -> the_post(); ?>
											
											<li>
												<h3><?php the_title(); ?></h3>
												<a class="boton_vermas" href="<?php the_permalink(); ?>">Ver más ></a>
											</li>

											<?php endwhile; ?>
										
										<?php } ?>

									<?php } ?>
								
							</ul>
						</div>
						<div class="facebook">
							<div class="fb-comments" data-href="http://localhost/iladiba" data-width="100%" data-numposts="5"></div>
						</div>
					</div>
					
					<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					

				</div>
				<!-- Revista home -->
				<div class="three columns reset">

					<?php get_sidebar('sidebar1'); ?>

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
