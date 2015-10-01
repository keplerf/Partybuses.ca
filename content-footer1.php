<?php
/**
 * The template for displaying page content tab  in the page template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div id="content-footer">
		<section class="col1"> 
                                
                  <?php if ( !function_exists('dynamic_sidebar')

					|| !dynamic_sidebar('Right Sidebar') ) : ?>
		
				<?php endif; ?>
                
                
                <aside class="widget widget_recent_entries">
                <h3 class="widget-title">Party Info</h3>
                <ul>
                <?php $postslist = get_posts('category=1&numberposts=5&order=DESC&orderby=post_date');

					foreach ($postslist as $post) :
					
					setup_postdata($post); ?>
					
					<li class="post_item">
					
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					
					<?php the_excerpt(); ?>
					
					</li>
					
					
					
					<?php endforeach; ?>
					</ul>				
                 </aside>
                 
                 
                 <aside class="widget widget_recent_entries">
                <h3 class="widget-title">Specials</h3>
                <ul>
                <?php $postslist = get_posts('category=4&numberposts=5&order=DESC&orderby=post_date');

					foreach ($postslist as $post) :
					
					setup_postdata($post); ?>
					
					<li class="post_item">
					
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					
					<?php the_excerpt(); ?>
					
					</li>
					
					
					
					<?php endforeach; ?>
					</ul>				
                 </aside>
                 
                 
                 
                <div style="margin-top:30px" class="fb-like-box" data-href="http://www.facebook.com/partybuses.ca" data-width="292" data-colorscheme="dark" data-show-faces="false" data-stream="false" data-header="true"></div>
               
            	           
            </section>
            
           	<section class="col1"> 
           
            	<?php if ( !function_exists('dynamic_sidebar')

					|| !dynamic_sidebar('Left Sidebar') ) : ?>
		
				<?php endif; ?>
            
            	           
            </section>
            
            
            <section class="col2">    
            	<div id="phone">Call the Party Line <a href="tel:16042903326 ">604.290.3326 </a> </div>
                <?php get_template_part( 'content-social' ); ?>	
        
            </section>

	
</div>