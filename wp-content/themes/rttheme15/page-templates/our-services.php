<?php
/**
 * Template Name: Our Services Page
 *
 * @package WordPress
 * @subpackage RT-Theme
 *
 */
?>

<?php get_header();?>

<?php get_template_part( 'sub_page_header', 'sub_page_header_file' );?>

<h1 style="font-size:30px;" >Our Services</h1>

<?php
$json=file_get_contents(get_site_url().'/services/our-services');
$obj=json_decode($json);
?>

<div style="margin-bottom:20px;">
	<h2><?php echo $obj->origination->title;?></h2>
	<div style="padding:5px;border: 1px solid #ccc;line-height:0px;">
		<img src="<?php echo $obj->origination->image;?>" width="100%"/>
	</div>
	<div style="text-align:justify;margin-top:5px;"><?php echo $obj->origination->description;?></div>
</div>
<div style="margin-bottom:20px;">
	<h2><?php echo $obj->processing->title;?></h2>
	<div style="padding:5px;border: 1px solid #ccc;line-height:0px;">
		<img src="<?php echo $obj->processing->image;?>" width="100%"/>
	</div>
	<div style="text-align:justify;margin-top:5px;"><?php echo $obj->processing->description;?></div>
</div>
<div style="margin-bottom:20px;">
	<h2><?php echo $obj->marketing->title;?></h2>
	<div style="padding:5px;border: 1px solid #ccc;line-height:0px;">
		<img src="<?php echo $obj->marketing->image;?>" width="100%"/>
	</div>
	<div style="text-align:justify;margin-top:5px;"><?php echo $obj->marketing->description;?></div>
</div>
<div style="margin-bottom:20px;">
	<h2><?php echo $obj->risk->title;?></h2>
	<div style="padding:5px;border: 1px solid #ccc;line-height:0px;">
		<img src="<?php echo $obj->risk->image;?>" width="100%"/>
	</div>
	<div style="text-align:justify;margin-top:5px;"><?php echo $obj->risk->description;?></div>
</div>

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