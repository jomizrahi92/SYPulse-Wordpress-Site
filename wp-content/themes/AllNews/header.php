<?php
global $options;
foreach ($options as $value) {
	if ( !isset( $value['id'] ) )
		continue;
	if (get_option( $value['id'] ) === FALSE) {
		$$value['id'] = $value['std'];
	} else {
		$$value['id'] = get_option( $value['id'] );
}}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<title><?php custom_titles(); ?></title>
<?php custom_description(); ?>
<?php custom_keywords(); ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="http://fonts.googleapis.com/css?family=<?php echo $op_header_font ?>" rel="stylesheet" type="text/css" media="all"/>
<link href="http://fonts.googleapis.com/css?family=<?php echo $op_text_font ?>" rel="stylesheet" type="text/css" media="all"/>

<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" media="all" />
<![endif]-->
 <!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" media="all" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
<![endif]-->
 <!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie9style.css" media="all" />
<![endif]-->


<?php wp_head(); ?>
</head>

<script type="text/javascript">

(function($){ 
   $(window).load(function(){ 
  
$('#js-news').ticker({
speed: 0.10,
pauseOnItems: <?php echo get_option('op_ticker_pause') ?>,   
fadeInSpeed: 500,      
fadeOutSpeed: 300,
titleText: '<?php echo get_option('op_ticker_title') ?>',   
displayType: '<?php echo get_option('op_ticker_effect') ?>',
controls: false,	
});

$('#iview').iView({
fx: 'fade', 
pauseTime: <?php echo get_option('op_banner_pause') ?>,
directionNav: false,
pauseOnHover: true,
timer: "<?php echo get_option('op_banner_timer') ?>",
timerDiameter: 17,
timerPadding: 3,
timerStroke: 3,
timerBarStroke: 0,
timerX: 6, 
timerY: 6,
timerColor: "#0F0",
timerPosition: "top-right"
});	

$("#contact input[type='submit'], #sidebar-right #submittedWidget, .filter a, .pagination a, #submit, .comment-reply-link, #submittedContact, .tagcloud a, #sidebar-footer #submittedWidget").hover(function() {
   $(this).animate({ backgroundColor: "#<?php echo get_option('op_hover_effect') ?>" }, 200);
},function() {
   $(this).animate({ backgroundColor: "#fff" }, 200);
});

Galleria.loadTheme('<?php echo get_template_directory_uri() ?>/js/galleria.classic.js');
Galleria.run('#galleria');

var player = document.getElementById('player_1');
  $f(player).addEvent('ready', ready);
 
  function addEvent(element, eventName, callback) {
    if (element.addEventListener) {
      element.addEventListener(eventName, callback, false)
    } else {
      element.attachEvent(eventName, callback, false);
    }
};
 
function ready(player_id) {
    var froogaloop = $f(player_id);
    froogaloop.addEvent('play', function(data) {
      $('.flexslider').flexslider("pause");
    });
    froogaloop.addEvent('pause', function(data) {
      $('.flexslider').flexslider("play");
    });
};

$(".flexslider")
.fitVids()
.flexslider({
video: true, 
slideshow: true,
slideshowSpeed: 4000,         
animationDuration: 700,  
directionNav: false,
controlNav: true, 
before: function(slider){
    $f(player).api('pause');
}
});

})
})(jQuery);
</script>

<body <?php body_class(); ?>>

<div id="all_content">

<?php if (get_option('op_fixed') == 'on') { ?>
<div id="all_content_fixed">
<?php } ?>

<div id="header">

	<div id="title_box">
	<?php if (get_option('op_logo_on') == 'on') { ?>
	
	    <a href="<?php echo home_url() ?>">
		    <?php $logo = (get_option('op_logo') <> '') ? get_option('op_logo') : get_template_directory_uri() . '/images/logo.png'; ?>
		    <img src="<?php echo $logo; ?>" alt="Logo" id="logo"/>
	    </a>
	  
	 <?php } else { ?>
	 
		<a class="site_title" href="<?php echo home_url() ?>/" title="<?php bloginfo('name'); ?>" rel="Home"><h1><?php bloginfo('name'); ?></h1></a>
		
	<?php } ?>	
    </div>

    <?php if (get_option('op_banner_header') == 'on') { ?>
	
	    
	    <?php if (get_option('op_banner_rotator') == 'on') { 
		if (get_option('op_banner_size') == '468x60px') { 
		include (TEMPLATEPATH . "/includes/banner_rotator.php"); 
		} else { 
		include (TEMPLATEPATH . "/includes/banner_rotator_728.php"); 
		}
		
		} else { ?>	
		
		<?php if (get_option('op_banner_size') == '468x60px') { ?>
		<div id="banner-header">
		<?php } else { ?>
		<div id="banner_header_728">
		<?php } ?>	
		
		<?php $header_banner = get_option("op_banner_header_code"); ?>
		<?php echo stripslashes($header_banner); ?>
		</div>
		
		<?php } ?>	
		
	<?php } ?>		
	
<div class="clear"></div>

 <?php if ( function_exists( 'wp_nav_menu' ) ){
		wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'mainMenu', 'container_class' => 'ddsmoothmenu', 'fallback_cb'=>'primarymenu') );
		} else { primarymenu();
} ?>	

<div id="menu_bottom_panel">

<?php if (get_option('op_news_ticker') == 'on') include (TEMPLATEPATH . "/includes/news_ticker.php"); ?>

<?php if (get_option('op_regform') == 'on') include (TEMPLATEPATH . "/includes/reg_form.php"); ?>
<?php get_search_form(); ?>
 
</div>
<div id="menu_bottom_line"></div>
	
</div>

<div class="clear"></div>

<?php ditty_news_ticker(475, 'mtphr-dnt-preview-container latest-news'); ?>
