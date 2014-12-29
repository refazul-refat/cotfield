<?php
/**
 * Template Name: Key Personnel Page
 *
 * @package WordPress
 * @subpackage RT-Theme
 *
 */
?>

<?php get_header();?>

<?php get_template_part( 'sub_page_header', 'sub_page_header_file' );?>


<h1 style="font-size: 30px;padding-bottom: 25px;"><?php the_title(); ?></h1>

<?php
$json=file_get_contents(get_site_url().'/services/company-overview');
$obj=json_decode($json);
$obj=$obj->board_of_directors;

foreach($obj as $ob):
?>
<div style="clear:both;margin-bottom: 10px;">
	<div style="padding: 5px; border: 1px solid #ccc;line-height:0px;width:25%;<?php if($ob->id%2==0)echo 'float:left;margin-right:10px;';else echo 'float:right;margin-left:10px;';?>;">
		<img src="<?php echo $ob->image;?>" width="100%" height="" alt="<?php the_title(); ?>" />
	</div>
	<div style="<?php if($ob->id%2==1)echo 'float:right;';else echo 'float:left;';?>">
		<h2><?php echo $ob->name;?></h2>
		<h4 style="color:#9B9A99;<?php if($ob->id%2==1)echo 'text-align:right;';else echo 'text-align:left;';?>"><?php echo $ob->designation;?></h4>
	</div>
	<div style="clear:both;"></div>
</div>

<div>
	
</div>

<?php endforeach; ?>

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