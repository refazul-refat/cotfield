<?php
class LatestNews extends WP_Widget {

	function LatestNews() {
		// Instantiate the parent object
		parent::__construct( false, 'Latest News' );
	}

	function widget( $args, $instance ) {
		// Widget output
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
	}

	function form( $instance ) {
		// Output admin widget options form
	}
}

function register_widgets() {
	register_widget( 'LatestNews' );
}

add_action( 'widgets_init', 'register_widgets' );
