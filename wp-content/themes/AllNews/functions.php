<?php

define( 'BASE_URL', get_template_directory_uri() . '/' );

require_once(TEMPLATEPATH . '/options/options_theme.php'); 
require_once(TEMPLATEPATH . '/options/functions.php'); 	 
require_once(TEMPLATEPATH . '/includes/meta-box.php');
require_once(TEMPLATEPATH . '/includes/meta-box-single.php');
require_once(TEMPLATEPATH . '/options/seo.php'); 	
require_once(TEMPLATEPATH . '/includes/shortcodes.php');
require_once(TEMPLATEPATH . '/includes/tinymce/tinymce.php');
require_once(TEMPLATEPATH . '/includes/breadcrumbs.php');
require_once(TEMPLATEPATH . '/includes/contact_form.php');
require_once(TEMPLATEPATH . '/includes/aq_resizer.php');


/* ---------------Theme styles-------------- */


function register_styles(){ 

if( !is_admin() ) {
wp_register_style( 'my-style', BASE_URL . 'style.css', null, false );
wp_register_style( 'prettyPhoto', BASE_URL . 'css/prettyPhoto.css', null, false );
wp_register_style( 'shortcodes', BASE_URL . 'css/shortcodes.css', null, false );
wp_register_style( 'tipTip', BASE_URL . 'css/tipTip.css', null, false );
wp_register_style( 'carousel', BASE_URL . 'css/carousel.css', null, false );
wp_register_style( 'ticker-style', BASE_URL . 'css/ticker-style.css', null, false );
wp_register_style( 'galleria', BASE_URL . 'css/galleria.classic.css', null, false );
wp_register_style( 'iview', BASE_URL . 'css/iview.css', null, false );
wp_register_style( 'responsive', BASE_URL . 'css/responsive.css', null, false );
}

}
add_action('init', 'register_styles');


function enqueue_styles() {

if( !is_admin() ) {
wp_enqueue_style('my-style');
wp_enqueue_style('prettyPhoto');
wp_enqueue_style('shortcodes');
wp_enqueue_style('tipTip');
wp_enqueue_style('carousel');
wp_enqueue_style('ticker-style');
wp_enqueue_style('galleria');
wp_enqueue_style('iview');
wp_enqueue_style('responsive');
}

}
add_action('wp_print_styles', 'enqueue_styles');




/* ---------------Theme scripts-------------- */


function theme_scripts(){ 

if( !is_admin() ) {
wp_enqueue_script('jquery');
wp_enqueue_script('browser_selector', BASE_URL . 'js/css_browser_selector.js');
wp_enqueue_script('easing', BASE_URL . 'js/jquery.easing.1.3.js');
wp_enqueue_script('pikachoose', BASE_URL . 'js/jquery.pikachoose.js');
wp_enqueue_script('flexslider', BASE_URL . 'js/jquery.flexslider-min.js');
wp_enqueue_script('froogaloop', BASE_URL . 'js/froogaloop.js');
wp_enqueue_script('fitvid', BASE_URL . 'js/jquery.fitvid.js');
wp_enqueue_script('eislideshow', BASE_URL . 'js/jquery.eislideshow.js');
wp_enqueue_script('cycle', BASE_URL . 'js/cycle.js');
wp_enqueue_script('quicksand', BASE_URL . 'js/jquery.quicksand.js');
wp_enqueue_script('easypaginate', BASE_URL . 'js/easypaginate.min.js');
wp_enqueue_script('color', BASE_URL . 'js/jquery.color.js');
wp_enqueue_script('form', BASE_URL . 'js/jquery.form.js');
wp_enqueue_script('tools', BASE_URL . 'js/jquery.tools.min.js');
wp_enqueue_script('prettyPhoto', BASE_URL . 'js/jquery.prettyPhoto.js');
wp_enqueue_script('hoverIntent', BASE_URL . 'js/jquery.hoverIntent.minified.js');
wp_enqueue_script('tipTip', BASE_URL . 'js/jquery.tipTip.js');
wp_enqueue_script('content_carousel', BASE_URL . 'js/jquery.content_carousel.js');
wp_enqueue_script('jcarousel', BASE_URL . 'js/jquery.jcarousel.js');
wp_enqueue_script('ticker', BASE_URL . 'js/jquery.ticker.js');
wp_enqueue_script('galleria', BASE_URL . 'js/galleria-1.2.8.js');
wp_enqueue_script('galleria_classic', BASE_URL . 'js/galleria.classic.js');
wp_enqueue_script('mediaqueries', BASE_URL . 'js/css3-mediaqueries.js');
wp_enqueue_script('modernizr', BASE_URL . 'js/modernizr.js');
wp_enqueue_script('ddsmoothmenu', BASE_URL . 'js/ddsmoothmenu.js');
wp_enqueue_script('iview', BASE_URL . 'js/iview.pack.js');
wp_enqueue_script('raphael', BASE_URL . 'js/raphael-min.js');
wp_enqueue_script('custom', BASE_URL . 'js/custom.js');
}

}
add_action('wp_enqueue_scripts', 'theme_scripts');

