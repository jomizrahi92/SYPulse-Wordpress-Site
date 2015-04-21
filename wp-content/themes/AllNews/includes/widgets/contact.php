<?php

/* Royal Contact Widget */
 
function Royal_contact_form_widget($args) {
	$email_address = get_option("widget_contactform");
	$email_adress_reciever = $email_address['email'] != "" ? $email_address['email'] : get_option('admin_email');
	$loader_style = $args['name'] == "Sidebar" ? 'loadingImgWidgetSb' : 'loadingImgWidgetFt';
	
	echo $args['before_widget'];
	echo $args['before_title'] .'Email Us'. $args['after_title'];
	
//If the form is submitted
if(isset($_POST['submittedWidget'])) {
	require(TEMPLATEPATH . "/submit-widget.php");
}
?>
<?php if(isset($emailSent) && $emailSent == true) { ?>
	<a name="_contact"></a> 
		<p><?php echo (get_option('op_successfully_sent')) ?></p>

<?php } else { ?>
	
		<a name="_contact"></a> 
		<form action="<?php the_permalink(); ?>#_contact" id="contactFormWidget" method="post">
			<input type="text" name="contactNameWidget" id="contactNameWidget" value="<?php echo get_option('op_your_name'); ?>" onfocus="if(this.value == '<?php echo get_option('op_your_name'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo get_option('op_your_name'); ?>';}" />

			<input type="text" name="emailWidget" id="emailWidget" value="<?php echo get_option('op_your_email'); ?>" onfocus="if(this.value == '<?php echo get_option('op_your_email'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo get_option('op_your_email'); ?>';}" />

			<textarea name="commentsWidget" id="commentsTextWidget" rows="" cols=""><?php if(isset($_POST['commentsWidget'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['commentsWidget']); } else { echo $_POST['commentsWidget']; } } ?></textarea>
            <div class="clear"></div>
			<button name="submittedWidget" id="submittedWidget" type="submit" tabindex="8" value="Submit" ><span><?php echo get_option('op_contact_submit'); ?></span></button>
			<p class="screenReader"><input id="submitUrlWidget" type="hidden" name="submitUrlWidget" value="<?php echo get_template_directory_uri() . '/submit.php'; ?>" /></p>
			<p class="screenReader"><input id="emailAddressWidget" type="hidden" name="emailAddressWidget" value="<?php echo royal_nospam($email_adress_reciever); ?>" /></p>

		</form>
<?php
	}
	echo $args['after_widget'];
}

function Royal_contact_form_widget_admin() {
	$settings = get_option("widget_contactform");

	// check if anything's been sent
	if (isset($_POST['update_email'])) {
		$settings['email'] = strip_tags(stripslashes($_POST['contact_email']));

		update_option("widget_contactform",$settings);
	}

	echo '<p>
			<label for="contact_email">Email Address:
			<input id="contact_email" name="contact_email" type="text" class="widefat" value="'.$settings['email'].'" /></label></p>';
	echo '<input type="hidden" id="update_email" name="update_email" value="1" />';

}
wp_register_sidebar_widget( 'contact-form-widget', $themename.' - Contact Form', 'Royal_contact_form_widget', array('description' => 'Email contact form for sidebar'));
wp_register_widget_control('contact-form-widget', 'Royal_contact_form_widget_admin', 400, 200);



?>