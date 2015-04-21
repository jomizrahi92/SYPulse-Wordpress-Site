<?php 

$themename = "All News Options";
$shortname = "op";

$cats_array = get_categories('hide_empty=0');
$pages_array = get_pages('hide_empty=0');
$site_pages = array();
$site_cats = array();

foreach ($pages_array as $pagg) {
	$site_pages[$pagg->ID] = htmlspecialchars($pagg->post_title);
	$pages_ids[] = $pagg->ID;
}

foreach ($cats_array as $categs) {
	$site_cats[$categs->cat_ID] = $categs->cat_name;
	$cats_ids[] = $categs->cat_ID;
}

$op_categories_obj = get_categories('hide_empty=1');
$op_categories = array();
foreach ($op_categories_obj as $op_cat) {
$op_categories[$op_cat->cat_ID] = $op_cat->category_nicename;
}
$categories_tmp = array_unshift($op_categories, "Select a category:");	

$effects = array('random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight');
$google_fonts =  array('Droid Sans','Droid Serif','Open Sans','Open Sans Condensed','PT Sans', 'PT Sans Narrow', 'PT Sans Caption', 'Abel','Lato','Nobile','Crimson Text','Arvo','Tangerine','Cuprum','Cantarell','Philosopher','Josefin Sans','Dancing Script','Raleway','Bentham','Goudy Bookletter 1911','Quattrocento','Ubuntu');

