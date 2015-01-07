<?php
class LatestNews extends WP_Widget {

	function LatestNews() {
		// Instantiate the parent object
		parent::__construct( false, 'Latest News' );
	}

	function widget( $args, $instance ) {
		// Widget output
		extract( $args );

		$link1=$instance['link1'];
		$text1=$instance['text1'];
		$desc1=$instance['desc1'];
		
		$link2=$instance['link2'];
		$text2=$instance['text2'];
		$desc2=$instance['desc2'];
		
		$link3=$instance['link3'];
		$text3=$instance['text3'];
		$desc3=$instance['desc3'];
		
		$post='<div class="title"><h4>Latest News</h4></div>
		<div class="recent_posts classic">
			<ul>
				<li class="date"><span class="day">07</span>Jan</li>
				<li><span class="title"><a href="'.$link1.'">'.$text1.'</a></span>'.$desc1.'</li>
			</ul>
			<ul>
				<li class="date"><span class="day">28</span>Dec</li>
				<li><span class="title"><a href="'.$link2.'">'.$text2.'</a></span>'.$desc2.'</li>
			</ul>
			<ul>
				<li class="date"><span class="day">14</span>Dec</li>
				<li><span class="title"><a href="'.$link3.'">'.$text3.'</a></span>'.$desc3.'</li>
			</ul>
		</div>';
		
		echo $before_widget;
		echo $post;
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
		$instance = $old_instance;
		$instance['link1']=$new_instance['link1'];
		$instance['text1']=$new_instance['text1'];
		$instance['desc1']=$new_instance['desc1'];
		$instance['link2']=$new_instance['link2'];
		$instance['text2']=$new_instance['text2'];
		$instance['desc2']=$new_instance['desc2'];
		$instance['link3']=$new_instance['link3'];
		$instance['text3']=$new_instance['text3'];
		$instance['desc3']=$new_instance['desc3'];
		
		return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
		$link1=isset($instance['link1']) ? esc_attr($instance['link1']) : '';
		$text1=isset($instance['text1']) ? esc_attr($instance['text1']) : '';
		$desc1=isset($instance['desc1']) ? esc_attr($instance['desc1']) : '';
		
		$link2=isset($instance['link2']) ? esc_attr($instance['link2']) : '';
		$text2=isset($instance['text2']) ? esc_attr($instance['text2']) : '';
		$desc2=isset($instance['desc2']) ? esc_attr($instance['desc2']) : '';
		
		$link3=isset($instance['link3']) ? esc_attr($instance['link3']) : '';
		$text3=isset($instance['text3']) ? esc_attr($instance['text3']) : '';
		$desc3=isset($instance['desc3']) ? esc_attr($instance['desc3']) : '';

		?>
		
		<p><label for="<?php echo $this->get_field_id('link1'); ?>">Link 1</label>
		<input class="widefat" id="<?php echo $this->get_field_id('link1'); ?>" name="<?php echo $this->get_field_name('link1'); ?>" type="text" value="<?php echo $link1; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('text1'); ?>">Text 1</label>
		<input class="widefat" id="<?php echo $this->get_field_id('text1'); ?>" name="<?php echo $this->get_field_name('text1'); ?>" type="text" value="<?php echo $text1; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('desc1'); ?>">Description 1</label>
		<input class="widefat" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>" type="text" value="<?php echo $desc1; ?>" /></p>
		
		<br/>
		<br/>
		
		<p><label for="<?php echo $this->get_field_id('link2'); ?>">Link 2</label>
		<input class="widefat" id="<?php echo $this->get_field_id('link2'); ?>" name="<?php echo $this->get_field_name('link2'); ?>" type="text" value="<?php echo $link2; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('text2'); ?>">Text 2</label>
		<input class="widefat" id="<?php echo $this->get_field_id('text2'); ?>" name="<?php echo $this->get_field_name('text2'); ?>" type="text" value="<?php echo $text2; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('desc2'); ?>">Description 2</label>
		<input class="widefat" id="<?php echo $this->get_field_id('desc2'); ?>" name="<?php echo $this->get_field_name('desc2'); ?>" type="text" value="<?php echo $desc2; ?>" /></p>
		
		<br/>
		<br/>
		
		<p><label for="<?php echo $this->get_field_id('link3'); ?>">Link 3</label>
		<input class="widefat" id="<?php echo $this->get_field_id('link3'); ?>" name="<?php echo $this->get_field_name('link3'); ?>" type="text" value="<?php echo $link3; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('text3'); ?>">Text 3</label>
		<input class="widefat" id="<?php echo $this->get_field_id('text3'); ?>" name="<?php echo $this->get_field_name('text3'); ?>" type="text" value="<?php echo $text3; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('desc3'); ?>">Description 3</label>
		<input class="widefat" id="<?php echo $this->get_field_id('desc3'); ?>" name="<?php echo $this->get_field_name('desc3'); ?>" type="text" value="<?php echo $desc3; ?>" /></p>
		
		<?php
	}
}

function register_widgets() {
	register_widget( 'LatestNews' );
}

add_action( 'widgets_init', 'register_widgets' );
