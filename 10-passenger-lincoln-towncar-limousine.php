<?php

/**

 * Template Name: Party Buses

 * Description: Custom Vehicle Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>

<div id="content" role="main">
  <div id="products">
        <section class="primary">
        
        <h1 class="title"><?php the_title(); ?></h1>
         
       	  <div class="headerwrapper">
                <div class="image-header">                    
                  <h2 class="feature-image">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                    </h2>
                
                </div>
                
                <div class="passenger">
                    <p> Passengers </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/party-bus-passenger-icon.jpg" width="16" height="42" alt="party bus passenger" />
                    <span>  <?php

  $mykey_values = get_post_custom_values('passengers');
  foreach ( $mykey_values as $key => $value ) {
    echo "$value"; 
  }

?></span>
                   
                    
                   
                   
                   
                
                </div>
        	</div>
            
            <div class="wrapperb">            
                <a href="<?php bloginfo('url'); ?>/get-a-quote-party-buses/" class="book">Free Quote</a>               
            </div>
            
          <section class="help">
           	<img src="<?php echo get_template_directory_uri(); ?>/images/party-bus-questions.jpg" width="45" height="47" alt="party bus passenger" />
                <p>Need Help </p>
            <p>Call the Party Line <a href="tel:16042903326" class="colorp">604.290.3326</a></p>
            <a href="mailto:info@silverladylimo.com">Email us </a></section>
           

      		</section>
            
           
    
    
      <section class="secundary">
      
      
            
            <?php
            
            while ( have_posts() ) : the_post();
            
                the_content();
            
            endwhile;
            
            ?>
        
        
      
      </section>







<p>

</p>




         <?php get_template_part( 'content-tab' ); ?>	
         
          <?php get_template_part( 'content-footer1' ); ?>	
    
	</div><!-- products  -->
</div> <!--content  -->








  





<?php get_footer(); ?>