<?php
/* Welcome to Bones :)
This is the core Bones file where most of the
main functions & features reside. If you have
any custom functions, it's best to put them
in the functions.php file.

Developed by: Eddie Machado
URL: http://themble.com/bones/

  - head cleanup (remove rsd, uri links, junk css, ect)
  - enqueueing scripts & styles
  - theme support functions
  - custom menu output & fallbacks
  - related post function
  - page-navi function
  - removing <p> from around images
  - customizing the post excerpt

*/

/*********************
WP_HEAD GOODNESS
The default wordpress head is
a mess. Let's clean it up by
removing all the junk we don't
need.
*********************/

function bones_head_cleanup() {
	// category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	// remove WP version from css
	add_filter( 'style_loader_src', 'bones_remove_wp_ver_css_js', 9999 );
	// remove Wp version from scripts
	add_filter( 'script_loader_src', 'bones_remove_wp_ver_css_js', 9999 );

} /* end bones head cleanup */

// A better title
// http://www.deluxeblogtips.com/2012/03/better-title-meta-tag.html
function rw_title( $title, $sep, $seplocation ) {
  global $page, $paged;

  // Don't affect in feeds.
  if ( is_feed() ) return $title;

  // Add the blog's name
  if ( 'right' == $seplocation ) {
    $title .= get_bloginfo( 'name' );
  } else {
    $title = get_bloginfo( 'name' ) . $title;
  }

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );

  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title .= " {$sep} {$site_description}";
  }

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 ) {
    $title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) );
  }

  return $title;

} // end better title

// remove WP version from RSS
function bones_rss_version() { return ''; }

// remove WP version from scripts
function bones_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

// remove injected CSS for recent comments widget
function bones_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

// remove injected CSS from recent comments widget
function bones_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}

// remove injected CSS from gallery
function bones_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}


/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function bones_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

		// modernizr (without media query polyfill)
		wp_register_script( 'bones-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );

		wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/library/js/jquery.min.js', array(), '2.5.3', true );

		wp_register_script( 'jquery-flex', get_stylesheet_directory_uri() . '/library/js/jquery.flexslider.js', array(), '2.5.3', true );

		wp_register_script( 'ideal-image', get_stylesheet_directory_uri() . '/library/js/ideal-image-slider.js', array(), '2.5.3', true );

		wp_register_script( 'lis-caption', get_stylesheet_directory_uri() . '/library/js/iis-captions.js', array(), '2.5.3', true );

		wp_register_script( 'text-resizer', get_stylesheet_directory_uri() . '/library/js/jquery.textresizer.js', array(), '2.5.3', true );

		wp_register_script( 'likely', get_stylesheet_directory_uri() . '/library/js/likely.js', array(), '2.5.3', true );

		// register main stylesheet
		wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );

		// ie-only style sheet
		wp_register_style( 'bones-ie-only', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		  wp_enqueue_script( 'comment-reply' );
    }

    	wp_register_script( 'bones-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array(), '2.5.3', true );




		// enqueue styles and scripts
		wp_enqueue_script( 'bones-modernizr' );
		wp_enqueue_style( 'bones-stylesheet' );
		wp_enqueue_style( 'bones-ie-only' );

		$wp_styles->add_data( 'bones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		/*
		I recommend using a plugin to call jQuery
		using the google cdn. That way it stays cached
		and your site will load faster.
		*/
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-flex' );
		wp_enqueue_script( 'ideal-image' );
		wp_enqueue_script( 'lis-caption' );
		wp_enqueue_script( 'text-resizer' );
		wp_enqueue_script( 'likely' );

		wp_enqueue_script( 'bones-js' );
		

	}
}

/*********************
THEME SUPPORT
*********************/

// Adding WP 3+ Functions & Theme Support
function bones_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support( 'post-thumbnails' );

	// default thumb size
	set_post_thumbnail_size(125, 125, true);

	// wp custom background (thx to @bransonwerner for update)
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',    // background image default
	    'default-color' => '',    // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);

	// rss thingy
	add_theme_support('automatic-feed-links');

	// to add header image support go here: http://themble.com/support/adding-header-background-image-support/


	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'menu-top' => __( 'El menu del top', 'bonestheme' ),   // Menu para el top
			'menu-header' => __( 'El menu principal', 'bonestheme' ),   // main nav in header
			'menu-footer' => __( 'Menu del footer', 'bonestheme' ) // secondary nav in footer
		)
	);

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form'
	) );

} /* end bones theme support */


