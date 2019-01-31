<?php
/*
* Remove meta generator tag.
*/
//remove_action("wp_head", "wp_generator");
function wp_remove_version() {
  return '';
}
add_filter('the_generator', 'wp_remove_version');
/*
* Add support for title tag.
*/
add_theme_support('title-tag');
/*
* Enable support for Post Thumbnails on posts.
*/
add_theme_support('post-thumbnails', array( 'post' ));
/*
* Enable support for Post Formats.
*/
add_theme_support( 'post-formats', array(
     'aside',
     'image',
     'video',
     'quote',
     'link',
) );
// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'mindgeek_custom_background_args', array(
     'default-color' => 'FFFFFF',
     'default-image' => '',
) ) );
/*
* Enable custom logo.
*/
add_theme_support( 'custom-logo', array(
	'height'      => 132,
	'width'       => 132,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
/*
* Enable sidebar widget.
*/
//if ( function_exists('register_sidebar') ) register_sidebar();
/**
 * Add a sidebar.
 */
function mindgeek_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Colonne latérale du blog', 'mindgeek' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Ajoutez ici des widgets pour les faire apparaître dans votre colonne latérale d’articles de blog ou de pages d’archives. ', 'mindgeek' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Bloc page accueil', 'mindgeek' ),
    'id'            => 'slider',
    'description'   => __( 'Ajoutez ici le texte pour l\'image de la home page.', 'mindgeek' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
  register_sidebar( array(
    'name'          => __     ( 'Google Map', 'mindgeek' ),
    'id'            => 'map',
    'description'   => __( 'Ajoutez ici le widget Google Map pour la page contact.', 'mindgeek' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
}
add_action( 'widgets_init', 'mindgeek_widgets_init' );

function mindgeek_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

function register_nav() {
 register_nav_menus(
   array(
   'header-menu' => __( 'Header Menu' ),
   'footer-menu' => __( 'Footer Menu' )
   )
 );
}
add_action( 'init', 'register_nav' );
/*
* Enqueue Font Awesome
*/
add_action( 'wp_enqueue_scripts', 'mindgeek_enqueue_scripts' );
function mindgeek_enqueue_scripts() {
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
}
/*
* Show admin bar in front-end
*/
function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );
/*
* Show post resume
*/
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Lire la suite...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
?>
