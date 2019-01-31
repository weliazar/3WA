<!-- Affichage de l'entête -->
<?php get_header(); ?>
<?php get_template_part( 'template-parts/searchform' ); ?>
<main class="container clearfix">
  <section class="page">
<?php get_template_part( 'template-parts/content', 'page' ); ?>
  </section>
</main>
<!-- Affichage du footer -->
<?php get_footer(); ?>
