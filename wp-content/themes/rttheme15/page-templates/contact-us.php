<?php
/**
 * Template Name: Contact Us Page
 *
 * @package WordPress
 * @subpackage RT-Theme
 *
 */
?>

<?php get_header();?>

<?php get_template_part( 'sub_page_header', 'sub_page_header_file' );?>

<!-- page title --> 
<?php if(!is_front_page() && !is_blog_page()):?>
	<div class="head_text"><h2><?php the_title(); ?></h2></div><!-- / page title -->  
<?php endif;?>

<?php
#
#  Regular Page     
#

	//featured image	   
	$thumb 			= get_post_thumbnail_id();
	$image_url 		= wp_get_attachment_image_src($thumb,'false', true);
	$width 			= 300;
	$height 			= 300;
	if($thumb) $image 	= @vt_resize( $thumb, '', $width, $height, 'false' );
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php if($thumb)://featured image ?>
		<span class="frame alignleft"><a href="<?php echo $image_url[0]; ?>" title="<?php the_title(); ?>" rel="prettyPhoto[page_featured_image]" class="imgeffect plus">
			<img src="<?php echo $image["url"];?>" alt="<?php the_title(); ?>" />
		</a></span>
	<?php endif;?>
					
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
<?php endwhile;?>

<?php else: ?>
	<p><?php _e( 'Sorry, no page found.', 'rt_theme'); ?></p>
<?php endif; ?>

<?php get_footer();?>