
<div class="shortcode_posts_box">
		<?php while ( have_posts() ) : $wp_query->the_post(); ?>
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>
		<div class="post_one_column">
         
		<?php if(has_post_thumbnail()) { ?> 
		
		<div class="car_view third-effect">
		
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		<?php $image = aq_resize( $thumbnailSrc, 240, 140, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
        </a>

		<div class="mask">
		<?php $format = get_post_format(); if ( false === $format ) { ?>
		<a href="<?php the_permalink() ?>" class="post_format" title="<?php echo get_option('op_read_post'); ?> <?php the_title(); ?>"></a>
        <?php } ?>
		
		<?php if(has_post_format('image')) { ?>
		<a href="<?php the_permalink() ?>" class="image_format" title="<?php echo get_option('op_view_image_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
	
		<?php if(has_post_format('video')) { ?>
		<a href="<?php the_permalink() ?>" class="video_format" title="<?php echo get_option('op_view_video_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
		
		<?php if(has_post_format('audio')) { ?>
		<a href="<?php the_permalink() ?>" class="audio_format" title="<?php echo get_option('op_view_audio_post'); ?> <?php the_title(); ?>"></a>
		<?php } ?>
	    </div>
		
        </div>
		
        <?php } else { ?> <br> <?php } ?>
		
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
	  
	    <div class="post_one_column_date" style="<?php if($loopMeta == 0){ echo "display:none"; }?>">
		  <span class="post_time"><?php the_time('j F, Y'); ?></span> //
		  <span class="post_category"><?php the_category(', '); ?></span> // 
		  <span class="post_comments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span>
		</div> 
	  
	    <div style="<?php if($loopExcerpt == 0){ echo "display:none"; }?>">
		<?php the_excerpt(); ?>
		</div>

       </div>
		<?php endwhile; ?>
</div>
<div class="clear"></div>







