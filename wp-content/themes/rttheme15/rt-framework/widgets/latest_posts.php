<?php
#
# RT-Theme Latest Posts With Thumbnails
#

class Latest_Posts extends WP_Widget {

	function Latest_Posts() {
		$opts =array(
					'classname' 	=> 'widget_latest_posts',
					'description' 	=> __( 'The most recent posts on your site with post thumbnails.', 'rt_theme_admin' )
				);

		$this-> WP_Widget('latest_posts', '['. THEMENAME.']   '.__('Recent Posts #2 ', 'rt_theme_admin'), $opts);
	}
	

	function widget( $args, $instance ) {
		extract( $args ); 

		$title			=	apply_filters('widget_title', $instance['title']) ;		 
		$categories		=	empty($instance['categories']) ? $instance['categories'] : implode($instance['categories'],',') ; 
		$count 			= 	empty($instance['count']) ? 5 : $instance['count'];
		$limit			=  	empty($instance['limit']) ? 100 : $instance['limit'];
		$show_thumbnails	=	$instance['show_thumbnails'];
		$show_excerpt		=	$instance['show_excerpt'];
		 
		$postargs			=	array('post_type'=>'post','showposts'=>$count,'cat'=>$categories, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1 );    
		$post_query 		= 	new WP_Query($postargs); 
		
		$rt_posts = '<ul class="popular_posts">';
		
		if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post();
						
			$post_title		=	get_the_title();
			$link			=	get_permalink();
			$date			=	get_the_time('d M Y');
		  
			$rt_posts .='<li>';
			
			if ( has_post_thumbnail() && !$show_thumbnails) :
				$f_thumb 		= 	get_post_thumbnail_id(); 
				$f_image 		= 	@vt_resize( $f_thumb, '', 50, 50, true );			
				if($f_image["url"]) $rt_posts .=	'<span class="frame alignleft latest_post_image"><img src="'. $f_image["url"] .'" alt="" /></span>';
			endif;
			

			$rt_posts .='<a href="'.$link.'">'.$post_title.'</a>';
			$rt_posts .='<span class="date">'.$date.'</span><div class="clear"></div>';
			$rt_posts .= ($show_excerpt) ? '<p>'.wp_html_excerpt(get_the_excerpt(),$limit).'...</p>' : "" ;
			$rt_posts .='<div class="clear"></div></li>';

		endwhile;endif;
		$rt_posts .= '</ul>';

		echo $before_widget;
		if ($title) echo $before_title . $title . $after_title;
		echo $rt_posts;
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		 
		$instance = $old_instance;
		$instance['title']			= strip_tags($new_instance['title']); 
		$instance['categories']		= $new_instance['categories'];
		$instance['newWidget']		= $new_instance['newWidget']; 
		$instance['limit']			= (int) $new_instance['limit'];
		$instance['count']			= (int) $new_instance['count'];
		$instance['show_thumbnails']	= !empty($new_instance['show_thumbnails']) ? 1 : 0;
		$instance['show_excerpt']	= !empty($new_instance['show_excerpt']) ? 1 : 0;
		
		return $instance;
	}

	function form( $instance ) {
		$title 				= 	isset($instance['title']) ? esc_attr($instance['title']) : '';
		$categories 		=	isset($instance['categories']) ? $instance['categories'] : array();
		$newWidget			= 	isset($instance['newWidget']) ? $instance['newWidget'] : "";
		$limit				=	empty($instance['limit']) ? 100 : $instance['limit'];
		$count				=	empty($instance['count']) ? 5 : $instance['count'];
		$show_thumbnails	=	isset($instance['show_thumbnails']) ? $instance['show_thumbnails'] : "";
		$show_excerpt		=	isset($instance['show_excerpt']) ? $instance['show_excerpt']: "";
		
		// Categories
		$rt_getcat = RTTheme::rt_get_categories();
		

?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'rt_theme_admin'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo empty($title) ? __('Recent Posts','rt_theme') : $title; ?>" /></p>
		
		
		<p><label for="<?php echo $this->get_field_id('categories'); ?>"><?php _e('Select Categories:', 'rt_theme_admin'); ?></label>
		
		<select class="widefat <?php echo empty($newWidget)? '' : 'multiple'; ?>"   name="<?php echo $this->get_field_name('categories'); ?>[]" id="<?php echo $this->get_field_id('categories'); ?>" multiple="multiple" title="<?php _e('Select','rt_theme_admin'); ?>">

			<?php
			foreach ($rt_getcat as $op_val=>$option) {
				if($categories){
					foreach($categories as $a_key => $a_value){
						if (	$a_value ==  $op_val ){
							$selected	= "selected";
						}				
					}
				}
			 ?>
				<option value="<?php echo $op_val;?>" <?php echo empty($selected) ? "" :  'selected="selected"'; ?> >
					<?php  echo $option; ?>
				</option>
			<?php
			$selected='';
			}
			?>
		</select>

		<p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Number of posts to show:', 'rt_theme_admin'); ?></label>
		<input id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" size="4" /></p>

		<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('show_thumbnails'); ?>" name="<?php echo $this->get_field_name('show_thumbnails'); ?>" <?php checked( $show_thumbnails ); ?> />
		<label for="<?php echo $this->get_field_id('show_thumbnails'); ?>"><?php _e( 'Don\'t display post thumbnails', 'rt_theme_admin' ); ?></label></p>
	
		<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('show_excerpt'); ?>" name="<?php echo $this->get_field_name('show_excerpt'); ?>" <?php checked( $show_excerpt ); ?> />
		<label for="<?php echo $this->get_field_id('show_excerpt'); ?>"><?php _e( 'Display Excerpt', 'rt_theme_admin' ); ?></label></p>

		<p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit excerpt characters: ', 'rt_theme_admin'); ?></label>
		<input id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" size="4" /></p>			
			
		<input class="widefat" id="<?php echo $this->get_field_id('newWidget'); ?>" name="<?php echo $this->get_field_name('newWidget'); ?>" type="hidden" value="1" />
		
<?php } } ?>
