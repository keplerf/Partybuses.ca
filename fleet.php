<?php
/**
 * Template Name: Fleet
 * Description: Custom Fleet Page for Silver Lady Limo
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	

<div id="specials_content">
<p>
<?php
$args = array( 'numberposts' => 2, 'order'=> 'ASC', 'category' => '4' );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div id="postDate"><?php the_time('l, F jS, Y') ?></div><br />
	<?php the_content(); ?>
<hr />
<?php endforeach; ?>
</p>
</div>

  <?php get_template_part( 'content-tab' ); ?>	
  
  <?php get_template_part( 'content-footer1' ); ?>	

<?php get_footer(); ?>