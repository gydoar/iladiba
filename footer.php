		<!-- Footer -->
		<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
			<!-- Menu Footer -->
			<div class="menu__footer container">
				<?php wp_nav_menu(array(
	              'theme_location' => 'menu-footer'
	            )); ?>
			</div>

			<!-- Logos Footer -->
			<div class="footer__logos">
				<div class="container">
					<h3>Educación en Salud</h3>
					<ul >
						<?php 
							$image_id = cs_get_option( 'logo_footer_1' );
							$attachment = wp_get_attachment_image_src( $image_id, 'full' );
						 ?>

						<li><a target="new" href="<?php echo cs_get_option( 'link_footer_1' ); ?>"><img width="132px" src="<?php echo $attachment[0]; ?>" alt="Logo Emsa"></a></li>
						
						<?php 
							$image_id = cs_get_option( 'logo_footer_2' );
							$attachment = wp_get_attachment_image_src( $image_id, 'full' );
						 ?>

						<li><a target="new" href="<?php echo cs_get_option( 'link_footer_2' ); ?>"><img width="70px" src="<?php echo $attachment[0]; ?>" alt="Logo Fundación Iladiba"></a></li>

						<?php 
							$image_id = cs_get_option( 'logo_footer_3' );
							$attachment = wp_get_attachment_image_src( $image_id, 'full' );
						 ?>

						<li><a target="new" href="<?php echo cs_get_option( 'link_footer_3' ); ?>"><img width="238px" src="<?php echo $attachment[0]; ?>" alt="Logo Iladiba"></a></li>

						<?php 
							$image_id = cs_get_option( 'logo_footer_4' );
							$attachment = wp_get_attachment_image_src( $image_id, 'full' );
						 ?>

						<li><a target="new" href="<?php echo cs_get_option( 'link_footer_4' ); ?>"><img width="223px" src="<?php echo $attachment[0]; ?>" alt="Logo Cursos Iladiba"></a></li>
						
						<?php 
							$image_id = cs_get_option( 'logo_footer_5' );
							$attachment = wp_get_attachment_image_src( $image_id, 'full' );
						 ?>

						<li><a target="new" href="<?php echo cs_get_option( 'link_footer_5' ); ?>"><img width="181px" src="<?php echo $attachment[0]; ?>" alt="Logo Salud Hoy"></a></li>
					</ul>
				</div>
			</div>

			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="six columns">
						<!-- Contact copyright -->
						<ul class="copyright__contact">
							<li>
								<img width="21px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/footer/icon_map.png" alt="Icon Map">
								<p><?php echo cs_get_option( 'direccion_footer' ); ?><br><?php echo cs_get_option( 'ciudad_footer' ); ?></p>
							</li>
							<li>
								<img width="22px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/footer/icon_tel.png" alt="Icon Tel">
								<p><?php echo cs_get_option( 'telefono_movil_footer' ); ?><br><?php echo cs_get_option( 'telefono_fijo_footer' ); ?></p>
							</li>
						</ul>
						
						<!-- Iconos sociales copyright -->

						<?php 
			              $link_twitter = cs_get_option( 'twitter_link' );
			              $link_facebook = cs_get_option( 'facebook_link' );
			              $link_linkedin = cs_get_option( 'linkedin_link' );
			            ?>

						<ul class="copyright__social">

							<li>

								<?php if ($link_twitter != "") { ?>

								<a target="new" href="<?php echo $link_twitter; ?>"><img widthn="12px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/footer/icon_twitter.png" alt="Twitter"></a>
								
								<?php } ?>

							</li>
							
							<li>
								
								<?php if ($link_facebook != "") { ?>

								<a target="new" href="<?php echo $link_facebook; ?>"><img widthn="12px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/footer/icon_facebook.png" alt="Facebook"></a>

								<?php } ?>

							</li>

							<li>
								
								<?php if ($link_linkedin != "") { ?>

								<a target="new" href="<?php echo $link_linkedin ?>"><img widthn="12px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/footer/icon_linkedin.png" alt="Linkeding"></a>

								<?php } ?>

							</li>
						</ul>
					</div>

					<!-- Texto y logo Tekton Copyright -->
					<div class="six columns logo__footer">
						<div class="row">
							<div class="nine columns text__copyright center">
								<p><strong><?php echo cs_get_option( 'titulo_copyright' ); ?></strong></p>
								<p><?php echo cs_get_option( 'parrafo_copyright' ); ?></p>
							</div>

							<div class="three columns">
								<a target="new" href="#" class="logoTK"><img height="81px" class="" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/footer/logo_tekton.png" alt="Logo Tekton"></a>
							</div>
						</div>
							
						
					</div>
				</div>
			</div>
		</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
