<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mindgeek
 */
?>
<!-- Début de la boucle sur les posts -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post">
<!-- Affiche le contenu -->
<?php the_content(); ?>
</article> <!-- Fin de l'article -->
<!-- Permettre l'édition de l'article dans la page web -->
<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
<!-- Fin de La Boucle -->
<?php endwhile; ?>
<?php else: ?>
<!-- Le premier "if" teste l'existence d'Articles à afficher. Cette -->
<!-- partie "else" indique que faire si ce n'est pas le cas. -->
<p>Aucun contenu à afficher.</p>
<!-- Fin -->
<?php endif; ?>
