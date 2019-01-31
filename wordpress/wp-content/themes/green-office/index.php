<?php get_header();?>
	
	
	<main>
	
	<?php if (have_posts()) : ?>
<!-- Si j'ai des Posts, j'affiche cette partie -->

<?php while (have_posts()) : the_post(); ?>

<!-- Pour CHAQUE Post, j'affiche ça -->
	
		<article>
			<h2><i class="fa fa-pagelines"></i><?php the_title(); ?></h2>
			
			
			
			<a href="<?php the_permalink(); ?>">Read more</a>
			<div class="clear"></div>
		</article>
		
		<?php endwhile; ?>
		
		<?php else : ?>
<!-- Si il n'y a pas de Post, j'affiche cette partie c'es optionnel-->

<p> Aucun article ! </p>
	
		<?php endif; ?>
		
	</main>


<?php get_footer();?>