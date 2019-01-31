<?php
/**
 * The template for displaying posts in the Team Member post format
 *
 * @package Lawyeriax
 */


$social_meta         = get_post_meta( $post->ID,'social_icons',true );
	$description_meta    = get_post_meta( $post->ID,'description_text',true );
	$role_meta           = get_post_meta( $post->ID,'role_text',true );
	$view_profile_button = get_theme_mod( 'teammates_profile_button', esc_html__( 'View Profile', 'lawyeriax-lite' ) );


?>


<div class="col-xs-12 col-sm-4 lawyer-box">

	<div class="lawyer-box-image">

		<?php if ( has_post_thumbnail() ) { ?>
	 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_post_thumbnail( 'lawyeriax-team-member-custom-thumbnail' ); ?>
	 </a>
	<?php } ?>
	</div>

	<div class="lawyer-box-content">

	 <h5 class="lawyer-title">

	   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>

	 </h5>

	 <div class="border-left lawyer-box-content-inner">
	   <div class="lawyer-box-inside">

		<?php $role_meta = get_post_meta( $post->ID,'role_text',true );
		if ( ! empty( $role_meta ) ) { ?>

			  <p class="lawyer-box-info"><?php echo esc_html( $role_meta ); ?></p>

			<?php } ?>

		<?php $social_meta = get_post_meta( $post->ID,'social_icons',true );
		if ( ! empty( $social_meta ) ) {
			echo '<ul class="lawyer-media-icons">';
			foreach ( $social_meta as $social_icon ) {
				if ( ! empty( $social_icon['title'] ) && ! empty( $social_icon['icons'] ) ) { ?>

				  <li>
					<a class="team-social-icon-link" href="<?php echo esc_html( $social_icon['title'] ); ?>"><i class="fa <?php echo esc_html( $social_icon['icons'] );?>"></i></a>
				  </li>
			<?php }
			}
			echo '</ul>';
		}?>
	  </div>

	  <a href="<?php the_permalink(); ?>" class="view-profile" title="<?php the_title(); ?>"> <?php echo esc_html( $view_profile_button ); ?></a>

	</div>
	</div>
</div>
