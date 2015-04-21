
<script type="text/javascript">

(function($){ 
$(window).load(function(){ 

$('#iview').iView({
fx: 'fade', 
pauseTime: <?php echo get_option('op_banner_pause') ?>,
directionNav: false,
pauseOnHover: true,
timer: "<?php echo get_option('op_banner_timer') ?>",
timerDiameter: 17,
timerPadding: 3,
timerStroke: 3,
timerBarStroke: 0,
timerX: 6, 
timerY: 6,
timerColor: "#0F0",
timerPosition: "top-right"
});	

})
})(jQuery);
</script>

<div id="iview" class="iview" style="width: 728px; height: 90px; margin-top: 15px;">

<?php if (get_option('op_banners_number') == '2') { ?> 
    	
<div data-iview:image="<?php echo get_option("op_b1_image_path"); ?>">
<a href="<?php echo get_option("op_b1_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b1_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b2_image_path"); ?>">
<a href="<?php echo get_option("op_b2_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b2_title"); ?> &raquo;</div></a>
</div>
	
<?php } ?> 


<?php if (get_option('op_banners_number') == '3') { ?> 
    	
<div data-iview:image="<?php echo get_option("op_b1_image_path"); ?>">
<a href="<?php echo get_option("op_b1_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b1_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b2_image_path"); ?>">
<a href="<?php echo get_option("op_b2_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b2_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b3_image_path"); ?>">
<a href="<?php echo get_option("op_b3_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b3_title"); ?> &raquo;</div></a>
</div>
	
<?php } ?> 


<?php if (get_option('op_banners_number') == '4') { ?> 
    	
<div data-iview:image="<?php echo get_option("op_b1_image_path"); ?>">
<a href="<?php echo get_option("op_b1_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b1_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b2_image_path"); ?>">
<a href="<?php echo get_option("op_b2_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b2_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b3_image_path"); ?>">
<a href="<?php echo get_option("op_b3_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b3_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b4_image_path"); ?>">
<a href="<?php echo get_option("op_b4_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b4_title"); ?> &raquo;</div></a>
</div>
	
<?php } ?> 


<?php if (get_option('op_banners_number') == '5') { ?> 
    	
<div data-iview:image="<?php echo get_option("op_b1_image_path"); ?>">
<a href="<?php echo get_option("op_b1_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b1_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b2_image_path"); ?>">
<a href="<?php echo get_option("op_b2_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b2_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b3_image_path"); ?>">
<a href="<?php echo get_option("op_b3_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b3_title"); ?> &raquo;</div></a>
</div>

<div data-iview:image="<?php echo get_option("op_b4_image_path"); ?>">
<a href="<?php echo get_option("op_b4_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b4_title"); ?> &raquo;</div></a>
</div>
	
<div data-iview:image="<?php echo get_option("op_b5_image_path"); ?>">
<a href="<?php echo get_option("op_b5_link"); ?>"><div class="iview-caption" data-x="10" data-y="34"><?php echo get_option("op_b5_title"); ?> &raquo;</div></a>
</div>	
	
<?php } ?> 

</div>
		