if ( is_singular() ) wp_enqueue_script( 'comment-reply' );	



register_sidebar(array('name'=>'Right sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="right-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="right-heading"><h3>',
        'after_title' => '</h3><span></span></div><div class="clear"></div>',
    ));	

 register_sidebar(array('name'=>'Top sidebar',
        'id' => 'top-sidebar',
		'description'   => 'Top sidebar is displayed only if turned off the Subscribe widget',
        'before_widget' => '<div class="right-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="right-heading"><h3>',
        'after_title' => '</h3><span></span></div><div class="clear"></div>',
    ));	
	
register_sidebar(array('name'=>'Footer sidebar',
        'id' => 'footer-sidebar',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="footer-heading"><h3>',
        'after_title' => '</h3><span></span></div><div class="clear"></div>',
    ));		
	
add_filter( 'show_admin_bar', '__return_false' );
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');
remove_action( 'wp_head', 'wp_generator' );	
add_theme_support( 'automatic-feed-links' );
$args = array(
	'default-color' => 'fff'
);
add_theme_support( 'custom-background', $args );		
	
	
function read_more_funtion($post) {
if ( is_page() ) {
 } else {
  return ;
}}
add_filter('excerpt_more', 'read_more_funtion');	
	
function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
if ( '' == $text ) {

    $text = get_the_content('');

    $text = strip_shortcodes( $text );
 
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
 
    $allowed_tags = '<p>,<a>,<em>,<strong>'; 
    $text = strip_tags($text, $allowed_tags);

     $excerpt_word_count = 23; 

    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
 
    $excerpt_end = 'Read more'; 
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
 
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');


add_theme_support(
	'post-formats', array(	
		'image',
		'video',
		'audio'
	)
);

if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}


if ( function_exists( 'wp_nav_menu' ) ){
	if (function_exists('add_theme_support')) {
		add_theme_support('nav-menus');
		add_action( 'init', 'register_my_menus' );
		function register_my_menus() {
			register_nav_menus(
				array(
					'main-menu' => __( 'Main menu' )
				));
}}}

function primarymenu(){ ?>

<div id="mainMenu" class="ddsmoothmenu">
<ul>
<?php wp_list_pages('title_li='); ?>
</ul>
</div>

<?php }	


function pd_title($amount,$echo=true) {
	$pd = get_the_title(); 
	if ( strlen($pd) <= $amount ) $echo_out = ' &raquo;'; else $echo_out = ' &raquo;';
	$pd = mb_substr( $pd, 0, $amount, 'UTF-8' );
	if ($echo) {
		echo $pd;
		echo $echo_out;
	}
	else { return ($pdtitle . $echo_out); }
}

function custom_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}



add_action('template_redirect', 'register_a_user');
function register_a_user(){

  if(isset($_GET['do']) && $_GET['do'] == 'register'):
    $errors = array();
    if(empty($_POST['user']) || empty($_POST['email'])) $errors[] = 'Please enter a user name and e-mail.';

    $user_login = esc_attr($_POST['user']);
    $user_email = esc_attr($_POST['email']);

    $sanitized_user_login = sanitize_user($user_login);
    $user_email = apply_filters('user_registration_email', $user_email);

    if(!is_email($user_email)) $errors[] = 'Invalid e-mail.';
    elseif(email_exists($user_email)) $errors[] = 'This email is already registered.';

    if(empty($sanitized_user_login) || !validate_username($user_login)) $errors[] = 'Invalid user name.';
    elseif(username_exists($sanitized_user_login)) $errors[] = 'User name already exists.';

    if(empty($errors)):
      $user_pass = wp_generate_password();
      $user_id = wp_create_user($sanitized_user_login, $user_pass, $user_email);

      if(!$user_id):
        $errors[] = 'Registration failed';
      else:
        update_user_option($user_id, 'default_password_nag', true, true);
        wp_new_user_notification($user_id, $user_pass);
      endif;
    endif;

    if(!empty($errors)) define('REGISTRATION_ERROR', serialize($errors));
    else define('REGISTERED_A_USER', $user_email);
  endif;
}

function get_category_id($cat_name){
	$term = get_term_by('slug', $cat_name, 'category');
	return $term->term_id;
}

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');


function show_post($path) {
  $post = get_page_by_path($path);
  $content = apply_filters('the_content', $post->post_content);
  echo $content;
}

if ( ! isset( $content_width ) ) $content_width = 900;


include(TEMPLATEPATH . '/includes/widgets/banners.php');
include(TEMPLATEPATH . '/includes/widgets/recent_posts.php');
include(TEMPLATEPATH . '/includes/widgets/recent_category_posts.php');
include(TEMPLATEPATH . '/includes/widgets/popular_posts.php');
include(TEMPLATEPATH . '/includes/widgets/contact.php');
include(TEMPLATEPATH . '/includes/widgets/flickr.php');
include(TEMPLATEPATH . '/includes/widgets/twitter.php');
include(TEMPLATEPATH . '/includes/widgets/video.php');

?>
