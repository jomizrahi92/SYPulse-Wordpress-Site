

<div id="feat_area_flex">

<div class="flexslider">
    <?php 
    $featucat = get_option('op_feat_cat');
	$slides = get_option('op_feat_slides');
    $my_query = new WP_Query('showposts='. $slides .'&category_name='. $featucat .'');	 
    if ($my_query->have_posts()) :
    ?>	

    <ul class="slides">

	<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>
	
	<li>
	
	<?php $slider_video_post = get_post_meta($post->ID, 'r_slider_video_post', true); 
	   if($slider_video_post !== '') { ?>
	   
	    <?php 
	    $youtube = get_post_meta($post->ID, 'r_youtube', true);
        $vimeo = get_post_meta($post->ID, 'r_vimeo', true); 
	    ?>
		
		<div class="video-wrapper">
	    <div class="video-container">
		
		<?php if($youtube) { ?>
		<object style="height: 312px; width: 640px"><embed src="http://www.youtube.com/v/<?php echo $youtube; ?>&amp;hl=en_US&amp;fs=1&amp;" type="application/x-shockwave-flash"  width="640px" height="312px"></embed></object>
		<?php } ?>
        <?php if($vimeo) { ?>
		<iframe id="player_1" src='http://player.vimeo.com/video/<?php echo $vimeo; ?>?api=1&player_id=player_1&amp;title=0&amp;byline=0&amp;portrait=0' width='640' height='312' frameborder='0'></iframe>
		<?php } ?>
		
		</div>
        </div> 
	   
	<?php } else { ?>	
	
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
		<?php $image = aq_resize( $thumbnailSrc, 640, 312, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
		<p class="flex-caption"><?php the_title(); ?> &raquo;<div class="clear"></div></p>
	</a>
	<?php } ?>
		
	</li>
      
    <?php endwhile; wp_reset_query(); ?> 
    <?php endif; ?>                  
    
	</ul>
		
</div>
</div>
