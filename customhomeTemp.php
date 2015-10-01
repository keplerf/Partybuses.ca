<?php

/**

 * Template Name: Home Page TEMP

 * Description: Custom Home Page for Silver Lady Limo

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

<body <?php body_class(); ?> style="background:#000815;">
<div class="hfeed" id="page">

	<div id="branding" style="display:none">



<div id="mainLogo">

<h3><a href="<?php bloginfo('url'); ?>/" title="Vancouver Party Limo Bus"><img src="<?php bloginfo('url'); ?>/imgs/sllLogo.png" alt="Vancouver Party Limo Bus" border="0" /></a> </h3>

</div>



			<div id="silverHeader"> 
            	<div id="phone-header">
                  <p>RESERVE NOW!  <img src="<?php bloginfo('template_url'); ?>/images/phone-icon.png" width="13" height="24" alt="Phone Vancouver Party Limo Bus"/> 604.520.2222 | 1.888.871.3326 </p>
                 
            	</div>
            
            
      </div>



			<div id="access">

<div class="menu" id="nav">

<ul>

    <li>
        <a class="contact" href="<?php bloginfo('url'); ?>/contact/" title="Contact Us"><span>Contact Party Buses Vancouver </span></a>
    </li>

    <li>
        <a class="reservations" href="https://book.mylimobiz.com/silverlady/" title="eReservations"><span>party bus  Reservations</span></a>
    </li>

    <li>
    
        <a class="quote" href="https://book.mylimobiz.com/silverlady/Quote" title="Get A Quote"> <span>party bus rental quote </span> </a>      
       
    </li>

    <li>
    
        <a class="specials" href="<?php bloginfo('url'); ?>/specials/" title="Specials"><span>Specials limousine services Vancouver Canada </span>        </a>
    
    </li>

    <li>
    
        <a  class="fleet"href="<?php bloginfo('url'); ?>/party-buses/" title="The Fleet"> <span>Party Buses</span></a>
        <ul class="dropdown">
                    <li> <a href="<?php bloginfo('url'); ?>/fleet/limo-buses/">Party Buses </a></li>
                    
                    
          </ul>
    
    
    </li>

</ul>

</div>

			

</div><!-- #access -->



</div><!-- #branding -->



	<div id="main">
    <div id="solcial-media-btn" style="display:none"> <a href="http://www.facebook.com/pages/Silver-Lady-Limo/278917805451723" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.jpg" width="21" height="22" alt="limousine limo services facebook Vancouver" /></a>
  <a href="https://twitter.com/#!/SilverLadyLimo" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.jpg" width="21" height="22" alt="limousine limo services twitter Vancouver" /></a>
  <a href="http://www.youtube.com/user/SilverLadyLimo" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-you.jpg" alt="limousine limo services youtube Vancouver" width="23" height="22" border="0" /></a>
<a href="https://plus.google.com/u/0/103068552791740585290/posts" target="_new"><img src="<?php bloginfo('template_url'); ?>/images/icon-google.jpg" width="22" height="22" alt="limousine limo services googleplus Vancouver" /></a>
</div>

<div id="home_content" style="display:none">

<table border="0" cellspacing="5">
<tbody>
<tr>
<td width="33%">
<h2><a href="/fleet/"><img class="size-full wp-image-226 " title="limousine-services-vancouver-party-bus" src="http://partybuses.ca/wp-content/uploads/2011/09/see-our-fleet.jpg" alt="limousine services in Vancouver BC Canada" width="177" height="138" /></a></h2>
</td>
<td width="33%"><a title="Specials" href="http://partybuses.ca/specials/"><img class="size-full wp-image-227" title="limousine-services-vancouver-special" src="http://partybuses.ca/wp-content/uploads/2011/09/special-deal.jpg" alt="Special limousine services in Vancouver BC Canada" width="177" height="138" /></a></td>
<td width="33%"><a href="https://book.mylimobiz.com/silverlady/Quote"><img class="size-full wp-image-228" title="limousine-services-vancouver-party-bus-canada" src="http://partybuses.ca/wp-content/uploads/2011/09/get-a-quote.jpg" alt="limousine services in Vancouver BC Canada" width="177" height="138" /></a></td>
</tr>
</tbody>
</table>
&nbsp;
<h1><strong>Silver Lady Limousine Services</strong></h1>
is focused on presenting each and every client with a unique, one-of-a-kind extraordinary experience.

We have a long history of more than 25 years providing reliable, safe and professional service to corporate, consumer, and celebrity clientele who come back to us for:
<ul>
	<li>Online Reservations and Quotations - 24/7/365</li>
	<li>Vancouver's Largest Fleet of New S.U.V.'s and New Limo Party Buses</li>
	<li>Professional, Experienced &amp; Courteous Chauffeurs</li>
	<li>Weekly &amp; Monthly Specials, Low Mid-Week Rates &amp; Group Discounts</li>
</ul>
&nbsp;




</div>

<div style="width:960px; margin:auto; text-align:center; color:#CCCCCC; font-size:18px; padding: 150px 0"> <a href="http://partybuses.ca/"><img src="<?php bloginfo('template_url'); ?>/images/understru.jpg" alt="Vancouver Party Limo Bus" border="0"/></a>
      <div> 
        <p style="font-size:23px"><a style="color:#CCCCCC; text-decoration:none" href="tel:16045202222">604.520.2222</a> | <a  style="color:#CCCCCC;text-decoration:none" href="tel:18888713326">1.888.871.3326 </a></p>
        <p><a style="color:#09F" href="mailto:info@silverladylimo.com">info@silverladylimo.com </a></p>
      </div>



</div>

<div style="display:none">

<div id="colophon" class="footer">
    <div class="go-logo"><img src="<?php bloginfo('template_url'); ?>/images/go.jpg" width="234" height="34" alt="limo vancouver" /></div>

<div id="footerlogo"> <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-footer.jpg" alt="Silver Lady Limousine Service Vancouver" width="217" height="103" border="0" /></a></div>

<div id="footerLinks">

<a href="<?php bloginfo('url'); ?>/">HOME</a> | 

<a href="<?php bloginfo('url'); ?>/the-latest/">THE LATEST</a> | 

<a href="<?php bloginfo('url'); ?>/fleet/">THE FLEET</a> | 

<a href="<?php bloginfo('url'); ?>/specials/">SPECIALS</a> | 

<a href="https://book.mylimobiz.com/silverlady/Quote">GET A QUOTE</a> | 

<a href="https://book.mylimobiz.com/silverlady/">eRESERVATIONS</a> | 

<a href="<?php bloginfo('url'); ?>/contact/">CONTACT US</a> |

<a href="<?php bloginfo('url'); ?>/caree/">CAREERS</a>

</div>



<div id="footerPaymentIMG">
<img style="margin:-5px 0 0 0; vertical-align:middle" src="<?php bloginfo('template_url'); ?>/images/bbb.jpg" width="74" height="38" alt="bbb Canada Vancouver" /> <img src="<?php bloginfo('url'); ?>/imgs/paymentOptions.png" alt="limousine services payment" class="paymentType" />

</div>



<div id="footerCopyright">

<p>Copyright &copy; <?	
	//determine copyright year.
		echo date("Y");
	?> - <a href="http://silverladylimo.com/" title="limousine services vancouver">Silver Lady Limousine &amp; S.U.V. Limousine Service</a> Ltd.<br />
  <a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms and Conditions</a> |

<a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a> |

<a href="<?php bloginfo('url'); ?>/links">Links</a><br />
</p>

</div>





	</div>

	</div><!-- #colophon -->


</div>