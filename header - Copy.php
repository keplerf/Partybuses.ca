<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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




<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/jqueryStuff/css/styles.css" />
<link type="text/css" href="<?php bloginfo('url'); ?>/jqueryStuff/css/custom-theme/jquery-ui-1.8.16.custom.css" rel="Stylesheet" />	
<script type="text/javascript" src="<?php bloginfo('url'); ?>/jqueryStuff/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/jqueryStuff/js/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/sifr.css" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/sifr-css.css" type="text/css" media="screen"/>
<script src="<?php bloginfo('url'); ?>/sifr.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/sifr-config.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1030054-36']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>



<body <?php body_class(); ?>>

<div id="page" class="hfeed">

	<div id="branding">



<div id="mainLogo">

<h3><a href="<?php bloginfo('url'); ?>/" title="Silver Lady Limousine Services Vancouver BC"><img src="<?php bloginfo('url'); ?>/imgs/sllLogo.png" alt="Silver Lady Limousine Services Vancouver" border="0" /></a> </h3>

</div>



			<div id="silverHeader"> 
            	<div id="phone-header">
                  <p>RESERVE NOW!  <img src="<?php bloginfo('template_url'); ?>/images/phone-icon.png" width="13" height="24" alt="Phone Limo rental in Vancouver"/> 604.520.2222 | 1.888.871.3326 </p>
                 
            	</div>
            
            
      </div>



			<div id="access">

<div class="menu" id="nav">

<ul>

    <li>
        <a class="contact" href="<?php bloginfo('url'); ?>/contact/" title="Contact Us"><span>Contact Silver Lady Limousine Services Vancouver </span></a>
    </li>

    <li>
        <a class="reservations" href="https://book.mylimobiz.com/silverlady/" title="eReservations"><span>Limo Reservations</span></a>
    </li>

    <li>
    
        <a class="quote" href="https://book.mylimobiz.com/silverlady/Quote" title="Get A Quote"> <span>Limousine rent quote </span> </a>      
       
    </li>

    <li>
    
        <a class="specials" href="<?php bloginfo('url'); ?>/specials/" title="Specials"><span>Specials limousine services Vancouver Canada </span>        </a>
    
    </li>

    <li>
    
        <a  class="fleet"href="<?php bloginfo('url'); ?>/fleet/" title="The Fleet"> <span>fleet limousines </span></a>
        <ul class="dropdown">
                    <li> <a href="<?php bloginfo('url'); ?>/fleet/limo-buses/">Limo Buses </a></li>
                    <li> <a href="<?php bloginfo('url'); ?>/fleet/stretch-suvs/">Stretch S.U.V's</a></li>
                    <li> <a href="<?php bloginfo('url'); ?>/fleet/limousine/">Limousines</a></li>
                    <li class="last"> <a href="<?php bloginfo('url'); ?>/fleet/executive-suvs/">Executive S.U.V's</a></li>
                    
          </ul>
    
    
    </li>

</ul>

</div>

			

</div><!-- #access -->



</div><!-- #branding -->



	<div id="main">
    <div id="solcial-media-btn"> <a href="http://www.facebook.com/pages/Silver-Lady-Limo/278917805451723" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.jpg" width="21" height="22" alt="limousine limo services facebook Vancouver" /></a>
  <a href="https://twitter.com/#!/SilverLadyLimo" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" width="21" height="22" alt="limousine limo services twitter Vancouver" /></a>
  <a href="http://www.youtube.com/user/SilverLadyLimo" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-you.jpg" alt="limousine limo services youtube Vancouver" width="23" height="22" border="0" /></a>
<a href="https://plus.google.com/u/0/103068552791740585290/posts" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-google.jpg" width="22" height="22" alt="limousine limo services googleplus Vancouver" /></a>
</div>