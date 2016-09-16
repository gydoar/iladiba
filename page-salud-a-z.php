<?php get_header(); ?>

	<div class="articulo">
		<div class="container left miga__de__pan">
			<?php echo breadcrumbs(); ?>
		</div>	
		
		<!-- Lo mas destacado -->
		<div class="container sector-2">
			<div class="row">
				<div class="twelve columns left ">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Cajas destacado -->
					<div class="row articulo__contenido">
						
						
						<!--contenido articulo -->
						<div class="contenidoArt" id="content">
							<h1 class="center"><?php the_title(); ?></h1>
							
							
							<?php the_content(); ?>

						</div>		
	
					</div>
					
					<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					

				</div>
			</div>
		</div>

	</div>


<?php get_footer(); ?>
