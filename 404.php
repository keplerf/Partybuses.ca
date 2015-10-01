<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


		<div id="content" role="main">



			<article id="post-0" class="post error404 not-found addtest addtest2 addtest4">

				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentyeleven' ); ?></h1>
				</header>
                
                 
				<div id="products">
					

					

                    
                    <section class="primary">
						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                    </section>
                    
                    <section class="secundary">
						<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 3 ), array( 'widget_id' => '404' ) ); ?>
					</section>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		
        
         <?php get_template_part( 'content-tab' ); ?>	
         
          <?php get_template_part( 'content-footer1' ); ?>
          
          </div><!-- #content -->
	
<?php get_footer(); ?>