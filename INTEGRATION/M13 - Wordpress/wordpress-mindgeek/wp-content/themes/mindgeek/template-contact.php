<?php
/*
Template Name: Contact
*/
?>
<!-- Affichage de l'entête -->
<?php get_header(); ?>
<?php get_template_part( 'template-parts/searchform' ); ?>
<main class="clearfix">
  <section class="page container contact">
<?php get_template_part( 'template-parts/content', 'page' ); ?>
  </section>
<?php if ( is_active_sidebar( 'map' ) ) :?>
  <section class="map">
  <?php dynamic_sidebar( 'map' ); ?>
  </section><!-- .widget-area -->
<?php endif; ?>
</main>
<!-- Affichage du footer -->
<?php get_footer(); ?>
