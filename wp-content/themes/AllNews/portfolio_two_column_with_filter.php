<?php
/*
Template Name: Gallery two column
*/
?>


<?php get_header(); ?>

<div id="container"> 

<div class="inner">	
	
<?php $portfolio_id = get_post_meta($post->ID, 'r_portfolio_id', true); ?>
<?php $portfolio_posts = get_post_meta($post->ID, 'r_portfolio_posts', true); ?>
	
<div id="portfolio_content">	
	
<ul class="filter group"> 
<li class="current all"><a href="#">All</a></li> 
<?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'child_of' => $portfolio_id, 
  );
$categories=get_categories($args);
foreach ($categories as $cat) {
echo ('<li class="'.$cat->cat_name.'"><a href="#">'.$cat->cat_name.'</a></li>');
}
?>
</ul> 

<div class="clear"></div>
  
<?php
    query_posts(array(
    'cat' => $portfolio_id, 
    'posts_per_page' => $portfolio_posts,
	'paged' => $paged
    ));
?>

<ul class="portfolio group"> 
<?php while (have_posts()) : the_post(); $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
	
<li class="item" <?php post_class(); ?> data-id="<?php the_ID(); ?>" data-type="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">
	 
<div class="portfolio_two_column">

    <?php if(has_post_thumbnail()) { ?>
	
    <div class="car_view third-effect">
	<div class="portfolio_two_column_thumbnail">
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnails', false, '' ); $thumbnailSrc = $src[0]; ?>	 
       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
	   <?php $image = aq_resize( $thumbnailSrc, 120, 70, true ); ?>
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
	
	<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>

	<div class="post_meta_line">
		<span class="post_time"><?php the_time('j F, Y'); ?></span>
	</div> 

</div>	 
</li> 

<?php endwhile; ?> 
<?php wp_reset_query(); ?> 
</ul>

</div>

<?php get_sidebar('right'); ?>

</div>
</div>

<div class="clear"></div>
	
<?php get_footer(); ?>
