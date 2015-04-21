<?php
$prefix = 'r_';

$meta_box_single = array(
	'id' => 'my-meta-box',
	'title' => 'Single post settings',
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Hide Thumbnail',
			'id' => $prefix . 'post_thumbnail',
			'type' => 'checkbox',
			'desc' => 'Check the box to hide the post thumbnail'
		),
		
		array(
			'name' => 'Full width thumbnail',
			'id' => $prefix . 'post_thumbnail_full',
			'type' => 'checkbox',
			'desc' => 'Check the box to show full width thumbnail'
		),
		
		array(
			'name' => 'Show Video',
			'id' => $prefix . 'post_video',
			'type' => 'checkbox',
			'desc' => 'Check the box to show video'
		),
		
		array(
			'name' => 'Video in Home flex slider',
			'id' => $prefix . 'slider_video_post',
			'type' => 'checkbox',
			'desc' => 'Check the box to show video in Flex slider on Home page'
		),
		
		array(
			'name' => 'Open video in lightbox',
			'id' => $prefix . 'lightbox_video_post',
			'type' => 'checkbox',
			'desc' => 'Check the box to open video in lightbox'
		),
		
		array(
			'name' => 'Youtube video',
			'desc' => 'Paste the video, only after the symbol "v =" (ex: http://www.youtube.com/watch?v=UJ1MOWg15Ec, UJ1MOWg15Ec - only this code)',
			'id' => $prefix . 'youtube',
			'type' => 'text',
			'std' => ''
		),
		
		array(
			'name' => 'Vimeo video',
			'desc' => 'Insert the video id (ex: http://vimeo.com/6284199, 6284199 - ID)',
			'id' => $prefix . 'vimeo',
			'type' => 'text',
			'std' => ''
		),
		
		array(
			'name' => 'Show player instead thumbnail',
			'id' => $prefix . 'show_player',
			'type' => 'checkbox',
			'desc' => 'Check the box to show player instead thumbnail'
		),
		
		array(
			'name' => 'Audio code',
			'desc' => 'Paste the audio code (guide see in documentation)',
			'id' => $prefix . 'audio',
			'type' => 'textarea',
			'std' => ''
		),
		
	)
);


function my_editor_style_single() {

    global $current_screen;

    switch ($current_screen->post_type) {

    case 'post':

        echo '
		<script type="text/javascript" src="'.get_bloginfo('template_directory').'/options/js/jquery_1.8.3.js"></script>
		<script type="text/javascript" src="'.get_bloginfo('template_directory').'/options/js/iphone-style-checkboxes.js"></script>
		<script type="text/javascript" src="'.get_bloginfo('template_directory').'/options/js/custom_fields.js"></script>
        <link rel="stylesheet" href="'.get_bloginfo('template_directory').'/css/ui_styles.css" type="text/css" media="all" />';

        break;

    case 'page':

        break;

    case 'acf': // CPT

        //echo '<script>alert("post");</script>';

        break;

    }

}

add_action( 'admin_head', 'my_editor_style_single' );

add_action('admin_menu', 'mytheme_add_box_single');

// Add meta box
function mytheme_add_box_single() {
	global $meta_box_single;
	
	add_meta_box($meta_box_single['id'], $meta_box_single['title'], 'mytheme_show_box_single', $meta_box_single['page'], $meta_box_single['context'], $meta_box_single['priority']);
}

// Callback function to show fields in meta box
function mytheme_show_box_single() {
	global $meta_box_single, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_single_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($meta_box_single['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" class="input_style" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:100%" />',
					'<br />', $field['desc'];
				break;
			case 'textarea':
				echo '<textarea name="', $field['id'], '" class="input_style" id="', $field['id'], '" cols="60" rows="4" style="width:100%">', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
			case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>';
				break;
			case 'radio':
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
				}
				break;
			case 'checkbox':
				echo '<div class="on_off"><input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' /></div>';
				break;
		}
		echo 	'<td>',
			'</tr>';
	}
	
	echo '</table>';
}

add_action('save_post', 'mytheme_save_data_single');

// Save data from meta box
function mytheme_save_data_single($post_id) {
	global $meta_box_single;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_single_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box_single['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}

?>