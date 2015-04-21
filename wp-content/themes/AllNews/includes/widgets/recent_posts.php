<?php

/* Royal Recent Post Widget */
 
class Royal_RecentPost_Widget extends WP_Widget {

    function Royal_RecentPost_Widget() {
		global $themename;
		$widget_ops = array('classname' => 'custom-recent-widget', 'description' => __( "Recent post widget with post thumbnails") );
		$control_ops = array('width' => 250, 'height' => 200);
		$this->WP_Widget('recentposts', __($themename.' - Recent Post'), $widget_ops, $control_ops);
    }

    function widget($args, $instance) {
		global $wpdb, $shortname;
        extract( $args );
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
		
		if ( !$number = (int) $instance['number'] )
			$number = 3;
		else if ( $number < 1 )
			$number = 1;
		else if ( $number > 15 )
			$number = 15;
			
		$disable_thumb = $instance['disable_thumb'] ? '1' : '0';

		$posts = get_posts("numberposts=$number&offset=0");

		echo $before_widget;
		echo $before_title . $title . $after_title;

		if($posts){ ?>

		<ul class="widget_recent_posts">
			<?php foreach($posts as $post){
					$post_title = stripslashes($post->post_title);
					$permalink = get_permalink($post->ID);
					$post_date = $post->post_date;
					$post_date = mysql2date('d F, Y', $post_date, false);
					$category = get_the_category($post->ID);
					$category_link = get_category_link($post->ID);
			?>
			<li>
				<?php if(!$disable_thumb) { ?>
				<a href="<?php echo $permalink; ?>">
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>	
				<span class="widget_thumbnail">
				<?php $image = aq_resize( $thumbnailSrc, 80, 60, true ); ?>
                <img src="<?php echo $image ?>" alt="<?php echo $post_title; ?>" title="<?php echo $post_title; ?>" />
				</span>
				</a>
				<?php } ?>
				<div class="widget_info">
				<a class="widget_title" href="<?php echo $permalink; ?>" rel="bookmark"><?php echo $post_title; ?></a>
				<div class="widget_date"><?php echo $post_date; ?></div><div class="widget_category"> <?php echo '<a href="'.get_category_link($category[0]->term_id ).'" title="View all posts from this category">'?> <?php echo $category[0]->cat_name; ?></a></div>
			    </div>
			<div class="clear"></div>
			</li>
				<?php } ?>
				
		</ul>
			<?php }	
			
		echo $after_widget;
    }

    function update($new_instance, $old_instance) {				
        	$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$instance['disable_thumb'] = !empty($new_instance['disable_thumb']) ? 1 : 0;
				
        return $instance;
    }

    function form($instance) {				
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$disable_thumb = isset( $instance['disable_thumb'] ) ? (bool) $instance['disable_thumb'] : false;
		if ( !isset($instance['number']) || !$number = (int) $instance['number'] )
			$number = 3;
        ?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('number'); ?>">Enter the number of recent posts you'd like to display:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" /></p>

		<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('disable_thumb'); ?>" name="<?php echo $this->get_field_name('disable_thumb'); ?>"<?php checked( $disable_thumb ); ?> />
		<label for="<?php echo $this->get_field_id('disable_thumb'); ?>"><?php _e( 'Disable Post Thumbnail?' ); ?></label></p>

        <?php 
    }

}

add_action('widgets_init', create_function('', 'return register_widget("Royal_RecentPost_Widget");'));

?>