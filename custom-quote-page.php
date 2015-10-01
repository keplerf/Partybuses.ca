<?php

/**

 * Template Name: Home Page temp 2

 * Description: Custom quote Page

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

<body class="quote">
<div id="wrap">
		<header  >
    	 	<h3 id="branding">
            	<a href="<?php bloginfo('url'); ?>/" title="Vancouver Party Bus Limo">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/limo-party-bus-vancouver-logo.png" width="251" height="157" alt="Party Bus Vancouver BC Canada">
                    <span>Party Bus Vancouver BC Canada </span>
                </a>
             </h3>
             <h3 class="slogan"><strong>Vancouver Party Buses</strong></h3>
             
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
            
            <h1 style="margin-left:20px;"> Get a Quote</h1>

<div style="margin:0 auto; width:908px">
				<iframe src="https://book.mylimobiz.com/silverlady/Quote" frameborder="0" width="908" height="1200" scrolling="no">
                
                
</iframe>
</div>

 <?php get_template_part( 'content-tab' ); ?>	
         
          <?php get_template_part( 'content-footer1' ); ?>	

		</div><!-- #content -->




<?php get_footer(); ?>