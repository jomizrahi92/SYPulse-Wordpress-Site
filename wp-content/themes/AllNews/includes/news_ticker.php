<ul id="js-news" class="js-hidden">

<?php 
$featucat = get_option('op_news_ticker_cat');
$number_news = get_option('op_news_ticker_number');
$my_query = new WP_Query('posts_per_page='. $number_news .''); 
?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<li class="news-item">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</li>
<?php endwhile; wp_reset_query(); ?>

</ul>