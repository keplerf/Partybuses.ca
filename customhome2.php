<?php

/**

 * Template Name: Home Page temp 2

 * Description: Custom Home Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">

<meta name="author" content="Kepler Fontenele" />
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<link rel="icon" href="/favicon.ico" />
<link rel="shortcut icon" href="http://partybuses.ca/favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">


<title><?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 */

	global $page, $paged;



	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );



	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";



	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );



	?></title>
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />

<link rel="stylesheet" media="screen, print" href="<?php echo get_template_directory_uri(); ?>/basic.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>


<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>



<link href='http://fonts.googleapis.com/css?family=Nobile:700' rel='stylesheet' type='text/css'>


<!-- SCRIPTS -->

<!-- enable HTML5 elements in IE7+8 --> 
<!--[if lt IE 9]>
 <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>



<![endif]--> 


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1030054-37']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class="home">
<div id="wrap">
		<header  >
    	 	<h3 id="branding">
            	<a href="<?php bloginfo('url'); ?>/" title="Vancouver Party Bus Limo">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/limo-party-bus-vancouver-logo.png" width="251" height="157" alt="Party Bus Vancouver BC Canada">
                    <span>Party Bus Limo Vancouver BC Canada </span>
                </a>
             </h3>
             <h3 class="slogan"><strong>Vancouver Limo Party Bus</strong></h3>
             
             <div class="adressm">
                 <div itemscope itemtype="http://data-vocabulary.org/Organization"> 
                    <span itemprop="name">Party Buses </span>
                   
                    <span itemprop="address" itemscope 
                      itemtype="http://data-vocabulary.org/Address">
                      <span itemprop="street-address">1111 Alberni St</span>, 
                      <span itemprop="locality">Vancouver </span>, 
                      <span itemprop="region">BC</span>.
                    
                   <span itemprop="tel">604-520-2222</span></span>
                    <a href="http://partybuses.ca" itemprop="url">http://partybuses.ca</a>.
                </div>
            </div>
             
             
             
              <nav id="access" role="navigation">
                <?php get_template_part( 'content-nav' ); ?>	
              </nav>

</header><!--header -->







    <div id="content" role="main">
      
    
 
    	<section class="col col1">
    	  <ul class="bulleted">
    	    <li><p><a href="http://partybuses.ca/get-a-quote-party-buses" title="party bus reservation vancouver">Online Reservations</a> and Quotations - 24/7/365 - <b>Party Bus Vancouver</b></p></li>
    	    <li><p><strong><a href="http://partybuses.ca/party-bus-vancouver-2/" title="Vancouver party bus fleet">Vancouver’s Largest Fleet </a></strong>of New S.U.V.’s and New Limo Party Buses</p></li>
    	    <li><p>Professional, Experienced &amp; Courteous Chauffeurs</p></li>
    	    <li><p>Weekly &amp; Monthly Limo Specials, Low Mid-Week Rates &amp; Limousine Group Discounts</p></li>
  	    </ul>
        
        
   	    </section>
        
       
        
        
        <section class="col main">
          <div id="phone">
          	Call the Party Line <strong>
            						<a href="tel:16042903326 ">604.290.3326 </a>
                                 </strong> </div>
          <?php while ( have_posts() ) : the_post(); ?>
	   
	   <?php get_template_part( 'content', 'page' ); ?>    
		
	<?php endwhile; // end of the loop. ?>
        </section>
        
      	<section class="col col3 social">
        <?php get_template_part( 'content-social' ); ?>	
        
         <aside class="widget widget_recent_entries col col1 " style="margin-right:0;"> <!--<a href="http://partybuses.ca/get-a-quote-party-buses/"><img style="margin:15px auto 0 auto; width:100% " src="<?php/* echo get_template_directory_uri();*/ ?>/images/limousine-rental-special.jpg" alt="Limousine Vancouver special " /></a>
         <p style="color:#FFF; font-size:8px; text-align:center">
         *Must mention this website special to receive discount.</br> Online you must enter PROMO CODE: FALL</br>
*Travel must be completed before December 30, 2015.</br>
*Based on availability & some conditions may apply.
         </p>-->
               <!-- <h3 class="widget-title coltop">Specials</h3>-->
                <ul>
                <?php $postslist = get_posts('category=4&numberposts=2&order=DESC&orderby=post_date');

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
                <h3 class="widget-title">Party Info</h3>
                <ul>
                <?php $postslist = get_posts('category=1&numberposts=2&order=DESC&orderby=post_date');

					foreach ($postslist as $post) :
					
					setup_postdata($post); ?>
					
					<li class="post_item">
					
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					
					<?php the_excerpt(); ?>
					
					</li>
					
					
					
					<?php endforeach; ?>
					</ul>				
                 </aside>
        
        
        </section>
        
        
         
    
    

    
    </div><!-- #content -->
    
     <div id="images-header">
        	<section class="col1"> 
            
            	 <div id="cimy_div_id_5"></div>
                <div class="cimy_div_id_0_caption"></div>
                
                <noscript>
                    <div id="cimy_div_id_5_nojs">
                        <img id="cimy_img_id" src="<?php echo get_template_directory_uri(); ?>/images/fun-party-bus-vancouver.jpg" alt="vancouver party bus" />
                    </div>
                </noscript>
            
            	
            </section>
            
            
            <section class="col2">            
            	
                 
               <div id="cimy_div_id_0"></div>
                <div class="cimy_div_id_0_caption"></div>
                
                <noscript>
                    <div id="cimy_div_id_0_nojs">
                        <img id="cimy_img_id2" src="<?php echo get_template_directory_uri(); ?>/images/fun-party-bus-vancouver.jpg" alt="vancouver party bus" />
                    </div>
                </noscript>

            </section>
        
    </div><!--images-header -->



<?php get_footer(); ?>