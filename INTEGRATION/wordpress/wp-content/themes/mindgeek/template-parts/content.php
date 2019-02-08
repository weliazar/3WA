<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mindgeek
 */
?>
<!-- Boucle sur les posts -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
  $today = date(Ymd);
  //var_dump($today);
  $date1 = get_post_meta($post->ID, date_debut_publication); 
  //var_dump($date1);
  $date2 = get_post_meta($post->ID, date_fin_publication); 
  //var_dump($date2);
?>
<?php if ((count($date1) == 0 || $date1[0] <= $today) && (count($date2) == 0 || $date2[0] >= $today)) : ?>
<article class="post">
<!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<!-- Affiche la miniature de l'image -->
<?php
       $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
       //var_dump($image_attributes);
       if ( $image_attributes ) :?>
           <img class="left" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
<?php endif; ?>
<?php if (is_single()) :?>
<!-- Affiche le post complet -->
<?php the_content(); ?>
<?php else: ?>
<!-- Affiche une introduction de l'article -->
<?php the_excerpt(); ?>
<?php endif; ?>
<!-- Affiche la date de publication, l'auteur et les catégories de l'article. -->
<footer class="postmetadata">
  <p><small>Publié le <?php the_time('l d M Y'); ?>  par <?php the_author() ?> dans la catégorie <?php the_category(', '); ?></small></p>
</footer>
</article> <!-- Fin de l'article -->
<?php if (is_single()) :?>
<!-- Permettre la publication de commentaires -->
<section class="comments-template"> <?php comments_template(); ?> </section>
<?php else: ?>
<!-- Afficher le nombre de commentaires -->
<p><?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires', 'comments-link', 'Commentaires désactivés'); ?></p>
<?php endif; ?>
<!-- Permettre l'édition de l'article dans la page web -->
<?php edit_post_link('Éditer', '<p>', '</p>'); ?>
<?php endif; ?> <!-- Fin du test sur les dates -->
<!-- Fin de La Boucle -->
<?php endwhile; ?>
<?php else: ?>
<!-- Si pas d'Articles à afficher -->
<p>Aucun contenu à afficher.</p>
<!-- Fin -->
<?php endif; ?>
