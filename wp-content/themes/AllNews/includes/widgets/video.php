<?php

/* Royal Video Widget */

add_action( 'widgets_init', 'royal_video_widgets' );

function royal_video_widgets() {
	register_widget( 'royal_Video_Widget' );
}

class royal_video_widget extends WP_Widget {

	function royal_Video_Widget() {
	    global $themename;
		$widget_ops = array( 'classname' => 'royal_video_widget', 'description' => __('Your video from YouTube or Vimeo Video.') );
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'royal_video_widget' );
		$this->WP_Widget( 'royal_video_widget', __($themename.' - Video Widget'), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title'] );
		$embed = $instance['embed'];
		$desc = $instance['desc'];

		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		?>
			<div class="video_widget">
			<?php echo $embed ?>
			</div>
			<p class="video_desc"><?php echo $desc ?></p>
		<?php

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['desc'] = stripslashes( $new_instance['desc']);
		$instance['embed'] = stripslashes( $new_instance['embed']);
		return $instance;
	}
	

	function form( $instance ) {

		$defaults = array(
		'title' => 'My Video',
		'embed' => stripslashes( '<object style="height: 180px; width: 260px">
        <param name="movie" value="http://www.youtube.com/v/LZfHjn6KDCc?version=3&feature=player_detailpage"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/LZfHjn6KDCc?version=3&feature=player_detailpage" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="260" height="180">
        </object>'),
		'desc' => 'The video description',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'embed' ); ?>"><?php _e('Embed Code (recommended width 260px)') ?></label>
			<textarea style="height:200px;" class="widefat" id="<?php echo $this->get_field_id( 'embed' ); ?>" name="<?php echo $this->get_field_name( 'embed' ); ?>"><?php echo stripslashes(htmlspecialchars(( $instance['embed'] ), ENT_QUOTES)); ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'desc' ); ?>"><?php _e('Video Description:') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>" value="<?php echo stripslashes(htmlspecialchars(( $instance['desc'] ), ENT_QUOTES)); ?>" />
		</p>
		
	<?php
	}
}
?>