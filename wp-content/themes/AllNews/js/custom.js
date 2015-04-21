
ddsmoothmenu.init({
mainmenuid: "mainMenu", 
orientation: 'h',
classname: 'ddsmoothmenu', 
contentsource: "markup"
});

jQuery(document).ready(function($){

$("<select />").appendTo("#mainMenu");

$("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "Go to..."
}).appendTo("#mainMenu select");

$("#mainMenu a").each(function() {
 var el = $(this);
 $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("#mainMenu select");
});

$("#mainMenu select").change(function() {
  window.location = $(this).find("option:selected").val();
});
	
$('#ei-slider').eislideshow({
	easing		: 'easeOutExpo',
	titleeasing	: 'easeOutExpo',
	autoplay    : true,
	slideshow_interval  : 5000,
	titlespeed	: 1200
});	
	

$("#title_box a img, .image_lightbox img, .widget_thumbnail img, .flickr_wrap img, .similar_posts img").hover(function() {
	$(this).stop().animate({
		opacity: 0.7
	}, 300);
},function() {
	$(this).stop().animate({
		opacity: 1
	}, 500);
});		


$("#soc_book img").hover(function() {
	$(this).stop().animate({
		opacity: 1
	}, 200);
},function() {
	$(this).stop().animate({
		opacity: 0.6
	}, 200);
});	

$("#searchsubmit").hover(function() {
	$(this).stop().animate({
		opacity: 0.5
	}, 300);
},function() {
	$(this).stop().animate({
		opacity: 0.9
	}, 300);
});	

$("a[rel^='prettyPhoto']").prettyPhoto();

$('.jcarousel-skin-tango').jcarousel({
scroll: 1
});


$(".signin").click(function(e) {
    e.preventDefault();
    $("fieldset#signin_menu").toggle();
    $(".signin").toggleClass("menu-open");
    });

    $("fieldset#signin_menu").mouseup(function() {
    return false
    });
    $(document).mouseup(function(e) {
    if($(e.target).parent("a.signin").length==0) {
    $(".signin").removeClass("menu-open");
    $("fieldset#signin_menu").hide();
    }
});    

$(".login").click(function(e) {
    e.preventDefault();
    $("fieldset#login_menu").toggle();
    $(".login").toggleClass("menu-open");
    });

    $("fieldset#login_menu").mouseup(function() {
    return false
    });
    $(document).mouseup(function(e) {
    if($(e.target).parent("a.login").length==0) {
    $(".login").removeClass("menu-open");
    $("fieldset#login_menu").hide();
    }
}); 

$('.slidewrap').carousel({
	slider: '.car_slider',
	slide: '.car_slide',
	slideHed: '.slidehed',
	nextSlide : '.car_next',
	prevSlide : '.car_prev',
});

$("#toggle a").click(function () {
$("#toggle a").toggle();
});	  

$('a[href=#top]').click(function(){
$('html, body').animate({scrollTop:0}, 'slow');
return false;
});
	
});	


(function($){ 
   $(window).load(function(){
   
 // Clone portfolio items to get a second collection for Quicksand plugin
	var $portfolioClone = $(".portfolio").clone();
	
	// Attempt to call Quicksand on every click event handler
	$(".filter a").click(function(e){
		
		$(".filter li").removeClass("current");	
		
		// Get the class attribute value of the clicked link
		var $filterClass = $(this).parent().attr("class");

		if ( $filterClass == "all" ) {
			var $filteredPortfolio = $portfolioClone.find("li");
		} else {
			var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
		}
		
		// Call quicksand
		$(".portfolio").quicksand( $filteredPortfolio, { 
			duration: 1000, 
			easing: 'easeOutQuad' 
		}, function(){

	    });

		$(this).parent().addClass("current");

		// Prevent the browser jump to the link anchor
		e.preventDefault();
	});	  

$('.flexslider_short').flexslider({
slideshow: true,
slideshowSpeed: 4000,         
animationDuration: 700,  
directionNav: true,
controlNav: false, 
});

$(".tags a").hover(function() {
   $(this).animate({ backgroundColor: "#666" }, 200);
},function() {
   $(this).animate({ backgroundColor: "#555" }, 200);
});

$("img.grey").hover(
function() {
$(this).stop().animate({"opacity": "0"}, "slow");
},
function() {
$(this).stop().animate({"opacity": "1"}, "slow");
});	

$("#dyna img[title]").tooltip({
   offset: [10, 2],
   effect: 'slide'
}).dynamic({ bottom: { direction: 'down', bounce: true } });

$(".tip").tipTip({
	maxWidth: "auto", 
	edgeOffset: 10,
	defaultPosition: "top",
});

$("h3.toggler").click(function(){
	$(this).toggleClass("active").next(".toggle_container").slideToggle("fast");
});
	
$('.myToggler').click(function(e){
	$(this).next().slideToggle();
	var sign=$(this).children(':first');
	sign.text(sign.text() == '\uff0b'?'\uff0d':'\uff0b');
	e.preventDefault;
});	
	
$('.su-tabs-nav').delegate('span:not(.su-tabs-current)', 'click', function() {
	$(this).addClass('su-tabs-current').siblings().removeClass('su-tabs-current')
	.parents('.su-tabs').find('.su-tabs-pane').hide().eq($(this).index()).fadeIn('normal');
});
$('.su-tabs-pane').hide();
$('.su-tabs-nav span:first-child').addClass('su-tabs-current');
$('.su-tabs-panes .su-tabs-pane:first-child').show();

$('.acc_container').hide(); 

$('.acc_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { 
		$('.acc_trigger').removeClass('active').next().slideUp();
		$(this).toggleClass('active').next().slideDown(); 
	}
	return false; 
});

$("#home_gallery").PikaChoose({
autoPlay:true, 
speed: 3000,
thumbOpacity:0.7
});
	
})
})(jQuery);
