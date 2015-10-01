<?php

/**

 * Template Name: Specials

 * Description: Custom Specials Page for Silver Lady Limo

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); ?>

        
     

			<div id="content" role="main">



<h1 class="entry-title">Party Buses - <?php the_title(); ?></h1>



<div id="specials_content">

<?php

if ( is_page( '27' ) ) {

	$postNumbers = 4;

} elseif ( is_page( '211' ) ) {

	$postNumbers = 1;

}

?>

<p>

<?php

$args = array( 'numberposts' => 2, 'order'=> 'DESC', 'category' => $postNumbers );

$lastposts = get_posts( $args );

foreach($lastposts as $post) : setup_postdata($post); ?>
<article class="list-special">

	<header><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></header>


   <?php   // check if the post has a Post Thumbnail assigned to it.
                    if ( has_post_thumbnail() ) {
						
                        the_post_thumbnail();
     } ?>
                    
	<?php the_content(); ?>

</article>

<?php endforeach; ?>

</p>

</div>



		</div><!-- #content -->

	




<?php get_footer(); ?>