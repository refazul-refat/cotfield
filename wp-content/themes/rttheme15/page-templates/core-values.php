<?php
/**
 * Template Name: Core Values Page
 *
 * @package WordPress
 * @subpackage RT-Theme
 *
 */
?>

<?php get_header();?>

<?php get_template_part( 'sub_page_header', 'sub_page_header_file' );?>

<?php
$json=file_get_contents(get_site_url().'/services/company-overview');
$obj=json_decode($json);
$obj=$obj->core_values;

?>

<h1 style="padding-top: 0px;"><?php echo $obj->core_values_of_cotfield->title;?></h1>
<div style="text-align: justify;font-size: 14px;margin-bottom: 10px;"><?php echo $obj->core_values_of_cotfield->description;?></div>
<div style="padding: 5px; border: 1px solid #ccc;line-height:0px;width:65%;position:relative;left:17.5%;">
	<img src="<?php echo $obj->core_values_of_cotfield->image;?>" width="100%" height="" alt="<?php the_title(); ?>" />
</div>

<h1 style="padding-top: 40px;"><?php echo $obj->sales_diagram_since_starting->title;?></h1>
<div style="text-align: justify;font-size: 14px;margin-bottom: 10px;"><?php echo $obj->sales_diagram_since_starting->description;?></div>
<div style="padding: 5px; border: 1px solid #ccc;line-height:0px;width:65%;position:relative;left:17.5%;">
	<img src="<?php echo $obj->sales_diagram_since_starting->image;?>" width="100%" height="" alt="<?php the_title(); ?>" />
</div>

<h1 style="padding-top: 40px;">Core Services of Marketing Team</h1>

<?php foreach($obj->core_services_of_marketing_team as $ob):?>
<h3 style="padding-top: 20px;"><?php echo $ob->title;?></h3>
<div style="text-align: justify;font-size: 14px;margin-bottom: 10px;"><?php echo $ob->description;?></div>
<?php if($ob->image==null)continue;?>
<div style="padding: 5px; border: 1px solid #ccc;line-height:0px;width:65%;position:relative;left:17.5%;">
	<img src="<?php echo $ob->image;?>" width="100%" height="" />
</div>
<?php endforeach;?>



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