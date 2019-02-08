<?php
/**
 * Template Name: Left Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lawyeriax
 */

get_header();
?>

<div class="content-area-left-sidebar">

	<div class="content-wrap">

		<div id="primary" class="col-sm-12 col-md-9 content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
			get_sidebar();
		?>

	</div><!-- .content-wrap -->

</div>

<?php
get_footer();
