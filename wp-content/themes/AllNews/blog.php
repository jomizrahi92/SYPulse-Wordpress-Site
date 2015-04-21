<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="container"> 

<div class="inner">	

<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>

   <div id="content"> 
    
<?php
$featucat = get_option('op_blog_cat');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ( get_query_var('paged') ) {
$paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
$paged = get_query_var('page');
} else {
$paged = 1;
}
query_posts( array( 'post_type' => 'post', 'paged' => $paged, 'category_name' => $featucat ) );
?>
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>

	<div class="post">
	
	 <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>	
	
	<?php if(has_post_thumbnail()) { ?>
	
	<div class="car_view third-effect">
	
	<div class="post_thumbnail">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		<?php $image = aq_resize( $thumbnailSrc, 240, 140, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>
	</div>
	
    <div class="mask">
		<?php $format = get_post_format(); if ( false === $format ) { ?>
		<a href="<?php the_permalink() ?>" class="post_format" title="Read <?php the_title(); ?>"></a>
        <?php } ?>
		
		<?php if(has_post_format('image')) { ?>
		<a href="<?php the_permalink() ?>" class="image_format" title="View <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php if(has_post_format('video')) { ?>
		
		<?php $lightbox_video_post = get_post_meta($post->ID, 'r_lightbox_video_post', true); 
	    if($lightbox_video_post !== '') { ?>

		<?php 
        $youtube = get_post_meta($post->ID, 'r_youtube', true);
        $vimeo = get_post_meta($post->ID, 'r_vimeo', true);
        ?>

		<?php if($youtube) { ?>
		    <a href="http://www.youtube.com/watch?v=<?php echo $youtube; ?>" class="video_format" title="View <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>
		
        <?php if($vimeo) { ?>
		    <a href="http://vimeo.com/<?php echo $vimeo; ?>" class="video_format" title="View <?php the_title(); ?>" rel="prettyPhoto"></a>
		<?php } ?>

		<?php } else { ?>	
		<a href="<?php the_permalink() ?>" class="video_format" title="View <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php } ?>
		
		<?php if(has_post_format('audio')) { ?>
		<a href="<?php the_permalink() ?>" class="audio_format" title="View <?php the_title(); ?>"></a>
		<?php } ?>
		
	</div>
		
    </div>
	
    <?php } else { } ?>
	 
	<div class="post_content_box">
	<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
	
	<?php if (get_option('op_blog_meta_line') == 'on') { ?>	
	<div class="post_meta_line">
		<span class="post_time"><?php the_time('j F, Y'); ?></span> //
		<span class="post_category"><?php the_category(', '); ?></span> // 
		<span class="post_comments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span>
	</div> 
	<?php } ?>
	
	<?php the_excerpt(''); ?>
	<div class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >Read more &raquo;</a></div>
    </div>
	
	<div class="clear"></div>
	</div>
			
		<?php endwhile; ?>
		<?php else : ?>
		
		<div class="post_nr">
        <h2>Nothing Found!</h2>
        <div class="single-entry">
       Sorry, but nothing matched your search criteria. Please try again with some different keywords.
        <br/>
		<?php get_search_form(); ?>
        </div>
        <div class="clear"></div>
        </div>

	    <?php endif; ?>	 
		 <div class="clear"></div>
		 
        <?php if(function_exists('wp_pagenavi')) { ?>
		<div class="postnav"> 
		<?php wp_pagenavi(); ?>
        </div>
		
        <?php } else { ?>
        <?php custom_pagination(); ?>
        <?php } ?>
 
	<div class="clear"></div>
   
   </div>

<?php get_sidebar('right'); ?>
   
</div>

</div>

<div class="clear"></div>
	
<?php get_footer(); ?>