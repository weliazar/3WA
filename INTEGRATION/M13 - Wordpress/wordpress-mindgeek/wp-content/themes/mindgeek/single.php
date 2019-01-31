<!-- Affichage de l'entête -->
<?php get_header(); ?>
<?php get_template_part( 'template-parts/searchform' ); ?>
<main class="container clearfix">
  <!-- Boucle sur les articles -->
  <section class="content">
<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
  </section>
  <?php get_sidebar(); ?>
</main>
<!-- Affichage du footer -->
<?php get_footer(); ?>