/*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function (call using bones_related_posts(); )
function bones_related_posts() {
	echo '<ul id="bones-related-posts">';
	global $post;
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 5, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post"><a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; }
		else { ?>
			<?php echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'bonestheme' ) . '</li>'; ?>
		<?php }
	}
	wp_reset_postdata();
	echo '</ul>';
} /* end bones related posts function */

/*********************
PAGE NAVI
*********************/

/*
Creamos la funcion para procesar la páginación
*/
function wp_corenavi() {
	global $wp_query, $wp_rewrite;
	$pages = " ";
	$max = $wp_query->max_num_pages;
		if (!$current = get_query_var('paged')) $current = 1;
		$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
		$a['total'] = $max;
		$a['current'] = $current;
	$total = 1; //1 – muestra el texto “Página N de N”, 0 – para no mostrar nada
	$a['mid_size'] = 5; //cuantos enlaces a mostrar a izquierda y derecha del actual
	$a['end_size'] = 1; //cuantos enlaces mostrar al comienzo y al fin
	$a['prev_text'] = '<< Anterior'; //texto para el enlace “Página siguiente”
	$a['next_text'] = 'Siguiente >>'; //texto para el enlace “Página anterior”
		if ($max > 1) echo '<div class="paginador"> <div class="row">';

		echo $pages . paginate_links($a);

		if ($max > 1) echo '</div></div>';
}


/*********************
RANDOM CLEANUP ITEMS
*********************/

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function bones_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)."...";
	echo $excerpt;
}


/*********************
Cuenta el numero de visitas que hemos tenido en nuestro articulo
*********************/

function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 Visitas";
		}
	return $count.' Visitas';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
		if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
			}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
			}
}



/*********************
Ahora mostramos la estadistica para cada articulo dentro de nuestra administracion, generando una nueva columna donde se muestran el numero de visitas para cada articulo.
*********************/
function posts_column_views($defaults){
	$defaults['post_views'] = __('Visitas');
	return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
	echo getPostViews(get_the_ID());
	}
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);




//Migas de pan
//* Integra migas de pan a WordPress sin plugin
function breadcrumbs(){
   $sep = " &gt; ";
   $home_breadcrumb     = '<a href="'.get_bloginfo('url').'" title="'.esc_attr(__('Go to main page','theme')).'">'."Inicio".'</a>';
   $search_breadcrumb   = '';
   $single_breadcrumbs  = '';
   $cat_breadcrumbs     = '';
 
   if (is_search()){
      $search_breadcrumb .= $sep.'<span>'.__('Busqueda en el sitio','theme').'</span>';
      $search_breadcrumb .= $sep.'<span>'.get_query_var('s').'</span>';
   }elseif (is_home() || is_front_page()){
      // nada más
   }elseif (is_singular()){
      global $post;
      $post_ancestors = get_post_ancestors($post);
      if ($post_ancestors) {
         $post_ancestors = array_reverse($post_ancestors);
         $post_ancestors[] = $post;
         foreach ($post_ancestors as $p){
            $single_breadcrumbs .= $sep.'<a href="'.get_permalink($p).'" title="'.esc_attr(sprintf(__('Go to page %s','theme'),get_the_title($p))).'">'.get_the_title($p).'</a>';
         }
      }
      if (is_single() && has_category()){
         $post_cats = wp_get_post_categories($post->ID);
         if (!empty($_SESSION['last_cat']) && in_array($_SESSION['last_cat'],$post_cats)){
            $cat_id = $_SESSION['last_cat'];
         }else{
            $cat_id = is_array($post_cats) && count($post_cats) ? $post_cats[0] : false;
         }
      }
   }
 
   if (is_category()){
      $cat_id = (int)get_query_var('cat');
      $_SESSION['last_cat'] = $cat_id;
   }
 
   while ($cat_id){
      $cat = get_category($cat_id);
      $cat_breadcrumbs = $sep.'<a href="'.esc_url(get_category_link($cat_id)).'">'.$cat->name.'</a>'
                        .$cat_breadcrumbs;
      if ($cat->parent){
         $cat_id = (int)$cat->parent;
      }else{
         $cat_id = false;
      }
   }
 
   return $home_breadcrumb.$cat_breadcrumbs.$single_breadcrumbs.$search_breadcrumb;
}

?>
