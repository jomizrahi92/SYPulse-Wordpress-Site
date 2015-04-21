<div class="clear"></div>

<?php if (get_option('op_footer_sidebar') == 'on') { ?>

<div id="footer_box_line"></div>
<div id="footer_box"> 

	<div class="inner">	
    <?php get_sidebar('footer'); ?>
    </div>
   
</div>

<?php } else { ?>
<br />
<?php } ?>

<div id="footer_bottom_line"></div>
<div id="footer_bottom"> 

   <div class="inner">	
   
   <div id="credit">     
	  <span class="left">&copy; <?php $footer_copy = get_option("op_footer_copy"); ?>
	  <?php echo stripslashes($footer_copy); ?> <?php date('Y'); ?> - 
	  <a href="<?php echo home_url() ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?> </a>
	  <a href="http://themeforest.net/user/RoyalwpThemes/portfolio?ref=RoyalwpThemes" target="blank"> by RoyalwpThemes</a>
	  </span>

	  
    <span class="right">
	<?php if (get_option('op_social') == 'on') { ?>

    <div id="soc_book">
    <?php if (get_option('op_twitter') == 'on') { ?>
    <a href="<?php echo get_option('op_twitter_id') ?>"><img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" alt="Twitter subscribe" title="Twitter subscribe" class="tip" /></a>
    <?php } ?>

    <?php if (get_option('op_facebook') == 'on') { ?>
    <a href="<?php echo get_option('op_facebook_id') ?>"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt="Facebook subscribe" title="Facebook subscribe" class="tip" /></a>
    <?php } ?>

    <?php if (get_option('op_linkedin') == 'on') { ?>
    <a href="<?php echo get_option('op_linkedin_id') ?>"><img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="Linkedin subscribe" title="Linkedin subscribe" class="tip" /></a>
    <?php } ?>

	<?php if (get_option('op_vimeo') == 'on') { ?>
    <a href="<?php echo get_option('op_vimeo_id') ?>"><img src="<?php echo get_template_directory_uri() ?>/images/vimeo.png" alt="Vimeo subscribe" title="Vimeo subscribe" class="tip" /></a>
    <?php } ?>
	
	<?php if (get_option('op_flickr') == 'on') { ?>
    <a href="<?php echo get_option('op_flickr_id') ?>"><img src="<?php echo get_template_directory_uri() ?>/images/flickr.png" alt="Flickr subscribe" title="Flickr subscribe" class="tip" /></a>
    <?php } ?>
	
    <?php if (get_option('op_rss') == 'on') { ?>
    <a href="<?php echo home_url() ?>/?feed=rss2"><img src="<?php echo get_template_directory_uri() ?>/images/rss.png" alt="Rss subscribe" title="Rss subscribe" class="tip" /></a>
    <?php } ?>

    </div>  

    <?php } ?>
	  
	</span> 
	  
   </div>	
   
   </div>
	
</div>
</div>

<?php if (get_option('op_fixed') == 'on') { ?>
</div>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>



		
			
