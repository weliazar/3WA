<!-- Affichage de l'entête -->
<?php get_header(); ?>
<?php
if ( is_active_sidebar( 'slider' ) ) :?>
  <section class="slider">
  <?php dynamic_sidebar( 'slider' ); ?>
  </section><!-- .widget-area -->
<?php endif; ?>
<?php get_template_part( 'template-parts/searchform' ); ?>
<main class="container clearfix">
  <!-- Boucle sur les articles -->
  <section class="page">
    <?php get_template_part( 'template-parts/content', 'page' ); ?>
  </section>
</main>
<!-- Affichage du footer -->
<?php get_footer(); ?>
