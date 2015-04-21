
<?php get_header(); ?>

<div id="container"> 

<div class="inner">	

<?php if (function_exists('wp_breadcrumbs')) wp_breadcrumbs(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="single_post">
    <div class="single_title">	  
	   <h1><?php the_title(); ?></h1><span></span>	  
    </div>

    <?php if (get_option('op_single_thumbnail') == 'on') { ?>
	
	   <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>	

	   <?php if(has_post_thumbnail()) { ?>

	    <?php $post_thumbnail = get_post_meta($post->ID, "r_post_thumbnail", $single = true);
	    if($post_thumbnail !== '') { ?>
	 
	    <div class="single_thumbnail" style="display: none;">
	 
	    <?php } else { ?>
	  
	    <?php $post_thumbnail_full = get_post_meta($post->ID, "r_post_thumbnail_full", $single = true);
	    if($post_thumbnail_full !== '') { ?>
	 
	    <div class="single_thumbnail_full">
	 
	    <?php } else { ?>
		
	    <div class="single_thumbnail">
		
	    <?php } ?>
		
	    <?php } ?>

		<?php $post_thumbnail_full = get_post_meta($post->ID, "r_post_thumbnail_full", $single = true);
	    if($post_thumbnail_full !== '') { ?>
		
		<?php $image = aq_resize( $thumbnailSrc, 642, 212, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
		
		<?php } else { ?>
		
		<?php $image = aq_resize( $thumbnailSrc, 240, 140, true ); ?>
        <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
  
        <?php } ?>

	    </div>
	   
	   <?php } ?>	
	   
	   <?php } else { } ?>
   
    <?php $post_video = get_post_meta($post->ID, "r_post_video", $single = true);
	   if($post_video !== '') { ?>
	 
	<div class="video-wrapper">
	<div class="video-container">
	
	<?php 
        $youtube = get_post_meta($post->ID, 'r_youtube', true);
        $vimeo = get_post_meta($post->ID, 'r_vimeo', true);
    ?>

		<?php if($youtube) { ?>
		    <object><embed wmode="transparent"  src="http://www.youtube.com/v/<?php echo $youtube; ?>?version=3" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		<?php } ?>
		
        <?php if($vimeo) { ?>
		    <iframe src="http://player.vimeo.com/video/<?php echo $vimeo; ?>?title=0&byline=0&portrait=0" frameborder="0"></iframe>
		<?php } ?>

	</div>
    </div> 
	<div class="clear"></div>
    
	<?php } else { } ?>
   
    <div class="single_text">
	    <?php the_content(''); ?>
			
		<?php if (get_option('op_tags') == 'on') {?>
	    <p class="tags"> <?php the_tags('', ' ', '<br />'); ?> </p>
	    <?php } ?>
    </div>
	
	<div class="clear"></div>
   
    <?php if (get_option('op_similar') == 'on') { ?>
	<div id="similar-post"> 

	    <?php
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

        $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'showposts'=>4,
        'caller_get_posts'=>1
        );
        $my_query = new wp_query($args);
        if( $my_query->have_posts() ) {
        echo '<div class="sim_post_header"><h3> '. $op_more_news .' </h3></div><ul>';
        while ($my_query->have_posts()) {
        $my_query->the_post();
        ?>
		
		<li class="similar_posts">
		
		    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>	 
            <?php if(has_post_thumbnail()) { ?>	
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
			<?php $image = aq_resize( $thumbnailSrc, 100, 70, true ); ?>
            <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>		
            </a>
            <?php } else { } ?>	
		
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?> &raquo;</a></h1>
            <div class="post_meta_line">
		        <span class="post_time"><?php the_time('j F, Y'); ?></span> //
		        <span class="post_category"><?php the_category(', '); ?></span>
	        </div>        
	   </li>
		
        <?php } echo '</ul>'; } } ?>
        <?php wp_reset_query();?>
		
		
    </div>	 
	<?php } ?>	 
	
	<div class="clear"></div>

	<?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
	
	<?php if (get_option('op_single_comments') == 'on') comments_template('', true); ?>
	
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
	
	<?php endif; ?>	 

</div>

<?php get_sidebar('right'); ?> 

</div>   
		
</div>
 
<div class="clear"></div>

<?php get_footer(); ?>
	