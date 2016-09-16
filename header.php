<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div class="container">

    <?php $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
    
    <!-- Banner Desplegable Home Header 1200 x 60-->
    <!-- Se mostrara solo si esta en el Home-->
    <?php if ($url_actual == 'http://localhost/iladiba/') { ?>

          <div class="banner__home__header">
            <?php echo cs_get_option( 'publicidad_header_desktop' ); ?>
          </div> 

          <div class="twelve columns ads__header_phone center">
            <?php echo cs_get_option( 'publicidad_header_smartphone' ); ?>
          </div>

    <?php }else{ ?>
        

    <?php } ?>


  </div>
  
    <!-- Header -->
    <header>
      <div class="container">
        <!-- Menu top header -->
        <section class="right__menu__top__header">
          
          <ul class="menu__top__header">
            <?php wp_nav_menu(array(
              'theme_location' => 'menu-top',
              'menu_class'     => 'menu__top__header'
            )); ?>
          </ul>

          <!-- Menu login Header-->
          <ul class="menu__login">
            <li><a href="#">Login</a></li>
            <li><a class="color__rojo" href="#">Suscríbase ></a></li>
          </ul>

          <!-- Menu Social Header -->
          <ul class="menu__social__header">

            <?php 
              $link_twitter = cs_get_option( 'twitter_link' );
              $link_facebook = cs_get_option( 'facebook_link' );
              $link_linkedin = cs_get_option( 'linkedin_link' );
            ?>

              <?php if ($link_twitter != "") { ?>

                <a target="new" href="<?php echo $link_twitter; ?>"><img src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/ico_tw.png" alt="Twitter"></a>
              
              <?php } ?>
              
              <?php if ($link_facebook != "") { ?>

              <a target="new" href="<?php echo $link_facebook; ?>"><img src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/ico_fb.png" alt="Facebook"></a>

              <?php } ?>

              <?php if ($link_facebook != "") { ?>
              
              <a target="new" href="<?php echo $link_linkedin; ?>"><img src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/ico_in.png" alt="Linkedin"></a>

              <?php } ?>

          </ul>
        </section>
      </div>

      <!-- Logo y menu principal -->
      <div class="logo__menu__header">
        <div class="container">
          <!-- Logo -->
          <div class="three columns logo">
            <h1><a href="<?php echo home_url('/' ); ?>"><img width="250px" src="<?php bloginfo('stylesheet_directory' ); ?>/library/images/header/logo.png" alt="Logo"></a></h1>
          </div>
          
          <!-- Menu principal -->
          <nav class="seven columns menu__header">
            <?php wp_nav_menu(array(
              'theme_location' => 'menu-header',
              'container'      => 'nav',
              'container_class'=> 'nav'
            )); ?>
          </nav>

          <!-- Buscador -->
          <div class="two columns buscar">
            <div class="line__left__buscar"></div>
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
        
      
    </header>
