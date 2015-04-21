

<?php get_header(); ?>
		
<div id="container"> 

<div class="inner">	

<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>

   <div id="content"> 
   
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
     
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
	
    <?php } else { } ?>
	 
	<div class="post_content_box">
	<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
	
	<?php if (get_option('op_blog_meta_line') == 'on') { ?>	
	<div class="post_meta_line">
		<span class="post_time"><?php the_time('j F, Y'); ?></span> //
		<span class="post_category"><?php the_category(', '); ?></span> // 
		<span class="post_comments"><a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?> <?php echo get_option('op_comments_text'); ?></a></span>
	</div> 
	<?php } ?>
	
	<?php the_excerpt(''); ?>
	<div class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php echo get_option('op_read_more'); ?> &raquo;</a></div>
    </div>
	
	<div class="clear"></div>
	</div>
			
		<?php endwhile; ?>
		<?php else : ?>
		
		<div class="post_nr">
        <h2><?php echo get_option('op_nothing_found'); ?></h2>
        <div class="single-entry">
		<?php echo get_option('op_nothing_found_text'); ?>
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

	
	