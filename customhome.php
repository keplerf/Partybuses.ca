<?php

/**

 * Template Name: Home Page

 * Description: Custom Home Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>

    <div id="content" role="main">
      
    
 
    	<section class="col col1">
    	  <ul class="bulleted">
    	    <li><p><a href="http://partybuses.ca/get-a-quote-party-buses/" title="party bus reservation">Online Reservations</a> and Quotations - 24/7/365 - Party Bus Vancouver</p></li>
    	    <li><p><strong>Vancouver’s Largest Fleet </strong>of New S.U.V.’s and New Limo Party Buses</p></li>
    	    <li><p>Professional, Experienced &amp; Courteous Chauffeurs</p></li>
    	    <li><p>Weekly &amp; Monthly Limo Specials, Low Mid-Week Rates &amp; Limousine Group Discounts</p></li>
  	    </ul>
   	    </section>
        
        
         <aside class="widget widget_recent_entries col col1 ">
         <img src="<?php echo get_template_directory_uri(); ?>/images/limousine-rental-special.jpg" alt="Limousine Vancouver special " />
<!--<h3 class="widget-title">Specials</h3>-->
                <ul class="coltop">
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
        
        <section class="col ">
          <div id="phone">Call <strong><a href="tel:16045202222">604.520.2222</a></strong> <span> | </span><strong><a href="tel:18888713326">1.888.871.3326</a></strong></div>
          <?php while ( have_posts() ) : the_post(); ?>
	   
	   <?php get_template_part( 'content', 'page' ); ?>    
		
	<?php endwhile; // end of the loop. ?>
        </section>
        
      	<section class="col col3 social">
        <?php get_template_part( 'content-social' ); ?>	
        
        
        </section>
        
        
         
    
    

    
    </div><!-- #content -->



<?php get_footer(); ?>