$options = array (
	
array( "type" => "tabs-open",),
		
array( "name" => "General_1",
       "type" => "tab",
	   "desc" => "General settings"),

array( "name" => "General_2",
		"type" => "tab",
		"desc" => "Featured"),
		
array( "name" => "General_3",
		"type" => "tab",
		"desc" => "Pages"),
		
array( "name" => "General_4",
		"type" => "tab",
		"desc" => "Single post"),			

array( "name" => "General_41",
		"type" => "tab",
		"desc" => "Single page"),	

array( "name" => "General_42",
		"type" => "tab",
		"desc" => "Ads & Social"),			
		
array( "name" => "General_5",
		"type" => "tab",
		"desc" => "Colorization"),	
		
array( "name" => "General_6",
		"type" => "tab",
		"desc" => "SEO"),	

array( "name" => "General_7",
		"type" => "tab",
		"desc" => "Translation"),	
		
array( "type" => "tabs-close",),
		
		
array( "name" => "General_1",
		"type" => "content-open",),		

array( "name" => "Fixed theme",
        "id" => $shortname."_fixed",
        "type" => "checkbox",
        "std" => "false",
        "desc" => "Enable this option to display fixed theme"),	

array( "type" => "clearfix",),			
		
array( "name" => "Custom Style",
        "id" => $shortname."_custom_colors",
        "type" => "checkbox",
        "std" => "on",
        "desc" => "Enable this option to display custom styles theme"),	

array( "type" => "clearfix",),
		
array( "name" => "Favicon",
		"id" => $shortname."_favicon",
		"type" => "upload",
		"std" => "",
		"desc" => "Enter the full path to the image favicon <br/>(size: 16x16px, format: .ico)"),		
	
array( "name" => "Logo",
        "id" => $shortname."_logo_on",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "If logo is turned off, then will be displayed name and site description."),
			
array( "type" => "clearfix",),
			 
array( "name" => "Logo image",
		"id" => $shortname."_logo",
		"type" => "upload",
		"std" => "",
		"desc" => "Enter the full path to the image"),			 							

array( "type" => "clearfix",),			
		
array( "name" => "Header Cufon Font",
		"id" => $shortname."_header_font",
		"type" => "select",
		"std" => "Kreon",
		"options" => $google_fonts,
		"desc" => "Select Cufon font for h1-h6 headers.",),	

array( "name" => "Text Cufon Font",
		"id" => $shortname."_text_font",
		"type" => "select",
		"std" => "Kreon",
		"options" => $google_fonts,
		"desc" => "Select Cufon font for text.",),	
		
array( "type" => "clearfix",),				
	
		
array( "name" => "Administration form panel",
        "id" => $shortname."_regform",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "Enable this option for display administration form panel."),	
		
array( "type" => "clearfix",),					
	
array( "name" => "Footer sidebar",
        "id" => $shortname."_footer_sidebar",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display footer sidebar."),	
	
	
array( "type" => "clearfix",),				   
array( "name" => "General_1",
		"type" => "content-close",),
		
		
array( "name" => "General_2",
		"type" => "content-open",),				


array( "name" => "News ticker",
        "id" => $shortname."_news_ticker",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display News ticker."),
			
array( "type" => "clearfix",),				
	
array( "name" => "Category for news ticker",
        "id" => $shortname."_news_ticker_cat",
        "type" => "select",
		"std" => "",
		"options" => $op_categories,
		"desc" => "Select a category for news ticker."),
		
array( "name" => "Number news",
        "id" => $shortname."_news_ticker_number",
        "std" => "4",
        "type" => "text",
		"desc" => "Select number news displayed in news ticker."),	
	
array( "name" => "Ticker pause",
        "id" => $shortname."_ticker_pause",
		"std" => "3000",
        "type" => "text",
		"desc" => "Enter a time pause for news ticker (value in ms. ex. 3000)"),		

array( "name" => "Ticker animation",
        "id" => $shortname."_ticker_effect",
        "type" => "select",
		"std" => "",
		"options" => array("fade","reveal"),
		"desc" => "Select a ticker animation effect."),		
		
		
array( "name" => "Featured area",
        "id" => $shortname."_featured_area",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option for display featured area on home page."),	
		
array( "type" => "clearfix",),					
		
array( 	"name" => "Home slider category",
		"desc" => "Select the category for Home slider.",
		"id" => $shortname."_feat_cat",
		"std" => "Select a category:",
		"type" => "select",
		"options" => $op_categories),
		
array( "type" => "clearfix",),

array( 	"name" => "Home slider number slides",
		"id" => $shortname."_feat_slides",
		"type" => "select",
		"std" => "",
        "options" => array('1', '2', '3', '4', '5', '6'),
		"desc" => "Select the number slides."),	
		
array( "type" => "clearfix",),	
array( "name" => "General_2",
		"type" => "content-close",),
	
		
	
		
		
array( "name" => "General_3",
		"type" => "content-open",),				

array( "name" => "Blog Category",
        "id" => $shortname."_blog_cat",
        "type" => "select",
		"std" => "",
		"options" => $op_categories,
		"desc" => "Select a category for blog template."),			

array( "name" => "Pages meta line (date, category, comments)",
        "id" => $shortname."_blog_meta_line",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "Enable this option for display meta line (date, category, comments) in index & blog pages."),		

array( "type" => "clearfix",),							
		
array( "name" => "Email for contact form",
        "id" => $shortname."_contact_email",
        "type" => "text",
		"std" => "",
		"desc" => "Enter your email for contact form"),			
	
array( "name" => "Text for contact page",
		"id" => $shortname."_cf_text",
		"type" => "textarea",
		"std" => "",
		"desc" => "Enter the text that will be displayed on contact page",),	
		
array( "name" => "Contact page map code",
		"id" => $shortname."_cf_map",
		"type" => "textarea",
		"std" => "",
		"desc" => "Enter the map code that will be displayed on contact page<br />(recomend size: 300x320px)",),	
		
array( "type" => "clearfix",),
array( "name" => "General_3",
	    "type" => "content-close",),		

		
		
		

array( "name" => "General_4",
		"type" => "content-open",),
		
array( "name" => "Title font size",
        "id" => $shortname."_title_size",
        "type" => "select",
		"std" => "",
		"options" => array('12', '13', '14', '15', '16', '17', '18', '19', '20'),
		"desc" => "Select title font size for single posts and pages."),				
		
array( "name" => "Thumbnail",
        "id" => $shortname."_single_thumbnail",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "Enable this option for display thumbnail in single posts."),		   	

array( "type" => "clearfix",),			
	
array( "name" => "Tags",
        "id" => $shortname."_tags",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "Enable this option for display tags in single posts."),		   
	
array( "type" => "clearfix",),
		
array( "name" => "Similar posts",
        "id" => $shortname."_similar",
        "type" => "checkbox",
        "std" => "false",
        "desc" => "Enable this option for display similar posts in single posts"),
				   
array( "type" => "clearfix",),			
		
array( "name" => "Comments",
        "id" => $shortname."_single_comments",
        "type" => "checkbox",
        "std" => "on",
        "desc" => "Enable this option for display comments in single posts"),	   
			
array( "type" => "clearfix",),

array( "name" => "General_4",
	    "type" => "content-close",),		
	
	
	
	
	
array( "name" => "General_41",
		"type" => "content-open",),		
			
		
array( "name" => "Thumbnail",
        "id" => $shortname."_single_page_thumbnail",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "Enable this option for display thumbnail in single pages."),		   	

array( "type" => "clearfix",),		
	
array( "name" => "Comments",
        "id" => $shortname."_single_page_comments",
        "type" => "checkbox",
        "std" => "on",
        "desc" => "Enable this option for display comments in single pages"),	   	
	
	
array( "type" => "clearfix",),

array( "name" => "General_41",
	    "type" => "content-close",),	

		

array( "name" => "General_42",
		"type" => "content-open",),		

array( "name" => "Subscribe widget",
        "id" => $shortname."_subscribe_widget",
        "type" => "checkbox",
        "std" => "on",
		"desc" => "Enable this option for display subscribe widget in sidebar."),	
		
array( "type" => "clearfix",),		

array( "name" => "Facebook ID for subscribe widget",
        "id" => $shortname."_facebook_id_sb",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the your Facebook ID"),	
		
array( "name" => "Twitter ID for subscribe widget",
        "id" => $shortname."_twitter_id_sb",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the your Twitter ID"),			

array( "name" => "Feedburner ID for subscribe widget",
        "id" => $shortname."_feedburner_id_sb",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the your Feedburner ID"),				
		
array( "name" => "Social bookmarks",
        "id" => $shortname."_social",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display social bookmarks in header."),
		
array( "type" => "clearfix",),			
		
array( "name" => "Twitter subscribe",
        "id" => $shortname."_twitter",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display Twitter subscribe in header."),
			
array( "type" => "clearfix",),	
	
array( "name" => "Twitter path",
        "id" => $shortname."_twitter_id",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the full path to your Twitter account"),	
		
array( "name" => "Facebook subscribe",
        "id" => $shortname."_facebook",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display Facebook subscribe in header."),
			
array( "type" => "clearfix",),		
		
array( "name" => "Facebook path",
        "id" => $shortname."_facebook_id",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the full path to your Facebook account"),	
	
array( "name" => "Linkedin subscribe",
        "id" => $shortname."_linkedin",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display Linkedin subscribe in header."),	
		
array( "type" => "clearfix",),		
	
array( "name" => "Linkedin path",
        "id" => $shortname."_linkedin_id",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the full path to your Linkedin account"),	
	
array( "name" => "Vimeo subscribe",
        "id" => $shortname."_vimeo",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display Vimeo subscribe in header."),		

array( "type" => "clearfix",),			
	
array( "name" => "Vimeo path",
        "id" => $shortname."_vimeo_id",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the full path to your Vimeo account"),	
	
array( "name" => "Flickr subscribe",
        "id" => $shortname."_flickr",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display Flickr subscribe in header."),		

array( "type" => "clearfix",),			
	
array( "name" => "Flickr path",
        "id" => $shortname."_flickr_id",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the full path to your Flickr account"),	
		
	
array( "name" => "Rss subscribe",
        "id" => $shortname."_rss",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display rss subscribe in header."),	
		
array( "type" => "clearfix",),	
			
array( "name" => "Header banner (468x60px)",
        "id" => $shortname."_banner_header",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display banner (468x60px) in header."),
			
array( "type" => "clearfix",),		
	
array( "name" => "Banner size",
        "id" => $shortname."_banner_size",
		"std" => "",
        "type" => "select",
		"options" => array("468x60px","728x90px"),
		"desc" => "Select a banner size"),		
	
array( "name" => "Header - Single banner code",
        "id" => $shortname."_banner_header_code",
		"std" => "",
        "type" => "textarea",
		"desc" => "Enter code for banner in header."),
	
array( "name" => "Header - Banner rotator",
        "id" => $shortname."_banner_rotator",
        "type" => "checkbox",
        "std" => "false",
		"desc" => "Enable this option to display banner rotator instead Single banner."),
			
array( "type" => "clearfix",),		
			
array( "name" => "Banner pause time",
        "id" => $shortname."_banner_pause",
		"std" => "5000",
        "type" => "select",
		"options" => array("2000","3000","4000","5000","6000","7000","8000","9000"),
		"desc" => "Select a banner pause time"),		
			
array( "name" => "Banner timer animation",
        "id" => $shortname."_banner_timer",
		"std" => "pie",
        "type" => "select",
		"options" => array("pie","Bar","360Bar"),
		"desc" => "Select a banner timer animation"),				
			
array( "name" => "Banners number",
        "id" => $shortname."_banners_number",
        "type" => "select",
		"std" => "2",
		"options" => array("2","3","4","5"),
		"desc" => "Select a number of banners."),		

		
array( "name" => "Banner 1 - Image path",
        "id" => $shortname."_b1_image_path",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the path to the image of banner 1"),	
		
array( "name" => "Banner 1 - Link",
        "id" => $shortname."_b1_link",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the link to the banner 1"),	

array( "name" => "Banner 1 - Title",
        "id" => $shortname."_b1_title",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the title to the banner 1"),			
		
		
array( "name" => "Banner 2 - Image path",
        "id" => $shortname."_b2_image_path",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the path to the image of banner 2"),	
		
array( "name" => "Banner 2 - Link",
        "id" => $shortname."_b2_link",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the link to the banner 2"),	

array( "name" => "Banner 2 - Title",
        "id" => $shortname."_b2_title",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the title to the banner 2"),			
		
		
array( "name" => "Banner 3 - Image path",
        "id" => $shortname."_b3_image_path",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the path to the image of banner 3"),	
		
array( "name" => "Banner 3 - Link",
        "id" => $shortname."_b3_link",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the link to the banner 3"),	

array( "name" => "Banner 3 - Title",
        "id" => $shortname."_b3_title",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the title to the banner 3"),			
		
		
array( "name" => "Banner 4 - Image path",
        "id" => $shortname."_b4_image_path",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the path to the image of banner 4"),	
		
array( "name" => "Banner 4 - Link",
        "id" => $shortname."_b4_link",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the link to the banner 4"),	

array( "name" => "Banner 4 - Title",
        "id" => $shortname."_b4_title",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the title to the banner 4"),			
		

array( "name" => "Banner 5 - Image path",
        "id" => $shortname."_b5_image_path",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the path to the image of banner 5"),	
		
array( "name" => "Banner 5 - Link",
        "id" => $shortname."_b5_link",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the link to the banner 5"),	

array( "name" => "Banner 5 - Title",
        "id" => $shortname."_b5_title",
        "type" => "text",
		"std" => "",
		"desc" => "Enter the title to the banner 5"),	
		
		
array( "type" => "clearfix",),

array( "name" => "General_42",
	    "type" => "content-close",),	

		
		
array( "name" => "General_5",
		"type" => "content-open",),	

array( "name" => "Fast change theme colors",
		"id" => $shortname."_theme_colors",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a color for all theme colors",),
		
array( "name" => "jQuery hover effect background color",
		"id" => $shortname."_hover_effect",
		"std" => "e4a225",
		"type" => "textcolorpopup",
		"desc" => "Choose a background color for jquery effect on hover",),	
		
array( "name" => "Banner caption background color",
		"id" => $shortname."_iview_caption",
		"std" => "",
		"type" => "textcolorpopup",
		"desc" => "Choose a background color for Banner caption",),		
	
	
array( "name" => "Headers color",
		"id" => $shortname."_headers_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a headers color",),	
		
array( "name" => "Link color",
		"id" => $shortname."_link_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a link color",),	

array( "name" => "Link hover color",
		"id" => $shortname."_link_color_hover",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a link hover color",),

array( "name" => "Site title color",
		"id" => $shortname."_site_title_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a site title and description color",),

array( "name" => "Site title hover color",
		"id" => $shortname."_site_title_color_hover",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a site title hover color",),
		
array( "name" => "Main menu color",
		"id" => $shortname."_main_menu_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main menu color",),		
		
array( "name" => "Main menu color on hover",
		"id" => $shortname."_main_menu_hover_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main menu color on hover",),	
		
array( "name" => "Main menu active & hover background color",
		"id" => $shortname."_active_menu_background",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main menu active & hover links background color",),			

array( "name" => "Main menu active & hover color",
		"id" => $shortname."_active_menu_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main menu active & hover links color",),	
		
array( "name" => "Main sub menu color",
		"id" => $shortname."_main_sub_menu_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main sub menu color",),		
		
array( "name" => "Main sub menu color on hover",
		"id" => $shortname."_main_sub_menu_hover_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main sub menu color on hover",),			
	
array( "name" => "Main sub menu background color",
		"id" => $shortname."_main_sub_menu_background",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main sub menu background color",),		
		
array( "name" => "Main sub menu background color on hover",
		"id" => $shortname."_main_sub_menu_hover_background",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a main sub menu background color on hover",),		

array( "name" => "Sidebar headers color",
		"id" => $shortname."_sidebar_headers_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a sidebar headers color",),			
	
array( "name" => "Sidebar footer headers color",
		"id" => $shortname."_sidebar_footer_headers_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a sidebar footer headers color",),	
	
array( "name" => "Sidebar link color",
		"id" => $shortname."_sidebar_link_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a sidebar link color",),		

array( "name" => "Sidebar link hover color",
		"id" => $shortname."_sidebar_link_color_hover",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a sidebar link hover color",),				
	
array( "name" => "Footer sidebar link color",
		"id" => $shortname."_footer_sidebar_link_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a footer sidebar link color",),		

array( "name" => "Footer sidebar hover color",
		"id" => $shortname."_footer_sidebar_link_color_hover",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a footer sidebar link hover color",),
	
array( "name" => "Breadcrumbs color",
		"id" => $shortname."_crumbs_color",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a color for Breadcrumbs",),	
		
array( "name" => "Breadcrumbs color on hover",
		"id" => $shortname."_crumbs_color_hover",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a color for Breadcrumbs on hover",),		
	
array( "name" => "Footer background color",
		"id" => $shortname."_footer_background",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a footer background color",),		

array( "name" => "Footer bottom line background color",
		"id" => $shortname."_footer_bottom_background",
		"type" => "textcolorpopup",
		"std" => "",
		"desc" => "Choose a footer bottom line background color",),	
	
	
array( "type" => "clearfix",),
array( "name" => "General_5",
	    "type" => "content-close",),
		

		
		
		
array( "name" => "General_6",
		"type" => "content-open",),			
		
array( "name" => "Homepage custom title ",
		"id" => $shortname."_seo_home_title",
		"type" => "checkbox",
		"std" => "false",
		"desc" => "Enable this option for display custom title on home page",),

array( "type" => "clearfix",),

array( "name" => "Homepage meta description",
		"id" => $shortname."_seo_home_description",
		"type" => "checkbox",
		"std" => "false",
		"desc" => "Enable this option for display custom meta description on home page",),

array( "type" => "clearfix",),

array( "name" => "Homepage meta keywords",
		"id" => $shortname."_seo_home_keywords",
		"type" => "checkbox",
		"std" => "false",
		"desc" => "Enable this option for display custom meta keywords on home page",),

array( "type" => "clearfix",),
		
array( "name" => "Homepage custom title",
		"id" => $shortname."_seo_home_titletext",
		"type" => "text",
		"std" => "",
		"desc" => "",),

array( "name" => "Homepage meta description",
		"id" => $shortname."_seo_home_descriptiontext",
		"type" => "textarea",
		"std" => "",
		"desc" => "",),

array( "name" => "Homepage meta keywords",
		"id" => $shortname."_seo_home_keywordstext",
		"type" => "text",
		"std" => "",
		"desc" => "",),

array( "name" => "Single custom titles",
		"id" => $shortname."_seo_single_title",
		"type" => "checkbox",
		"std" => "false",
		"desc" => "Enable this option for display custom title on single post and pages",),

array( "name" => "Single custom description",
		"id" => $shortname."_seo_single_description",
		"type" => "checkbox",
		"std" => "false",
		"desc" => "Enable this option for display custom description on single post and pages",),

array( "type" => "clearfix",),

array( "name" => "Single custom keywords",
		"id" => $shortname."_seo_single_keywords",
		"type" => "checkbox",
		"std" => "false",
		"desc" => "Enable this option for display custom keywords on single post and pages",),
				   
				   
array( "type" => "clearfix",),
array( "name" => "General_6",
	    "type" => "content-close",),			
		
		
array( "name" => "General_7",
		"type" => "content-open",),	


array( "name" => "Sign in",
        "id" => $shortname."_sign_in",
		"std" => "Sign in",
        "type" => "text",
		"desc" => "Enter a Sign in text for registration panel"),	
		
array( "name" => "Log in",
        "id" => $shortname."_log_in",
		"std" => "Log in",
        "type" => "text",
		"desc" => "Enter a Log in text for registration panel"),				
		
array( "name" => "Username",
        "id" => $shortname."_username",
		"std" => "Username",
        "type" => "text",
		"desc" => "Enter a Username text for registration panel"),			
		
array( "name" => "Your Email",
        "id" => $shortname."_your_email",
		"std" => "Your Email",
        "type" => "text",
		"desc" => "Enter a Your Email text for registration panel"),			

array( "name" => "Password",
        "id" => $shortname."_password",
		"std" => "Password",
        "type" => "text",
		"desc" => "Enter a Password text for registration panel"),			
	
array( "name" => "Remember Me",
        "id" => $shortname."_remember_me",
		"std" => "Remember Me",
        "type" => "text",
		"desc" => "Enter a Remember Me text for registration panel"),	
		
array( "name" => "Lost your password?",
        "id" => $shortname."_lost_password",
		"std" => "Lost your password?",
        "type" => "text",
		"desc" => "Enter a Lost your password text for registration panel"),	
		
array( "name" => "Sign in - Button",
        "id" => $shortname."_sign_in_button",
		"std" => "Sign in!",
        "type" => "text",
		"desc" => "Enter a Sign in text for registration panel"),		
				
		
array( "name" => "Log in - Button",
        "id" => $shortname."_log_in_button",
		"std" => "Log in",
        "type" => "text",
		"desc" => "Enter a Log in text for registration panel"),		
		
array( "name" => "Hello",
        "id" => $shortname."_hello",
		"std" => "Hello",
        "type" => "text",
		"desc" => "Enter a Hello text for registration panel"),			
		
array( "name" => "Logout",
        "id" => $shortname."_logout",
		"std" => "Logout",
        "type" => "text",
		"desc" => "Enter a Logout text for registration panel"),			
		
		
array( "name" => "Search...",
        "id" => $shortname."_search",
		"std" => "Search...",
        "type" => "text",
		"desc" => "Enter a Search text for search form"),			
		
array( "name" => "Latest news",
        "id" => $shortname."_ticker_title",
		"std" => "Latest news",
        "type" => "text",
		"desc" => "Enter a Latest news text for news ticker"),			

array( "name" => "Subscribe",
        "id" => $shortname."_subscribe_button",
		"std" => "Subscribe",
        "type" => "text",
		"desc" => "Enter a Subscribe text for Subscribe form button"),			
		
		
array( "name" => "Read - For standard post format",
        "id" => $shortname."_read_post",
		"std" => "Read",
        "type" => "text",
		"desc" => "Enter a Read text for link on post images"),			
		
array( "name" => "View - For video post format",
        "id" => $shortname."_view_video_post",
		"std" => "View",
        "type" => "text",
		"desc" => "Enter a View text for link on post images"),			

array( "name" => "View - For image post format",
        "id" => $shortname."_view_image_post",
		"std" => "View",
        "type" => "text",
		"desc" => "Enter a View text for link on post images"),		

array( "name" => "View - For audio post format",
        "id" => $shortname."_view_audio_post",
		"std" => "View",
        "type" => "text",
		"desc" => "Enter a View text for link on post images"),		
		
		
array( "name" => "Home",
        "id" => $shortname."_home_text",
		"std" => "Home",
        "type" => "text",
		"desc" => "Enter a Home text for breadcrumbs"),		

array( "name" => "Search results for",
        "id" => $shortname."_search_result",
		"std" => "Search results for",
        "type" => "text",
		"desc" => "Enter a Search results text for breadcrumbs"),				
		
array( "name" => "Posts tagged",
        "id" => $shortname."_posts_tagged",
		"std" => "Posts tagged",
        "type" => "text",
		"desc" => "Enter a Posts tagged text for breadcrumbs"),			

array( "name" => "Articles posted by",
        "id" => $shortname."_posted_author",
		"std" => "Articles posted by",
        "type" => "text",
		"desc" => "Enter a Articles posted by text for breadcrumbs"),	
		
array( "name" => "Error 404",
        "id" => $shortname."_error_404",
		"std" => "Error 404",
        "type" => "text",
		"desc" => "Enter a Error 404 text for breadcrumbs"),		
	
array( "name" => "Page (for navigation)",
        "id" => $shortname."_page_navi",
		"std" => "Page",
        "type" => "text",
		"desc" => "Enter a Page text for breadcrumbs"),		
		
		
array( "name" => "Read more",
        "id" => $shortname."_read_more",
		"std" => "Read more",
        "type" => "text",
		"desc" => "Enter a Read more text for posts"),				
		
		
array( "name" => "Comments",
        "id" => $shortname."_comments_text",
		"std" => "Comments",
        "type" => "text",
		"desc" => "Enter a Comments text for posts"),		

array( "name" => "More news",
        "id" => $shortname."_more_news",
		"std" => "More news",
        "type" => "text",
		"desc" => "Enter a More news text for single posts"),			
	
array( "name" => "30 Recent Posts (sitemap)",
        "id" => $shortname."_30_recent_posts",
		"std" => "30 Recent Posts",
        "type" => "text",
		"desc" => "Enter a 30 Recent Posts text for sitemap"),		

array( "name" => "Pages (sitemap)",
        "id" => $shortname."_pages_sitemap",
		"std" => "Pages",
        "type" => "text",
		"desc" => "Enter a Pages text for sitemap"),			

array( "name" => "Categories (sitemap)",
        "id" => $shortname."_categories_sitemap",
		"std" => "Categories",
        "type" => "text",
		"desc" => "Enter a Categories text for sitemap"),		
	
array( "name" => "Archives (sitemap)",
        "id" => $shortname."_archives_sitemap",
		"std" => "Archives",
        "type" => "text",
		"desc" => "Enter a Archives text for sitemap"),		
	
array( "name" => "Error 404 - Page not found",
        "id" => $shortname."_page_not_found",
		"std" => "Error 404 - Page not found!",
        "type" => "text",
		"desc" => "Enter a Error 404 - Page not found text for 404 page"),			
	
array( "name" => "Try searching",
        "id" => $shortname."_try_searching",
		"std" => "Try searching:",
        "type" => "text",
		"desc" => "Enter a Try searching text for 404 page"),

array( "name" => "Or look in the archives",
        "id" => $shortname."_look_archives",
		"std" => "Or look in the archives:",
        "type" => "text",
		"desc" => "Enter a Or look in the archives text for 404 page"),		

array( "name" => "Nothing Found",
        "id" => $shortname."_nothing_found",
		"std" => "Nothing Found!",
        "type" => "text",
		"desc" => "Enter a Nothing Found text for search page"),	
		
array( "name" => "Text for search page",
		"id" => $shortname."_nothing_found_text",
		"type" => "textarea",
		"std" => "Sorry, but nothing matched your search criteria. Please try again with some different keywords.",
		"desc" => "Enter the text what will be displayed on search page",),			

array( "name" => "Your name (contact form)",
        "id" => $shortname."_your_name",
		"std" => "Your name: *",
        "type" => "text",
		"desc" => "Enter a Your name text for contact form"),			
		
array( "name" => "Your email (contact form)",
        "id" => $shortname."_your_email",
		"std" => "Your email: *",
        "type" => "text",
		"desc" => "Enter a Your email text for contact form"),		
	
array( "name" => "Your message (contact form)",
        "id" => $shortname."_your_message",
		"std" => "Your message: *",
        "type" => "text",
		"desc" => "Enter a Your message text for contact form"),		
		
array( "name" => "Submit - button (contact form)",
        "id" => $shortname."_contact_submit",
		"std" => "Submit",
        "type" => "text",
		"desc" => "Enter a Submit text for contact form"),	
	
array( "name" => "Your email was successfully sent (popup)",
        "id" => $shortname."_successfully_sent",
		"std" => "Your email was successfully sent!",
        "type" => "text",
		"desc" => "Enter a Successfully sent text for contact form"),		

array( "name" => "Wrong data (popup)",
        "id" => $shortname."_wrong_data",
		"std" => "Please enter your name, a message and a valid email address!",
        "type" => "text",
		"desc" => "Enter a Successfully sent text for contact form"),			
		
		
	
	
array( "name" => "Footer copy text",
        "id" => $shortname."_footer_copy",
		"std" => "All right reserved",
        "type" => "text",
		"desc" => "Enter copy text for footer."),	
	
array( "type" => "clearfix",),			
array( "name" => "General_7",
	    "type" => "content-close",),		
		
//-------------------------------------------------------------------------------------//	
			
);


function custom_colors_css(){
	global $shortname; ?>
	
<style type="text/css">
	h1, h2, h3, h4, h5, h6, #top_title_box { font-family:<?php echo(get_option($shortname.'_header_font')); ?>!important; }
	.featured_area_content_text, .da-slide p, #main_content, #container, .post_one_column h1, .post_mini_one_column h1, .post_two_column h1, .post_three_column h1 { font-family:<?php echo(get_option($shortname.'_text_font')); ?>!important; }	
    
	h1, h2, h3, h4, h5, h6, .post_one_column h1 a, .post_two_column h1 a, .post_three_column h1 a, .jcarousel-skin-tango .post_three_column h1 a, .post_mini_one_column h1 a, .post h1 a { color: #<?php echo(get_option($shortname.'_headers_color')); ?>!important; }
	.site_title h1 { color: #<?php echo(get_option($shortname.'_site_title_color')); ?>!important; } 
	.site_title h1:hover { color: #<?php echo(get_option($shortname.'_site_title_color_hover')); ?>!important; } 
	 a { color: #<?php echo(get_option($shortname.'_link_color')); ?>!important; }
	 a:hover, .post_one_column h1 a:hover, .post_two_column h1 a:hover, .post_three_column h1 a:hover, .jcarousel-skin-tango .post_three_column h1 a:hover, .post_mini_one_column h1 a:hover, .post h1 a:hover, .post_category a:hover, .post_comments a:hover { color: #<?php echo(get_option($shortname.'_link_color_hover')); ?>!important; }

	.right-heading h3 { color: #<?php echo(get_option($shortname.'_sidebar_headers_color')); ?>!important; } 
	.footer-heading h3 { color: #<?php echo(get_option($shortname.'_sidebar_footer_headers_color')); ?>!important; } 
	.right-widget li a{ color: #<?php echo(get_option($shortname.'_sidebar_link_color')); ?>!important; }
	.right-widget li a:hover { color: #<?php echo(get_option($shortname.'_sidebar_link_color_hover')); ?>!important; }
	.footer-widget li a { color: #<?php echo(get_option($shortname.'_footer_sidebar_link_color')); ?>!important; }
	.footer-widget li a:hover { color: #<?php echo(get_option($shortname.'_footer_sidebar_link_color_hover')); ?>!important; }
	#crumbs, #crumbs a{ color: #<?php echo(get_option($shortname.'_crumbs_color')); ?>!important; }
	#crumbs a:hover { color: #<?php echo(get_option($shortname.'_crumbs_color_hover')); ?>!important; }
	
	#mainMenu ul li a { color: #<?php echo(get_option($shortname.'_main_menu_color')); ?>!important; } 
	#mainMenu ul li a:hover, #mainMenu ul li.current-menu-parent > a, #mainMenu ul li.current_page_item > a, #mainMenu ul li.current-menu-ancestor > a, #mainMenu ul li.current-menu-item > a, #mainMenu ul li a:hover { color: #<?php echo(get_option($shortname.'_main_menu_hover_color')); ?>!important; } 
	#mainMenu ul li.current-menu-parent > a, #mainMenu ul li.current_page_item > a, #mainMenu ul li.current-menu-ancestor > a, #mainMenu ul li.current-menu-item > a, #mainMenu ul li a:hover { background: #<?php echo(get_option($shortname.'_active_menu_background')); ?>!important; } 
    #mainMenu ul li.current-menu-parent > a, #mainMenu ul li.current_page_item > a, #mainMenu ul li.current-menu-ancestor > a, #mainMenu ul li.current-menu-item > a, #mainMenu ul li a:hover { color: #<?php echo(get_option($shortname.'_active_menu_color')); ?>!important; } 	
	#mainMenu.ddsmoothmenu ul li ul li a { color: #<?php echo(get_option($shortname.'_main_sub_menu_color')); ?>!important; } 
	#mainMenu.ddsmoothmenu ul li ul li a:hover { color: #<?php echo(get_option($shortname.'_main_sub_menu_hover_color')); ?>!important; } 
	#mainMenu.ddsmoothmenu ul li ul li a, #mainMenu.ddsmoothmenu ul li ul li.current-menu-ancestor > a, #mainMenu.ddsmoothmenu ul li ul li.current-menu-item > a { background: #<?php echo(get_option($shortname.'_main_sub_menu_background')); ?>!important; } 
	#mainMenu.ddsmoothmenu ul li ul li a:hover { background: #<?php echo(get_option($shortname.'_main_sub_menu_hover_background')); ?>!important; } 
	#secondaryMenu ul a, #signin_box a.signin, #login_box a.login, #login_box a, #signin_menu, #login_menu, #lost_pas a { color: #<?php echo(get_option($shortname.'_secondary_menu_color')); ?>!important; } 
	#secondaryMenu ul a:hover, #secondaryMenu ul li.sfHover a, #secondaryMenu ul li.current-cat a, #secondaryMenu ul li.current_page_item a, #secondaryMenu ul li.current-menu-item a, #signin_box a.signin:hover, #login_box a.login:hover, #login_box a:hover, a.signin.menu-open span, a.login.menu-open span, #lost_pas a:hover { color: #<?php echo(get_option($shortname.'_secondary_menu_hover_color')); ?>!important; } 
	
    .iview-caption { background: #<?php echo(get_option($shortname.'_iview_caption')); ?>!important; }
	.flex-control-nav li a:hover, .flex-control-nav li a.active, #mainMenu, #menu_bottom_line, #signin_menu, #login_menu, .ei-slider-thumbs li a, .right-heading, .right-heading h3, #footer_bottom_line, #footer_box_line, .pagination .current, .current a { background: #<?php echo(get_option($shortname.'_theme_colors')); ?>!important; }
	.ei-title h2, .comment-header h3, #similar-post h3, .archive_title h3, .archive_title_bot h3, #submit, .pagination span, .pagination a, .tagcloud a, #sidebar-footer .tagcloud a, #submittedWidget, #contact input[type="submit"], .filter a, .comment-reply-link, .comment-reply-link:visited { border-color: #<?php echo(get_option($shortname.'_theme_colors')); ?>!important; }
	#footer_box { background: #<?php echo(get_option($shortname.'_footer_background')); ?>!important; }
	#footer_bottom { background: #<?php echo(get_option($shortname.'_footer_bottom_background')); ?>!important; }
	
	.single_title h1 { font-size: <?php echo(get_option($shortname.'_title_size')); ?>px; } 
</style>

<?php }; ?>
