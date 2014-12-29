<?php
/**
 * Template Name: Company Profile Page
 *
 * @package WordPress
 * @subpackage RT-Theme
 *
 */
?>

<?php get_header();?>

<?php get_template_part( 'sub_page_header', 'sub_page_header_file' );?>

<h1 style="font-size:30px;">Company Profile</h1>

<?php
$json=file_get_contents(get_site_url().'/services/company-overview');
$obj=json_decode($json);
$obj=$obj->company_profile;

?>
<div style="padding: 5px; border: 1px solid #ccc;line-height:0px;">
	<img src="<?php echo $obj->image;?>" width="100%" height="" alt="<?php the_title(); ?>" />
</div>

<div>
	<h1 style="padding-top: 40px;"><?php echo $obj->description->introduction->title;?></h1>
	<div style="text-align: justify;"><?php echo $obj->description->introduction->description;?></div>
	
	<h3 style="padding-top: 10px;"><?php echo "Agency";?></h3>
	<div style="text-align: justify;"><?php echo $obj->description->agency;?></div>
	
	<h3 style="padding-top: 10px;"><?php echo "Import";?></h3>
	<div style="text-align: justify;"><?php echo $obj->description->import;?></div>
	
	<h3 style="padding-top: 10px;"><?php echo "Principles";?></h3>
	<div style="text-align: justify;"><?php echo $obj->description->principles;?></div>
	
	<h3 style="padding-top: 10px;"><?php echo "Business Ethics";?></h3>
	<div style="text-align: justify;"><?php echo $obj->description->business_ethics;?></div>
	
	<h3 style="padding-top: 10px;"><?php echo "Quality Assurance";?></h3>
	<div style="text-align: justify;"><?php echo $obj->description->quality_assurance;?></div>
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
			</a>
		</span>
	<?php endif;?>
					
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
<?php endwhile;?>

<?php else: ?>
	<p><?php _e( 'Sorry, no page found.', 'rt_theme'); ?></p>
<?php endif; ?>

<?php get_footer();?>