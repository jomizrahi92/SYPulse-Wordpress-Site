

<div id="feat_area">

<div id="ei-slider" class="ei-slider">
	<?php 
    $featucat = get_option('op_feat_cat');
	$slides = get_option('op_feat_slides');
    $my_query = new WP_Query('showposts='. $slides .'&category_name='. $featucat .'');	 
    if ($my_query->have_posts()) :
    ?>	
	
    <ul class="ei-slider-large">
	
	<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>
				
        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
		<?php $image = aq_resize( $thumbnailSrc, 640, 300, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                <div class="ei-title">
                    <h2><?php the_title(); ?> &raquo;</h2>
                </div>
			</a>	
        </li>
      
    <?php endwhile; wp_reset_query(); ?> 
    <?php endif; ?>                  
    
	</ul>
	
	<?php 
    $featucat = get_option('op_feat_cat');
	$slides = get_option('op_feat_slides');
    $my_query = new WP_Query('showposts='. $slides .'&category_name='. $featucat .'');	 
    if ($my_query->have_posts()) :
    ?>					
    <ul class="ei-slider-thumbs">
	<li class="ei-slider-element">Current</li>
	<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>
	                 
    <li><a href="#">Slide</a>
	<?php $image = aq_resize( $thumbnailSrc, 162, 99, true ); ?>
    <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
    </li>
    
	<?php endwhile; wp_reset_query(); ?> 
    <?php endif; ?>   
	
    </ul>
	
</div>
</div>
