<?php

/**

 * Template Name: Iframe quote 

 * Description: Custom Specials Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>

        
     

			<div id="content" role="main">
            
            <h1 style="margin-left:20px;"> Get a Quote </h1>

<div style="margin:0 auto; width:100%">
				<iframe src="https://book.mylimobiz.com/v4/partybuses/GetQuote" frameborder="0" width="100%" height="1200" scrolling="no">
                
                
</iframe>
<script type="text/javascript" src="https://book.mylimobiz.com/v4/widgets/widget-loader.js"></script>
</div>

 <?php get_template_part( 'content-tab' ); ?>	
         
          <?php get_template_part( 'content-footer1' ); ?>	

		</div><!-- #content -->

	




<?php get_footer(); ?>