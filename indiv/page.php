<?php
/**
 * The single page template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package indiv
 */

get_header();
?>
<?php while( have_posts() ): ?>
    <?php 
    the_post();
    the_content(); 
    ?> 
<?php endwhile; ?>
<?php get_footer(); ?>