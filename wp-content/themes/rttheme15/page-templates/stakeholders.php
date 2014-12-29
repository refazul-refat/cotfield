<?php
/**
 * Template Name: Stakeholders Page
 *
 * @package WordPress
 * @subpackage RT-Theme
 *
 */
?>

<?php get_header();?>

<?php get_template_part( 'sub_page_header', 'sub_page_header_file' );?>



<?php
$json=file_get_contents(get_site_url().'/services/stakeholders');
$obj=json_decode($json);
?>
<h1 style="font-size:30px;">Stakeholders</h1>

<h2 style="padding-top: 20px;"><?php echo $obj->stakeholders_mutual_benefits->title;?></h2>
<div style="text-align: justify;font-size: 14px;margin-bottom: 10px;"><?php echo $obj->stakeholders_mutual_benefits->description;?></div>

<h2 style="padding-top: 20px">Suppliers</h2>
<?php $i=0;foreach($obj->suppliers as $sup):?>

	<div style="padding: 5px; width: 31%; float:left;<?php if($i%3==0)echo 'clear:both;';?>">
		<img src="<?php echo $sup->logo;?>" width="100%" title="<?php $sup->name;?>"/>
	</div>

<?php $i++;endforeach; ?>

<h1 style="padding-top: 30px;clear: both;padding-bottom: 25px;">Customers</h1>
<div style="float:left;width:50%;">
	<h3>Spinning Mills</h3>
	<div style="text-align: justify;font-size: 14px;margin-bottom: 10px;"><?php echo $obj->customer->spinning_mills;?></div>
</div>
<div style="float:left;">
	<h3>Traders</h3>
	<div style="text-align: justify;font-size: 14px;margin-bottom: 10px;"><?php echo $obj->customer->traders;?></div>
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