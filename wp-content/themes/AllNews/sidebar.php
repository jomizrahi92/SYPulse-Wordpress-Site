<div id="sidebar-right">
<?php if ( is_page_template('home.php') || is_page_template('home_flexslider.php')) {
} else {
if (get_option('op_subscribe_widget') == 'on') include (TEMPLATEPATH . "/includes/subscribe_widget.php"); 
} ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-sidebar') ) : ?>
<?php endif; ?> 	

</div>