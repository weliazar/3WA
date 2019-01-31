<?php
/**
 * Template part for displaying posts.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mindgeek
 */
?>
<section class="search">
     <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
          <p>
               <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Que recherchez-vous ?"/>
          </p>
     </form>
</section>
