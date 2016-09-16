<?php get_header(); ?>

			<div class="articulo">
		
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
						</div>
						
						<!--contenido articulo -->
						<div class="contenidoArt" id="content">
							<h1><?php the_title(); ?> </h1>
							
							
							<?php the_content(); ?>

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

	</div>


<?php get_footer(); ?>
