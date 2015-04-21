<?php

$theme_path = get_template_directory_uri() . '/images';

	
get_template_directory_uri() . '/js/et_shortcodes_frontend.js';

function r_onehalf($atts, $content = null) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

return '<div class="onehalf" style="text-align:'.$align.';">' . do_shortcode($content) . '</div>';
}

add_shortcode('onehalf' , 'r_onehalf' );

function r_one_half_last( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 
	
return '<div class="one_half_last" style="text-align:'.$align.';">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_half_last', 'r_one_half_last');


function r_one_third( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="one_third" style="text-align:'.$align.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'r_one_third');

function r_one_third_last( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

   return '<div class="one_third_last" style="text-align:'.$align.';">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_third_last', 'r_one_third_last');


function r_one_fourth( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="one_fourth" style="text-align:'.$align.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'r_one_fourth');

function r_one_fourth_last( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

   return '<div class="one_fourth_last" style="text-align:'.$align.';">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_fourth_last', 'r_one_fourth_last');


function r_one_fifth( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="one_fifth" style="text-align:'.$align.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'r_one_fifth');

function r_one_fifth_last( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

   return '<div class="one_fifth_last" style="text-align:'.$align.';">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_fifth_last', 'r_one_fifth_last');


function r_two_third( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="two_third" style="text-align:'.$align.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'r_two_third');

function r_two_third_last( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="two_third_last" style="text-align:'.$align.';">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('two_third_last', 'r_two_third_last');


function r_three_fourth( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="three_fourth" style="text-align:'.$align.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'r_three_fourth');

function r_three_fourth_last( $atts, $content = null ) {

extract(shortcode_atts(array(
        'align' => '',
	), $atts)); 

 return '<div class="three_fourth_last" style="text-align:'.$align.';">' . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('three_fourth_last', 'r_three_fourth_last');





function r_successbox($atts, $content = null) {
 return '<div class="success">' . do_shortcode($content) . '</div>';
}
add_shortcode('success' , 'r_successbox' );

function r_attentionbox($atts, $content = null) {
 return '<div class="attention">' . do_shortcode($content) . '</div>';
}
add_shortcode('attention' , 'r_attentionbox' );

function r_warningbox($atts, $content = null) {
 return '<div class="warning">' . do_shortcode($content) . '</div>';
}
add_shortcode('warning' , 'r_warningbox' );

function r_infobox($atts, $content = null) {
 return '<div class="info">' . do_shortcode($content) . '</div>';
}
add_shortcode('info' , 'r_infobox' );

function r_questionbox($atts, $content = null) {
 return '<div class="question">' . do_shortcode($content) . '</div>';
}
add_shortcode('question' , 'r_questionbox' );

function r_quotesbox($atts, $content = null) {
 return '<div class="quotes">' . do_shortcode($content) . '</div>';
}
add_shortcode('quotes' , 'r_quotesbox' );

function r_commentbox($atts, $content = null) {
 return '<div class="comment_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('comment_box' , 'r_commentbox' );


function r_color_box($atts, $content = null) {

extract(shortcode_atts(array(
        'bg' => '',
		'text' => '',
		'border' => ''
	), $atts));
	
 return '<div class="color_box" style="background: #'.$bg.'; color: #'.$text.'; border: 1px solid #'.$border.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('color_box' , 'r_color_box' );


function r_box_style_one($atts, $content = null) {
 return '<div class="box_style_one">' . do_shortcode($content) . '</div>';
}
add_shortcode('box_style_one' , 'r_box_style_one' );


function r_box_style_two($atts, $content = null) {
 return '<div class="box_style_two">' . do_shortcode($content) . '
 <div class="clear"></div>
 <div class="box_shadow">
 <div class="box_shadow_left"></div>
 <div class="box_shadow_right"></div>
 </div>
 </div>';
}
add_shortcode('box_style_two' , 'r_box_style_two' );


function r_title_style($atts, $content = null) {
 return '<div class="title_style">' . do_shortcode($content) . '</div>';
}
add_shortcode('title_style' , 'r_title_style' );




function r_list_style_arrow( $atts, $content = null ) {
return '<ul class="ul_li_arrow">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_arrow', 'r_list_style_arrow');

function r_list_style_star( $atts, $content = null ) {
return '<ul class="ul_li_star">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_star', 'r_list_style_star');

function r_list_style_cube( $atts, $content = null ) {
return '<ul class="ul_li_cube">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_cube', 'r_list_style_cube');

function r_list_style_success( $atts, $content = null ) {
return '<ul class="ul_li_success">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_success', 'r_list_style_success');



function r_list_style_arrow_empty( $atts, $content = null ) {
return '<ul class="ul_li_arrow_empty">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_arrow_empty', 'r_list_style_arrow_empty');

function r_list_style_star_empty( $atts, $content = null ) {
return '<ul class="ul_li_star_empty">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_star_empty', 'r_list_style_star_empty');

function r_list_style_cube_empty( $atts, $content = null ) {
return '<ul class="ul_li_cube_empty">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_cube_empty', 'r_list_style_cube_empty');

function r_list_style_success_empty( $atts, $content = null ) {
return '<ul class="ul_li_success_empty">' . do_shortcode($content) . '</ul>';
}
add_shortcode('list_style_success_empty', 'r_list_style_success_empty');





function r_button_white( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_white" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('white_button', 'r_button_white');


function r_button_white_big( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_white_big" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('white_button_big', 'r_button_white_big');


function r_button_grey( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_grey" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('grey_button', 'r_button_grey');


function r_button_grey_big( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_grey_big" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('grey_button_big', 'r_button_grey_big');


function r_button_black( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_black" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('black_button', 'r_button_black');


function r_button_black_big( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_black_big" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('black_button_big', 'r_button_black_big');


function r_button_green( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_green" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('green_button', 'r_button_green');


function r_button_green_big( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_green_big" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('green_button_big', 'r_button_green_big');


function r_button_red( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_red" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('red_button', 'r_button_red');


function r_button_red_big( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_red_big" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('red_button_big', 'r_button_red_big');


function r_button_blue( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_blue" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('blue_button', 'r_button_blue');


function r_button_blue_big( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_blue_big" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('blue_button_big', 'r_button_blue_big');


function r_button_download( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_download" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('button_download', 'r_button_download');


function r_button_upload( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_upload" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('button_upload', 'r_button_upload');


function r_button_success( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_success" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('button_success', 'r_button_success');


function r_button_cancel( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_cancel" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('button_cancel', 'r_button_cancel');


function r_button_next( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => ''
	), $atts));
	return '<a class="button_next" rel="'.$rel.'" href="'.$link.'"><span>'.$content.'</span></a>';
}
add_shortcode('button_next', 'r_button_next');


function r_button_custom( $atts, $content = null ) {

extract(shortcode_atts(array(
        'rel' => '',
		'link' => '',
		'bg' => '',
		'border' => '',
		'color' => ''
	), $atts));
	return '<a class="button_custom" rel="'.$rel.'" href="'.$link.'" style="border-color: #'.$border.'; background-color: #'.$bg.'; color: #'.$color.';"><span>'.$content.'</span></a>';
}
add_shortcode('button_custom', 'r_button_custom');



function r_dropcap( $atts, $content = null ) {
return '<div class="dropcap">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap', 'r_dropcap');


function r_dropcap_empty( $atts, $content = null ) {
return '<div class="dropcap_empty">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_empty', 'r_dropcap_empty');


function r_dropcap_white( $atts, $content = null ) {
return '<div class="dropcap_white">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_white', 'r_dropcap_white');


function r_dropcap_grey( $atts, $content = null ) {
return '<div class="dropcap_grey">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_grey', 'r_dropcap_grey');


function r_dropcap_black( $atts, $content = null ) {
return '<div class="dropcap_black">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_black', 'r_dropcap_black');


function r_dropcap_green( $atts, $content = null ) {
return '<div class="dropcap_green">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_green', 'r_dropcap_green');


function r_dropcap_red( $atts, $content = null ) {
return '<div class="dropcap_red">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_red', 'r_dropcap_red');


function r_dropcap_blue( $atts, $content = null ) {
return '<div class="dropcap_blue">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_blue', 'r_dropcap_blue');


function r_dropcap_box( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'color' => '',
		'border' => ''
	), $atts));

return '<div class="dropcap_box" style="background: #'.$bg.'; color: #'.$color.'; border: 1px solid #'.$border.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcap_box', 'r_dropcap_box');





function r_icon_phone_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_phone_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_phone_small', 'r_icon_phone_small');


function r_icon_iphone_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_iphone_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_iphone_small', 'r_icon_iphone_small');


function r_icon_pointer_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_pointer_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_pointer_small', 'r_icon_pointer_small');


function r_icon_mail_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_mail_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_mail_small', 'r_icon_mail_small');


function r_icon_pen_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_pen_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_pen_small', 'r_icon_pen_small');


function r_icon_arrow_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_arrow_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_arrow_small', 'r_icon_arrow_small');


function r_icon_user_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_user_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_user_small', 'r_icon_user_small');



function r_icon_users_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_users_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_users_small', 'r_icon_users_small');


function r_icon_add_user_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_add_user_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_add_user_small', 'r_icon_add_user_small');


function r_icon_contact_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_contact_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_contact_small', 'r_icon_contact_small');


function r_icon_heart_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_heart_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_heart_small', 'r_icon_heart_small');


function r_icon_star_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_star_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_star_small', 'r_icon_star_small');


function r_icon_like_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_like_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_like_small', 'r_icon_like_small');


function r_icon_comments_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_comments_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_comments_small', 'r_icon_comments_small');



function r_icon_comment_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_comment_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_comment_small', 'r_icon_comment_small');


function r_icon_quote_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_quote_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_quote_small', 'r_icon_quote_small');


function r_icon_print_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_print_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_print_small', 'r_icon_print_small');


function r_icon_flag_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_flag_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_flag_small', 'r_icon_flag_small');


function r_icon_settings_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_settings_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_settings_small', 'r_icon_settings_small');


function r_icon_cup_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_cup_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_cup_small', 'r_icon_cup_small');


function r_icon_camera_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_camera_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_camera_small', 'r_icon_camera_small');


function r_icon_view_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_view_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_view_small', 'r_icon_view_small');


function r_icon_clock_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_clock_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_clock_small', 'r_icon_clock_small');


function r_icon_lock_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_lock_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_lock_small', 'r_icon_lock_small');


function r_icon_ok_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_ok_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_ok_small', 'r_icon_ok_small');


function r_icon_not_ok_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_not_ok_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_not_ok_small', 'r_icon_not_ok_small');


function r_icon_block_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_block_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_block_small', 'r_icon_block_small');


function r_icon_info_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_info_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_info_small', 'r_icon_info_small');


function r_icon_help_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_help_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_help_small', 'r_icon_help_small');


function r_icon_expansion_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_expansion_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_expansion_small', 'r_icon_expansion_small');


function r_icon_narrowing_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_narrowing_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_narrowing_small', 'r_icon_narrowing_small');


function r_icon_up_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_up_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_up_small', 'r_icon_up_small');


function r_icon_down_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_down_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_down_small', 'r_icon_down_small');


function r_icon_home_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_home_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_home_small', 'r_icon_home_small');


function r_icon_book_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_book_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_book_small', 'r_icon_book_small');


function r_icon_search_small( $atts, $content = null ) {

extract(shortcode_atts(array(
        'bg' => '',
		'border' => ''
	), $atts)); 

return '<div class="icon_search_small" style="background-color: #'.$bg.'; border-color: #'.$border.';"></div>';
}
add_shortcode('icon_search_small', 'r_icon_search_small');





function r_testimonials_style_one($atts, $content = null) {
extract(shortcode_atts(array(
		'name' => '',
		'post' => '',
		'company' => ''
	), $atts));
 return '<div class="testimonials_style_one">'.do_shortcode($content).'</div><div class="hum"></div><div class="hum_bg"></div><div class="testim_info"><div class="testim_info_name">'.$name.'</div>'.$post.'<div class="testim_info_company">'.$company.'</div></div><div class="clear"></div>';
}
add_shortcode('testimonials_style_one' , 'r_testimonials_style_one' );


function r_testimonials_style_two($atts, $content = null) {
extract(shortcode_atts(array(
		'name' => '',
		'post' => '',
		'company' => ''
	), $atts));
 return '<div class="testimonials_style_two">'.do_shortcode($content).'</div><div class="testim_info_two"><div class="testim_info_name">'.$name.'</div>'.$post.'<div class="testim_info_company">'.$company.'</div></div><div class="clear"></div>';
}
add_shortcode('testimonials_style_two' , 'r_testimonials_style_two' );




function r_image_lightbox( $atts, $content = null ) {	
extract( shortcode_atts( array(
    'rel' => 'prettyPhoto',
	'link' => '',
	'title' => ''
), $atts ) );
return '<a class="image_lightbox" rel="'.$rel.'" href="'.$link.'" title="'.$title.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('image_lightbox', 'r_image_lightbox');



function r_image_colorless( $atts, $content = null ) {	
extract( shortcode_atts( array(
	'link' => '',
	'color' => '',
	'colorless' => ''
), $atts ) );
return '<div class="grey_image">
<a href="'.$link.'"><img src="'.$colorless.'" class="grey" /></a>
<img src="'.$color.'" class="color" />
</div>';
}
add_shortcode('image_colorless', 'r_image_colorless');



function r_image_rounded( $atts, $content = null ) {	
extract( shortcode_atts( array(
	'path' => ''
), $atts ) );
return '<img src="'.$path.'" class="rounded_image" />';
}
add_shortcode('image_rounded', 'r_image_rounded');




function r_youtube($atts, $content = null) {
   extract(shortcode_atts(array(
			'video'  => ''
			), $atts));

		return '<div class="video-wrapper">
	<div class="video-container"><div class="youtube_video_short"><object><embed src="http://www.youtube.com/v/'.$video.'&amp;hl=en_US&amp;fs=1&amp;" type="application/x-shockwave-flash" ></embed></object></div></div>
	</div>';    
	}
add_shortcode('youtube', 'r_youtube');


function r_vimeo($atts, $content = null) {
	extract(shortcode_atts(array(
			'clip_id' 	=> ''
		), $atts));

		if (empty($clip_id) || !is_numeric($clip_id)) return '<!-- Invalid clip_id -->';
		if ($height && !$width) $width = intval($height * 16 / 9);
		if (!$height && $width) $height = intval($width * 9 / 16);
		return "<div class='video-wrapper'>
	<div class='video-container'><iframe src='http://player.vimeo.com/video/$clip_id?title=0&amp;byline=0&amp;portrait=0' frameborder='0' ></iframe></div>
	</div>";
    }

add_shortcode('vimeo', 'r_vimeo');



function r_toggle( $atts, $content = null ) {	
extract( shortcode_atts( array(
    'title' => 'Toggler name',
    'bg' => '',
	'border' => '',
	'color' => ''
), $atts ) );
		
$result = '<div class="myToggler" style="border-color: #'.$border.'; background-color: #'.$bg.'; color: #'.$color.';">
	<span class="togglerSign">＋</span>'.esc_attr($title).'</div>

<div class="mySlider">'.do_shortcode($content).'</div><div class="clear"></div>';
return $result;	
}
add_shortcode('toggle', 'r_toggle');




function r_tabs( $atts, $content ) {
extract( shortcode_atts( array(
    'bg' => '',
	'border' => '',
	'color' => ''
), $atts ) );
$GLOBALS['tab_count'] = 0;

do_shortcode( $content );

if ( is_array( $GLOBALS['tabs'] ) ) {
foreach ( $GLOBALS['tabs'] as $tab ) {
$tabs[] = '<span style="border-color: #'.$border.'; background-color: #'.$bg.'; color: #'.$color.';">' . $tab['title'] . '</span>';
$panes[] = '<div class="su-tabs-pane">' . $tab['content'] . '</div>';
}
$return = '<div class="su-tabs"><div class="su-tabs-nav">' . implode( '', $tabs ) . '</div>
<div class="clear"></div>
<div class="su-tabs-panes">' . implode( "\n", $panes ) . '</div></div>';
}
return $return;
}
add_shortcode('tabs' , 'r_tabs' );


function r_tab( $atts, $content ) {
extract( shortcode_atts( array(
    'title' => 'Tab %d'
), $atts ) );

$x = $GLOBALS['tab_count'];
$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' => do_shortcode( $content ) );
$GLOBALS['tab_count']++;
}
add_shortcode('tab' , 'r_tab' );



function r_accordion( $atts, $content = null ) {	
extract( shortcode_atts( array(
    'title' => 'Tab name',
    'bg' => '',
	'border' => '',
	'color' => ''
), $atts ) );
		
$result = '<h2 class="acc_trigger" style="border-color: #'.$border.'; background-color: #'.$bg.';"><a href="#" style="color: #'.$color.';">'.esc_attr($title).'</a></h2>
<div class="acc_container">
<div class="block">
<p>'.do_shortcode($content).'</p>
</div>
</div>';
return $result;	
}
add_shortcode('accordion', 'r_accordion');



function r_slider_box( $atts, $content = null ) {	
		
$result = '<div class="flexslider_short">
<ul class="slides">'.do_shortcode($content).'</ul>
</div>';
return $result;	
}
add_shortcode('slider_box', 'r_slider_box');


function r_slide( $atts, $content = null ) {	

extract(shortcode_atts(array(
'title' => 'Caption',
), $atts));	

$result = '<li>'.do_shortcode($content).'<p class="flex-caption">'.$title.'<div class="clear"></div></p></li>';
return $result;	
}
add_shortcode('slide', 'r_slide');




function r_gallery_box( $atts, $content = null ) {	

$result = '<div id="galleria">'.do_shortcode($content).'</div>';
return $result;	
}
add_shortcode('gallery_box', 'r_gallery_box');


function r_gallery_image( $atts, $content = null ) {	

extract(shortcode_atts(array(
'title' => 'Image',
'descr' => 'Image description',
'path' => '#'
), $atts));	

$result = '<a href="'.$path.'">
<a href="'.$path.'" class="portfolio_image_link" rel="prettyPhoto" title="'.$title.'">
<img data-title="'.$title.'" data-description="'.$descr.'" src="'.$path.'">
</a>';
return $result;	
}
add_shortcode('gallery_image', 'r_gallery_image');



function r_carousel_box( $atts, $content = null ) {	

extract(shortcode_atts(array(
'title' => 'Images',
), $atts));	
		
$result = '<div class="divider_space" style="height: 35px;"></div><ul class="jcarousel-skin-tango">'.do_shortcode($content).'</ul><div class="clear"></div>';
return $result;	
}
add_shortcode('carousel_box', 'r_carousel_box');


function r_carousel_image( $atts, $content = null ) {	

extract(shortcode_atts(array(
'title' => 'Image',
'path' => '#',
'link' => '#'
), $atts));	

$result = '<li>
<div class="view third-effect">
<img src="'.$path.'" title="'.$title.'" alt="'.$title.'" />
<div class="mask">
   <a href="'.$path.'" class="image_link" rel="prettyPhoto" title="'.$title.'"></a>
   <a href="'.$link.'" class="image_info" title="Read '.$title.'"></a>
</div>
</div>
</li>
<div class="carousel_image_shadow"></div>';
return $result;	
}
add_shortcode('carousel_image', 'r_carousel_image');




function r_carousel_content_box( $atts, $content = null ) {	
		
extract(shortcode_atts(array(
'title' => 'Title'
), $atts));			
		
$result = '
<div class="slidewrap">
<h3 class="car_title">'.$title.'</h3>
<ul class="slidecontrols">
<li><a href="#sliderName" class="car_next"></a></li>
<li><a href="#sliderName" class="car_prev"></a></li>
</ul>

<ul class="car_slider" id="sliderName">'.do_shortcode($content).'</ul></div><div class="clear"></div>';
return $result;	
}
add_shortcode('carousel_content_box', 'r_carousel_content_box');


function r_carousel_content_slide( $atts, $content = null ) {	

$result = '<li class="car_slide">'.do_shortcode($content).'</li>';
return $result;	
}
add_shortcode('carousel_content_slide', 'r_carousel_content_slide');



function r_tooltip( $atts, $content = null ) {

$result = '<div id="dyna">'.do_shortcode($content).'</div>';
return $result;	

return $content;
}
add_shortcode('tooltip', 'r_tooltip');


function custom_contact_form( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'email' => '',
    ), $atts));
    
    $out = r_contact_form($email);
    
    return $out;
}
add_shortcode('contactform', 'custom_contact_form');


function r_googleMaps($atts, $content = null) {
       extract(shortcode_atts(array(
                    "src" => ''
                    ), $atts));
      return '<div class="video-wrapper">
	<div class="video-container"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'"></iframe></div></div>';
}
add_shortcode("googlemap", "r_googleMaps");





function r_divider($atts, $content = null) {
 return '<div class="divider"></div>';
}
add_shortcode('divider' , 'r_divider' );


function r_divider_two_lines($atts, $content = null) {
 return '<div class="divider_two_lines"></div>';
}
add_shortcode('divider_two_lines' , 'r_divider_two_lines' );


function r_divider_space($atts, $content = null) {
extract( shortcode_atts( array(
	'height' => '',
), $atts ) );

 return '<div class="divider_space" style="height: '.$height.'px;"></div><div class="clear"></div>';
}
add_shortcode('divider_space' , 'r_divider_space' );

function r_dashed_divider($atts, $content = null) {
 return '<div class="divider_dashed"></div>';
}
add_shortcode('dashed_divider' , 'r_dashed_divider' );

function r_top_divider($atts, $content = null) {
 return '<div class="divider_top"><a href="#top">top &uarr;</a></div>';
}
add_shortcode('top_divider' , 'r_top_divider' );

function r_divider_style_one($atts, $content = null) {

 return '<div class="divider_style_one" align="center!important"><div class="divider_left_shadow"></div><div class="divider_right_shadow"></div></div><div class="clear"></div>';
}
add_shortcode('divider_style_one' , 'r_divider_style_one' );






function r_posts_one_column( $atts ) {
	extract( shortcode_atts( array(
		'category' => '',
		'num' => 2,
		'meta' => 1,
		'excerpt' => 1
	), $atts ) );

	global $wp_query,$post,$loopExcerpt,$loopMeta;
	$loopExcerpt = $excerpt;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();

	include(TEMPLATEPATH . '/includes/one_column_loop.php');

	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode( 'posts_one_column', 'r_posts_one_column' );


function r_posts_mini_one_column( $atts ) {
	extract( shortcode_atts( array(
		'category' => '',
		'num' => 2,
		'meta' => 1,
		'excerpt' => 1
	), $atts ) );
	
	global $wp_query,$post,$loopExcerpt,$loopMeta;
	$loopExcerpt = $excerpt;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();

	include(TEMPLATEPATH . '/includes/one_mini_column_loop.php');

	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode( 'posts_mini_one_column', 'r_posts_mini_one_column' );


function r_posts_two_column( $atts ) {
	extract( shortcode_atts( array(
		'category' => '',
		'num' => 3,
		'meta' => 1,
		'excerpt' => 1
	), $atts ) );

	global $wp_query,$post,$loopExcerpt,$loopMeta;
	$loopExcerpt = $excerpt;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();

	include(TEMPLATEPATH . '/includes/two_column_loop.php');

	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode( 'posts_two_column', 'r_posts_two_column' );




function r_posts_three_column($atts, $content = null) {
	extract(shortcode_atts(array(
	'category' => '',
	'num' => 4,
	'excerpt' => 1,
	'meta' => 1
	), $atts));

	global $wp_query,$post,$loopExcerpt,$loopMeta;
	$loopExcerpt = $excerpt;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();

	include(TEMPLATEPATH . '/includes/three_column_loop.php');

	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode("posts_three_column", "r_posts_three_column");




function r_carousel_posts($atts, $content = null) {
	extract(shortcode_atts(array(
	'title' => 'Title',
	'color' => '#',
	'category' => '',
	'num' => 4,
	'excerpt' => 0,
	'meta' => 1
	), $atts));

	global $wp_query,$post,$loopExcerpt,$loopMeta;
	$loopExcerpt = $excerpt;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();
?>	
<div class="jcarousel_container">
<div class="jcarousel_title" style="background: #<?php echo $color ?>;"><span><h2 style="background: #<?php echo $color ?>;">
<?php $category_ID = get_category_id($category); ?>
<?php echo '<a href="?cat='. $category_ID .'">'; echo $title; ?></a>
</h2></span></div>
<ul class="jcarousel-skin-tango">
		<?php while ( have_posts() ) : $wp_query->the_post(); ?>
		
		<li>
		<div class="post_three_column" style="border-bottom-color: #<?php echo $color ?>;" >

		<?php $show_player = get_post_meta($post->ID, 'r_show_player', true); 
	    if($show_player !== '') { ?>
		
		<?php $audio = get_post_meta($post->ID, 'r_audio', true); ?>

		<?php if($audio) { ?>
		   <?php echo $audio; ?>
		<?php } ?>
		
		<?php } else { ?>
		
		<?php if(has_post_thumbnail()) { ?>
			
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>		
			
		<div class="car_view third-effect">
		
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		<?php $image = aq_resize( $thumbnailSrc, 189, 110, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>
		
		<div class="mask">
		
		<?php $format = get_post_format(); if ( false === $format ) { ?>
		<a href="<?php the_permalink() ?>" class="post_format" title="<?php echo get_option('op_read_post'); ?> <?php the_title(); ?>"></a>
        <?php } ?>
		
		<?php if(has_post_format('image')) { ?>
		<a href="<?php the_permalink() ?>" class="image_format" title="<?php echo get_option('op_view_image_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php if(has_post_format('video')) { ?>
		
		<?php $lightbox_video_post = get_post_meta($post->ID, 'r_lightbox_video_post', true); 
	    if($lightbox_video_post !== '') { ?>

		<?php 
        $youtube = get_post_meta($post->ID, 'r_youtube', true);
        $vimeo = get_post_meta($post->ID, 'r_vimeo', true);
        ?>

		<?php if($youtube) { ?>
		    <a href="http://www.youtube.com/watch?v=<?php echo $youtube; ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>
		
        <?php if($vimeo) { ?>
		    <a href="http://vimeo.com/<?php echo $vimeo; ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>

		<?php } else { ?>	
		<a href="<?php the_permalink() ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php } ?>
		
		<?php if(has_post_format('audio')) { ?>
		<a href="<?php the_permalink() ?>" class="audio_format" title="<?php echo get_option('op_view_audio_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		</div>
		
        </div>
		
        <?php } else { ?> <br> <?php } ?>
		
		<?php } ?>
		
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?> &raquo;</a></h1>
	  
	    <div class="post_three_column_date" style="<?php if($loopMeta == 0){ echo "display:none"; }?>">
		    <span class="post_time"><?php the_time('j F, Y'); ?></span>  //
		    <span class="post_comments"><a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?> <?php echo get_option('op_comments_text'); ?></a></span>
		</div> 

		<div style="<?php if($loopExcerpt == 0){ echo "display:none"; }?>">
		
		<?php if(has_post_format('audio')) { } else { ?>
		
		<?php the_excerpt(); ?>
		
        <?php } ?>
		
		</div>
		
       </div>
	   </li>
	   
	  <?php endwhile; ?>
</ul></div><div class="clear"></div>

<?php
	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode("carousel_posts", "r_carousel_posts");






function r_home_posts_one($atts, $content = null) {
	extract(shortcode_atts(array(
	'title' => 'Title',
	'color' => '#',
	'category' => '',
	'num' => 3,
	'excerpt' => 1,
	'meta' => 1
	), $atts));

	global $wp_query,$post,$loopExcerpt,$loopMeta;
	$loopExcerpt = $excerpt;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();
?>	
<div class="home_posts_container">
<div class="home_posts_title" style="background: #<?php echo $color ?>;"><span><h2 style="background: #<?php echo $color ?>;">
<?php $category_ID = get_category_id($category); ?>
<?php echo '<a href="?cat='. $category_ID .'">'; echo $title; ?></a>
</h2></span></div>

		<?php while ( have_posts() ) : $wp_query->the_post(); ?>

		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>		

		<div class="home_posts_one">

		<?php if(has_post_thumbnail()) { ?>
			
		<div class="car_view third-effect">
		
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		<?php $image = aq_resize( $thumbnailSrc, 120, 80, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>
		
		<div class="mask">
		
		<?php $format = get_post_format(); if ( false === $format ) { ?>
		<a href="<?php the_permalink() ?>" class="post_format" title="<?php echo get_option('op_read_post'); ?> <?php the_title(); ?>"></a>
        <?php } ?>
		
		<?php if(has_post_format('image')) { ?>
		<a href="<?php the_permalink() ?>" class="image_format" title="<?php echo get_option('op_view_image_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php if(has_post_format('video')) { ?>
		
		<?php $lightbox_video_post = get_post_meta($post->ID, 'r_lightbox_video_post', true); 
	    if($lightbox_video_post !== '') { ?>

		<?php 
        $youtube = get_post_meta($post->ID, 'r_youtube', true);
        $vimeo = get_post_meta($post->ID, 'r_vimeo', true);
        ?>

		<?php if($youtube) { ?>
		    <a href="http://www.youtube.com/watch?v=<?php echo $youtube; ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>
		
        <?php if($vimeo) { ?>
		    <a href="http://vimeo.com/<?php echo $vimeo; ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>

		<?php } else { ?>	
		<a href="<?php the_permalink() ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php } ?>
		
		<?php if(has_post_format('audio')) { ?>
		<a href="<?php the_permalink() ?>" class="audio_format" title="<?php echo get_option('op_view_audio_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		</div>
		
        </div>
		
        <?php } else { ?> <br> <?php } ?>
		
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?> &raquo;</a></h1>
	  
	    <div class="post_three_column_date" style="<?php if($loopMeta == 0){ echo "display:none"; }?>">
		    <span class="post_time"><?php the_time('j F, Y'); ?></span>  //
		    <span class="post_comments"><a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?> <?php echo get_option('op_comments_text'); ?></a></span>
		</div> 

		<div style="<?php if($loopExcerpt == 0){ echo "display:none"; }?>">
		<?php the_excerpt(); ?>
		</div>
		
       </div>
	   
	  <?php endwhile; ?>
	  
</div><div class="clear"></div>

<?php
	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode("home_posts_one", "r_home_posts_one");




function r_home_posts_two($atts, $content = null) {
	extract(shortcode_atts(array(
	'title' => 'Title',
	'color' => '#',
	'category' => '',
	'num' => 4,
	'meta' => 1
	), $atts));

	global $wp_query,$post,$loopMeta;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();
?>	
<div class="home_posts_container_two">
<div class="home_posts_title" style="background: #<?php echo $color ?>;"><span><h2 style="background: #<?php echo $color ?>;">
<?php $category_ID = get_category_id($category); ?>
<?php echo '<a href="?cat='. $category_ID .'">'; echo $title; ?></a>
</h2></span></div>

		<?php while ( have_posts() ) : $wp_query->the_post(); ?>
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>		
		<div class="home_posts_two">

		<?php if(has_post_thumbnail()) { ?>
		
		<div class="car_view third-effect">
		
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		<?php $image = aq_resize( $thumbnailSrc, 105, 70, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>
		
		<div class="mask">
		
		<?php $format = get_post_format(); if ( false === $format ) { ?>
		<a href="<?php the_permalink() ?>" class="post_format" title="<?php echo get_option('op_read_post'); ?> <?php the_title(); ?>"></a>
        <?php } ?>
		
		<?php if(has_post_format('image')) { ?>
		<a href="<?php the_permalink() ?>" class="image_format" title="<?php echo get_option('op_view_image_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php if(has_post_format('video')) { ?>
		
		<?php $lightbox_video_post = get_post_meta($post->ID, 'r_lightbox_video_post', true); 
	    if($lightbox_video_post !== '') { ?>

		<?php 
        $youtube = get_post_meta($post->ID, 'r_youtube', true);
        $vimeo = get_post_meta($post->ID, 'r_vimeo', true);
        ?>

		<?php if($youtube) { ?>
		    <a href="http://www.youtube.com/watch?v=<?php echo $youtube; ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>
		
        <?php if($vimeo) { ?>
		    <a href="http://vimeo.com/<?php echo $vimeo; ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>

		<?php } else { ?>	
		<a href="<?php the_permalink() ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php } ?>
		
		<?php if(has_post_format('audio')) { ?>
		<a href="<?php the_permalink() ?>" class="audio_format" title="<?php echo get_option('op_view_audio_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		</div>
		
        </div>
		
        <?php } else { ?> <br> <?php } ?>
		
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?> &raquo;</a></h1>
	  
	    <div class="post_three_column_date" style="<?php if($loopMeta == 0){ echo "display:none"; }?>">
		    <span class="post_time"><?php the_time('j F, Y'); ?></span> 
		</div> 
		
       </div>
	   
	  <?php endwhile; ?>
	  
</div>

<?php
	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode("home_posts_two", "r_home_posts_two");


function r_home_gallery_posts($atts, $content = null) {
	extract(shortcode_atts(array(
	'title' => 'Title',
	'color' => '#',
	'category' => '',
	'num' => 6,
	'meta' => 1
	), $atts));

	global $wp_query,$post,$loopMeta;
	$loopMeta = $meta;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query();
	
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}

	if(!empty($num)){
		$query .= '&posts_per_page='.$num;
	}
	
	$wp_query->query($query);
	ob_start();
?>	
<div class="home_posts_container">
<div class="home_posts_title" style="background: #<?php echo $color ?>;"><span><h2 style="background: #<?php echo $color ?>;">
<?php $category_ID = get_category_id($category); ?>
<?php echo '<a href="?cat='. $category_ID .'">'; echo $title; ?></a>
</h2></span></div>

	<div class="home_gallery_posts">

    <div class="pikachoose">

        <ul id="home_gallery">
		
		<?php while ( have_posts() ) : $wp_query->the_post(); ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>		
		<li>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php $image = aq_resize( $thumbnailSrc, 395, 224, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>
        <span><?php the_title(); ?></span>
        </li>

        <?php endwhile; ?>

	    </ul>
    </div>
		
		
    </div>
	  
</div>

<?php
	$wp_query = null; 
	$wp_query = $temp;
	wp_reset_query();
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode("home_gallery_posts", "r_home_gallery_posts");





function r_home_custom_posts($atts, $content = null) {
	extract(shortcode_atts(array(
	'title' => 'Title',
	'color' => '#'
	), $atts));

return '<div class="home_custom_posts_container">
<div class="home_custom_posts_title" style="background: #'.$color.';"><span><h2 style="background: #'.$color.';">'.$title.'</h2></span></div><div class="home_custom_post_box">'.do_shortcode($content).'</div></div><div class="clear"></div>';	
}

add_shortcode("home_custom_posts", "r_home_custom_posts");
?>
