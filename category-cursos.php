<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

			<div class="mapa-sitio">
		<div class="container left miga__de__pan">
			<?php echo breadcrumbs(); ?>
		</div>	
		<!-- Lo mas destacado -->
		<div class="container">

			<div class="row">
				<div class="nine columns left">
					<!-- Cajas destacado -->
					<div class="row cajas__destacado">	

						<!--OPCIONES ARTICULO-->
						
						<ul class="historico">

							<?php
								rewind_posts(); 
								global $wp_query;
								$wp_query = new WP_Query("post_type=cursos&post_status=publish");
							?>

							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<li>
								<div class="rows">
									<div class="nine columns">
										<h4 class="titulo3"><?php the_title(); ?></h4>

										<h6 class="fecha rojo"><?php the_date('F j, Y'); ?></h6>
										<p><?php excerpt(20); ?></p>
									</div>
									<div class="three columns">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumb-archive');
											}
										 ?>
										<a href="<?php the_permalink(); ?>" class="boton_vermas">Ver más ></a>
									</div>
								</div>
							</li>
							

							<?php endwhile; ?>
													
						</ul>

						<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

					</div>
				</div>
				<!-- Revista home -->
				<div class="three columns ">

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
