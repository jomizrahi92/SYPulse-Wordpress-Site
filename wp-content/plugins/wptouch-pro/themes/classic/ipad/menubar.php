<!-- All the iPad menubar code goes here -->
<div id="wptouch-header" class="light-gradient">
	<div class="head-left">
	<?php if ( classic_ipad_show_home_button() ) { ?>
		<div role="button" class="wptouch-button" id="home" title="<?php _e( "home", "wptouch-pro" ); ?>"><a href="<?php wptouch_bloginfo( 'url' ); ?>"><span class="home-icon">&nbsp;</span></a></div>
	<?php } if ( classic_ipad_show_blog_button() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="blog" title="<?php _e( "blog", "wptouch-pro" ); ?>"><?php _e( "blog", "wptouch-pro" ); ?></div>
	<?php } if ( wptouch_has_menu() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="menu" title="<?php _e( "menu", "wptouch-pro" ); ?>"><?php _e( "menu", "wptouch-pro" ); ?></div>
	<?php } ?>
	</div>	

	<div class="head-center">
		<h1><?php wptouch_bloginfo( 'site_title' ); ?></h1>
	</div>
	
	<div class="head-right">
	<?php if ( classic_ipad_show_wordtwit_button() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="wordtwit" title="<?php _e( "twitter", "wptouch-pro" ); ?>"><p class="wordtwit-icon"></p></div>
	<?php } if ( classic_ipad_show_flickr_button() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="flickr" title="<?php _e( "flickr photos", "wptouch-pro" ); ?>"><p class="flickr-icon"></p></div>
	<?php } if ( wptouch_prowl_direct_message_enabled() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="message" title="<?php _e( "direct message", "wptouch-pro" ); ?>"><p class="message-icon"></p></div>
	<?php } if ( classic_ipad_show_account_button() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="account" title="<?php _e( "account", "wptouch-pro" ); ?>"><p class="account-icon"></p></div>
	<?php } if ( classic_ipad_show_search_button() ) { ?>
		<div role="button" class="menubar-button wptouch-button" id="search" title="<?php _e( "search", "wptouch-pro" ); ?>"><p class="search-icon"></p></div>
	<?php } ?>
	</div>
</div>