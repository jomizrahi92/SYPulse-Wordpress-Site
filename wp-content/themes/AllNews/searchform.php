<form class="search" method="get" action="<?php echo home_url(); ?>/">
 <input type="text" name="s" id="s" value="<?php echo get_option('op_search'); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
 <input type="submit" id="searchsubmit" value="Search" />
</form>
