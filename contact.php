<?php

/**

 * Template Name: Contact

 * Description: Custom Contact Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>


		<div id="content">

<div id="contact">

<h1 class="entry-title"><?php the_title(); ?></h1>







    <div id="specials_content">
    
    <p>
    
    <?php
    
    while ( have_posts() ) : the_post();
    
        the_content();
    
    endwhile; 
    
    ?>
    
    </p>
    
    
    
    </div>

<section class="col1">
   
            
       
        
    
    
  		 <span><img  src="<?php echo get_template_directory_uri(); ?>/images/contact/phone.jpg" alt="party bus vancouver contact"  class="mapicon" /></span>
    
    <p class="extras">
    (604) 290-3326<br />
    </p>




</section>

<section class="col2">

      
    
    
    
    
    
    <img  src="<?php echo get_template_directory_uri(); ?>/images/contact/mail.jpg" alt="party bus vancouver contact" class="mapicon2" />
    
    <p class="extras">
    
      <a href="mailto:party@partybuses.ca">party@partybuses.ca </a></p>
      
     
    
    
    
    

</section>

</div>	

<?php get_template_part( 'content-footer1' ); ?><br />

</div><!-- #content -->

<?php get_footer(); ?>