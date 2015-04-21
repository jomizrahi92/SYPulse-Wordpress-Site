
<?php
/*
Template Name: Home page with Flex slider
*/
?>

<?php get_header(); ?>


<div id="top_content_flex"> 
<div class="inner">	

<?php if (get_option('op_featured_area') == 'on') {
include (TEMPLATEPATH . "/includes/flex-slider.php"); 

if (get_option('op_subscribe_widget') == 'on') { 
include (TEMPLATEPATH . "/includes/subscribe_widget.php"); 
} else { get_sidebar('top'); } 
} ?>

</div>
</div>
<div class="clear"></div>

<div id="main_content"> 
<div class="inner">	
  	
<div id="home_content">		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php the_content(''); ?>

<?php endwhile; ?>
<?php endif; ?> 
</div>
	
<?php get_sidebar('right'); ?>	
	
</div>
</div>


<div class="clear"></div>
	
<?php get_footer(); ?>



	