<div id="header_reg_box">

	<?php if ( is_user_logged_in() ) {} else {  ?>
	<div id="signin_box" class="topnav"><a href="signin" class="signin"><span><?php echo get_option('op_sign_in') ?>  </span></a> </div>
    <?php } ?>
	<fieldset id="signin_menu">
	<div class="clear"></div>	
    <form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
		<div class="username">
			<label for="user_login"><?php echo get_option('op_username') ?>: </label>
			<input type="text" name="user_login" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="101" />
		</div>
		<div class="password">
			<label for="user_email"><?php echo get_option('op_your_email') ?>: </label>
			<input type="text" name="user_email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" size="25" id="user_email" tabindex="102" />
		</div>
		<div class="login_fields">
			<?php do_action('register_form'); ?>
			<input type="submit" name="user-submit" value="<?php echo get_option('op_sign_in_button') ?>" class="user-submit" tabindex="103" />
			<?php $register = $_GET['register']; if($register == true) { echo '<p>Check your email for the password!</p>'; } ?>
			<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
			<input type="hidden" name="user-cookie" value="1" />
		</div>
	</form>
    </fieldset>
	
	
	<div id="login_box" class="topnav"><a href="login" class="login"><span>
	<?php if ( is_user_logged_in() ) { echo get_option('op_hello'); ?>
			<a href="<?php echo home_url() ?>/wp-admin/profile.php" title="<?php echo get_option('op_log_in'); ?>">&nbsp;
			<?php
            global $current_user;
            get_currentuserinfo();
            echo  $current_user->user_login; 
			echo " ! &nbsp;"; 
			?>
			</a>	
			<a href="<?php echo wp_logout_url( home_url() ); ?>" title="<?php echo get_option('op_logout'); ?>"> <?php echo get_option('op_logout'); ?> &raquo;</a>
			<?php } else { echo get_option('op_log_in'); } ?>
	</span></a> </div>
    <fieldset id="login_menu">
     <div class="clear"></div>	
        <form name="loginform" id="loginform" action="<?php echo home_url() ?>/wp-login.php" method="post">
	        <p>
		       <label><?php echo get_option('op_username') ?></label><br />
		       <input type="text" name="log" id="user_log" class="input" value="" size="20" tabindex="10" />
			   
	        </p>
	        <p>
		       <label><?php echo get_option('op_password') ?></label><br />
		       <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" />
            </p>
	        <p class="forgetmenot">
			    <label>
			    <input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> <?php echo get_option('op_remember_me') ?>
			    </label>
			</p>

	        <p class="submit">
		        <input type="submit" name="wp-submit" id="wp-submit" value="<?php echo get_option('op_log_in_button') ?>" tabindex="100" />
		        <input type="hidden" name="redirect_to" value="<?php echo home_url() ?>#respond" />
		        <input type="hidden" name="testcookie" value="1" />
	        </p>
            </form>
 
            <div id="lost_pas">
                <a href="<?php echo home_url() ?>/wp-login.php?action=lostpassword" title="<?php echo get_option('op_lost_password') ?>"><?php echo get_option('op_lost_password') ?></a>
            </div>

    </fieldset>	
	
	</div>