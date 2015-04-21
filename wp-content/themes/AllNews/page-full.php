<?php
/*
Template Name: Page full width
*/
?>


<?php get_header(); ?>

<div id="container"> 

<div class="inner">	

<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div class="single_post_full">

    <div class="single_title">	  
	   <h1><?php the_title(); ?></h1><span></span>	  
    </div>
	
    <?php if (get_option('op_single_page_thumbnail') == 'on') { ?>
	   <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>	

	   <?php if(has_post_thumbnail()) { ?>
	   
        <div class="single_thumbnail">
        <?php $image = aq_resize( $thumbnailSrc, 240, 140, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
	    </div>
	   
	   <?php } else { } ?>
	<?php } ?>	

    <div class="single_text">
	    <?php the_content(''); ?>
    </div>
	
    <div class="clear"></div>

	<?php if (get_option('op_single_page_comments') == 'on') comments_template('', true); ?>

	<?php endwhile; ?>
	<?php else : ?>
		
	<div class="post_nr" >
        <h2>Nothing Found!</h2>
        <div class="single-entry">
        Sorry, but nothing matched your search criteria. Please try again with some different keywords.
        <br/>
		<?php get_search_form(); ?>
        </div>
        <div class="clear"></div>
    </div>

</div>
	
	<?php endif; ?>
 	 

</div>	

</div>
 
<div class="clear"></div>

<?php get_footer(); ?>
	