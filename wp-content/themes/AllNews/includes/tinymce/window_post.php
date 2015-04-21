<?php
// look up for the path
require_once('rconfig.php');
// check for rights
if ( !current_user_can('edit_pages') && !current_user_can('edit_posts') ) 
	wp_die(__("You are not allowed to be here"));
    global $wpdb;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shortcodes</title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo  get_template_directory_uri() ?>/includes/tinymce/tinymce.js"></script>
	<base target="_self" />
<style type="text/css">
<!-- 
select#rshortcode_tag optgroup { font:bold 11px Tahoma, Verdana, Arial, Sans-serif;}
select#rshortcode_tag optgroup option { font:normal 11px/18px Tahoma, Verdana, Arial, Sans-serif; padding-top:1px; padding-bottom:1px;}
-->
</style>
</head>
<body id="link" onLoad="tinyMCEPopup.executeOnLoad('init();');document.body.style.display='';
document.getElementById('rshortcode_tag').focus();" style="display: none">
<!-- <form onsubmit="insertLink();return false;" action="#"> -->
	<form name="r_tabs" action="#">
	<div class="tabs">
		<ul>
	<li id="r_tab" class="current"><span><a href="javascript:mcTabs.displayTab('r_tab','rshortcode_panel');" onMouseDown="return false;">Shortcodes</a></span></li>
	<li id="r_contact_panel"><span><a href="javascript:mcTabs.displayTab('r_contact_panel','contact_panel');" onMouseDown="return false;">Contact Form</a></span></li>	
		</ul>
	</div>
	
	<div class="panel_wrapper">
		<!-- gallery panel -->
		<div id="rshortcode_panel" class="panel current">
		<br />
		<table border="0" cellpadding="4" cellspacing="0">
         <tr>
            <td nowrap="nowrap"><label for="rshortcode_tag"><?php _e("Select Shortcodes", 'shortcodes'); ?></label></td>
            <td><select id="rshortcode_tag" name="rshortcode_tag" style="width: 200px">
                <option value="0">No Style:</option>
				<?php
					if(is_array($shortcode_tags)) 
					{
						$i=1;

						foreach ($shortcode_tags as $r_shortcodekey => $short_code_value) 
						{
							if( stristr($short_code_value, 'r_') ) 
							{
								$r_shortcode_name = str_replace('r_', '' ,$short_code_value);
								$r_shortcode_names = str_replace('_', ' ' ,$r_shortcode_name);
								$r_shortcodenames = ucwords($r_shortcode_names);

								echo '<option value="' . $r_shortcodekey . '" >' . $r_shortcodenames . '</option>' . "\n";
								echo '</optgroup>'; 

								$i++;
							}
						}
					}
			?>
            </select></td>
          </tr>
         
        </table>
		</div>
		<div id="contact_panel" class="panel">
		<br />
		<fieldset>
			<legend>Enter your email address</legend>
		<table border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td nowrap="nowrap"><label for="contact_email">Email Address:</label></td>
            <td><input type="text" id="contact_email" name="contact_email" size="30" /><br /></td>
          </tr>
        </table>
		</fieldset>
		</div>
	</div>
		
	
	</div>

	<div class="mceActionPanel">
		<div style="float: left">
			<input type="button" id="cancel" name="cancel" value="Cancel" onClick="tinyMCEPopup.close();" />
		</div>

		<div style="float: right">
			<input type="submit" id="insert" name="insert" value="Insert" onClick="rshortcodesubmit();" />
		</div>
	</div>
</form>
</body>
</html>
