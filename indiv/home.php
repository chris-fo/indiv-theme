<?php
/**
 * The home page template file.
 *
 * If the user has selected a blog page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Social Brothers
 */

get_header();
?>
<?php while( have_posts() ): ?>
    <?php 
    the_post(); 
    the_content()
    ?> 
    
<?php endwhile; ?>
<?php get_footer(); ?>