<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		
			<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'single' ); ?>
<?php endwhile; // end of the loop. ?>



  
    <?php get_template_part( 'content-footer1' ); ?>	

			</div><!-- #content -->
            
            
            
	

<?php get_footer(); ?>