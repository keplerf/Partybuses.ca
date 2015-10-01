<?php

/**

 * Template Name: List estrect limo

 * Description: Custom Vehicle Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>



<div id="content">

<h1 class="title"><?php the_title(); ?></h1>


<div id="fleet">

<?php
      $args = array(
	  'depth'        => 20,
	'post_parent' => $post->ID,
	'post_type' => 'page',
	'post_status' => 'publish',
	'numberposts' => 10,
	'sort_column'  => 'menu_order, post_title',
);
	 $postslist = get_posts($args);
     foreach ($postslist as $post) :
        setup_postdata($post);
     ?>
         <div class="portfolio_box">
             <a href="<?php the_permalink(); ?>">
             <h2><?php the_title(); ?></h2>
           
             <?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail();
				} 
				?>
                
                  <header>
				   <?php
        
                      $mykey_values = get_post_custom_values('passengers');
                      foreach ( $mykey_values as $key => $value ) {
                        echo "$value"; 
                      }
                    
                    ?> passengers
             </header>
             </a>

             
           
         </div>

     <?php endforeach; ?>
    </div>
    
    
    
        <div style="display:block; float:left">
        <?php
        
        while ( have_posts() ) : the_post();
        
            the_content();
        
        endwhile;
        
        ?>
        
        </div>





<?php get_template_part( 'content-footer1' ); ?>	

</div>
</div>



<?php get_footer(); ?>