<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>

</div><!-- wrappper -->

<footer>
	<div id="footer_wrapper">
        <section class="col1"> 
        
          
            <h3 id="branding_f">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/party-buses-vancouver-canada.png" width="267" height="100" alt="Party Buses Vancouver BC Canada"><span>Party Bus Vancouver BC Canada </span>
                    </a>
                 </h3> 
                <h3 class="slogan"> Your official party experts</h3>
        </section>
        
         <section class="col2">
         <nav role="navigation">
             <ul>
                <li><a href="<?php bloginfo('url'); ?>/">HOME</a> |</li>
                 <li><a href="<?php bloginfo('url'); ?>/specials/">SPECIALS</a> | </li>
                
                <li><a href="<?php bloginfo('url'); ?>/party-bus-vancouver-2">Party Buses</a> | </li>
               
                <li><a href="<?php bloginfo('url'); ?>/get-a-quote-party-buses/">GET A QUOTE</a> | </li>  
                  <li><a href="<?php bloginfo('url'); ?>/gallery-party-bus/">gallery</a> | </li>               
               
                <li> <a href="<?php bloginfo('url'); ?>/contact/">CONTACT US</a> |</li>
                <li><a href="<?php bloginfo('url'); ?>/careers/">CAREERS</a></li>
                
                
               </ul>                
              
               	<div id="footerPaymentIMG" style="background:#757C82; padding:8px 0"> <div id="footerPaymentIMG" style="margin:0">
<a href="http://www.bbb.org/mbc/business-reviews/limousine-service/silver-lady-limousine-service-ltd-in-burnaby-bc-117143#sealclick" rel="nofollow" title="Click for the Business Review of Silver Lady Limousine Service Ltd., a Limousine Service in Burnaby BC" target="_blank" style="padding-top:10px;"><img src="<?php bloginfo('template_url'); ?>/images/bbbnew.png" alt="limo vancouver"  style="border: 0;" /></a>

<img style="margin:-5px 0 0 0; vertical-align:middle; display:none" src="" width="74" height="38" alt="bbb Canada Vancouver" /> <img src="<?php bloginfo('template_url'); ?>/images/paymentOptions2.png" alt="limo vancouver services payment" class="paymentType" />

</div>
                </div>
                <p>Copyright &copy; <?	
                    //determine copyright year.
                        echo date("Y");
                    ?> - <a href="<?php bloginfo('url'); ?>" title="party bus vancouver">Party Buses &amp; S.U.V. Limousine Service</a> Ltd.
                  <a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms and Conditions</a> |
                
                <a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a> |
                
                <a href="<?php bloginfo('url'); ?>/links">Links</a> |
                <a href="http://vancouverparty-bus.com/" title="Vancouver party Bus" target="_blank">Vancouver Party Bus</a>
                <br />
                 
            <a href="http://www.keplerweb.com" title="web design keplerweb vancouver" target="_blank">web design Kepler Web </a></p> </nav>             
          </section>
            
     </div>
     
</footer>       
            

	<?php wp_footer(); ?>
    
</body>
</html>