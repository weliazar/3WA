<?php
/**
* The template for displaying the header
* @package WordPress
* @subpackage Mindgeek
* @since Mindgeek 1.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head(); ?>
</head>
<body class="custom-background">
  <header class="container">
    <!-- Affichage du logo ou de l'info du blog -->
    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full');
    ?>
    <?php if ($custom_logo_id > 0) : ?>
     <p class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel='home'><img src='<?php echo $image[0]; ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a></p>
    <?php else : ?>
    <!-- Affichage du titre du blog -->
    <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a></h2>
    <!-- Affichage de la description du blog -->
    <p><?php bloginfo('description'); ?></p>
    <?php endif; ?>
    <!-- Affichage de la navigation -->
    <nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
  </header>
