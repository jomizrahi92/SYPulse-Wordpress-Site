/* WPtouch Pro Classic iPad JS */
/* This file holds all the default jQuery & Ajax functions for the classic theme on iPad */
/* Description: JavaScript for the Classic theme on iPad */
/* Required jQuery version: 1.6+ */

var WPtouchWebApp = navigator.standalone;

/* For debugging Web-App mode in a browser */
//var WPtouchWebApp = true;

/* see http://cubiq.org/add-to-home-screen for additional information */
var addToHomeConfig = {
	startDelay: 550,								// milliseconds
	lifespan: 1000*60,							// milliseconds  (set to: 30 secs)
	expire: 60*24*WPtouch.expiryDays,	// minutes (set in admin settings)
	animationIn: 'drop',
	animationOut: 'bubble',
	touchIcon: true,
	message: WPtouch.add2home_message
};

/* Try to get out of frames! */
if ( window.top != window.self ) { 
	window.top.location = self.location.href
}

/* If it's iPad, use touchstart, in desktop browser, use click (touchstart/end is faster on iOS) */
if ( typeof ontouchstart != 'undefined' && typeof ontouchend != 'undefined' ) { 
	var touchStartOrClick = 'touchstart'; 
	var touchEndOrClick = 'touchend'; 
} else {
	var touchStartOrClick = 'click'; 
	var touchEndOrClick = 'click'; 
};

function doClassiciPadReady() {

	/* Prevent default touchmove function for iScrolls */	
	if ( hasFixedPos() ) {
		var staticElements = jQuery( '#wptouch-header, #logo-area, .popover header' ); // these elements will not trigger a touchmove event
		staticElements.bind( 'touchmove', function( e ){ e.preventDefault(); } );
	} else {
		document.addEventListener( 'touchmove', function( e ){ e.preventDefault(); }, false );

		/* Fix for select elements on iOS 4.3.2 */		
		var formElements = jQuery( 'select, input, textarea' );
		formElements.bind( touchStartOrClick, function( e ) { e.stopPropagation(); } );	
	}

	/* Add the orientation event listener */	
	window.addEventListener( 'orientationchange', function() {
		classicUpdateOrientation();
	});

	/* Menubar Button Left Popover Triggers */	
	jQuery( '.head-left' ).find( 'div.menubar-button' ).bind( touchEndOrClick, function(){
		var popoverName = '#pop-' + jQuery( this ).attr( 'id' );
		var linkOffset = jQuery( this ).offset();
		jQuery( popoverName ).css({
			top: '40px',
			left: linkOffset.left + 'px'
		}).popOverToggle();
		jQuery( popoverName + ' .menu-pointer-arrow' ).css( 'left', '20px' );
		headerDismissSpan();
		scrollerRefresh();
	});
	
	/* Menubar Button Right Popover Triggers */	
	jQuery( '.head-right' ).find( 'div.menubar-button' ).bind( touchEndOrClick, function() {
		var popoverName = '#pop-' + jQuery( this ).attr( 'id' );
		var linkOffset = jQuery( this ).offset();
		jQuery( popoverName ).css({
			top: '40px',
			left: linkOffset.left - jQuery( popoverName ).width() / 1.45
		}).popOverToggle();
		jQuery( popoverName + ' .menu-pointer-arrow' ).css( 'right', '58px' );
		headerDismissSpan();
		scrollerRefresh();
	});
	
	/*  Tap the menubar to scroll the main content to top on pre-hasFixedPos */	
	if ( !hasFixedPos() ) {
		jQuery( '.head-center h1' ).bind( touchStartOrClick, function() {
			var homeScroller = jQuery( '#iscroll-wrapper' ).data( 'scroller' );
			homeScroller.scrollTo( 0, 0, 500 );
		});
	}

	/*  Menubar Blog PopOver Inner Tabs */
	jQuery( function() {
	    var tabContainers = jQuery( '#pop-blog > div' );
		var innerTabs = jQuery( 'ul.menu-tabs' ).find( 'a' );

	    innerTabs.bind( touchStartOrClick, function( e ) {
	        tabContainers.hide().filter( this.rel ).show();
	    	innerTabs.removeClass( 'selected' );
	   		jQuery( this ).addClass( 'selected' );
			e.preventDefault();
			scrollerRefresh();
	  	  }).filter( ':first' ).trigger( touchStartOrClick );
	});

	/* Add highlights to a popover and menu links when clicked */
		jQuery( '#popovers-container .pop-inner li a, #pages-wrapper a' ).live( 'click', function() {
			jQuery( this ).parent().toggleClass( 'highlight' );
		});

	/* .active styling to mimic default iOS functionality */
	var touchDivs = '.wptouch-button, .content a, .title-area a, .footer a, ol.commentlist a';
		jQuery( touchDivs ).live( touchStartOrClick, function() {
			jQuery( this ).addClass( 'active' );
		}).live( touchEndOrClick, function() {
			jQuery( this ).removeClass( 'active' );
		});
	
	/* Page menu: Hide the Child ULs */
	jQuery( '#pages-wrapper' ).find( 'li.has_children ul' ).hide();

	/* Page menu: Filter parent link href's and make them toggles for thier children */
	jQuery( '#pages-wrapper ul li.has_children > a' ).unbind( 'click' ).bind( 'click', function() {
		jQuery( this ).next().webkitSlideToggle( 350 );
		jQuery( this ).toggleClass( 'arrow-toggle' );
		jQuery( this ).parent().toggleClass( 'open-tree' );
		scrollerRefresh();
		return false;
	});
	
	/* Single post page share popover */	
	jQuery( 'a.share-post' ).unbind( 'click' ).bind( 'click', function() {
		var linkOffset = jQuery( this ).offset();
			jQuery( '#share-popover' ).css({
				top: linkOffset.top - 260 + 'px',
				left: linkOffset.left -	 25 + 'px',
				}).fadeIn( 350 );
		headerDismissSpan();
		return false;
	});
	
	/*  On single posts and pages, move the comments to the fly-in box */
	jQuery( '#respond' ).detach().appendTo( '.comment-reply-box .pop-inner' ).css( 'display', 'block' );
	jQuery( '#share-placeholder' ).detach().appendTo( '#share-popover' ).css( 'display', 'block' );

	jQuery( '.leave-a-comment, span.comments-close-button' ).unbind( 'click' ).bind( 'click', function() {
		jQuery( '.comment-reply-box' ).toggleClass( 'fly-in' ).flyInToggle();
		jQuery( 'input#comment_parent' ).val( '0' );
		jQuery( '#box-head h3' ).html( WPtouch.leave_a_comment );
		jQuery( '#peek' ).hide();
		jQuery( '#container1 textarea' ).removeClass( 'reply' );
		jQuery('#commentform input, #commentform textarea').blur();
		return false;
	});

	/* Peek in Comment Reply */
	jQuery( '#peek' ).unbind( 'click' ).bind( 'click', function() {
		jQuery( '#container1' ).toggleClass( 'slide' );
		jQuery( '#container2' ).toggleClass( 'slide2' );
		return false;
	});
  
	/* Log In To Comment Trigger */
  	jQuery( 'a.comment-reply-login, a.reply-to-comment' ).unbind( 'click' ).bind( touchStartOrClick, function() {
		jQuery( '#account.menubar-button' ).trigger( touchEndOrClick );
		return false;
	});	

	/* Try to make imgs and captions nicer in posts (images and caption larger than 350px get aligncenter)  */	
	if ( jQuery( '.post' ).length ) {
		jQuery( '.content img, .content .wp-caption' ).each( function() {
			if ( jQuery( this ).width() >= 350 ) {
				jQuery( this ).addClass( 'aligncenter' );
			}
		});
	}

	/*  Make sure the menubar stays present when form textareas are out of focus (non-iOS 5) */	
	if ( !hasFixedPos() ) {
		jQuery( 'textarea, form#prowl-direct-message input, form#loginform input, .content input' ).bind( 'blur', function() {
			scrollTo( 0, 0, 100 );
		});
	}
	
	/* Instapaper Share Hookup */
	jQuery( 'li#instapaper' ).find( 'a' ).click( function() {
		var userName = prompt( WPtouch.instapaper_username, '' );
		if ( userName ) {
			var passWord = prompt( WPtouch.instapaper_password, '' );
			if ( !passWord ) {
				passWord = 'default';	
			}
			
			var ajaxParams = {
				url: document.location.href,
				username: userName,
				password: passWord,
				title: document.title
			};
			
			WPtouchAjax( 'instapaper', ajaxParams, function( result ) {
				if ( result == '1' ) {
					alert( WPtouch.instapaper_saved );
					jQuery( '#share-popover' ).fadeOut( 350 );
				} else {
					alert( WPtouch.instapaper_try_again );
				}
			});
		}
		return false;
	});

	/* Ajaxify commentform */
	var postURL = document.location;
	var textarea = jQuery( '#container1 textarea' );
	var CommentFormOptions = {
		beforeSubmit: function() {
			jQuery( '#container1' ).append( '<div id="comment-spinner"></div>' );
		},
		success: function() {
			jQuery( 'ol.commentlist' ).load( postURL + ' ol.commentlist > li', function(){ 
				jQuery( '#comment-spinner' ).remove();
				textarea.addClass( 'success' );			
				commentReplyLinks();
			});
			setTimeout( function() { 
				jQuery( '.comments-close-button' ).trigger( 'click' );
				textarea.removeClass( 'success' );
				scrollerRefresh();
			}, 1500 );
		},
		error: function() {
		jQuery( '#comment-spinner' ).remove();
			textarea.addClass( 'error' );
			jQuery( '#container1' ).prepend( '<div id="error-text">' + WPtouch.comment_failure +'</div>' );
			setTimeout( function () { 
				textarea.removeClass( 'error' );
				jQuery( '#error-text' ).remove();
			}, 3000 );
		},
		resetForm: true,
		timeout:   7500
	} 	//end options
	
	
	if ( jQuery.isFunction( jQuery.fn.ajaxForm ) ) {
		jQuery( '#commentform' ).ajaxForm( CommentFormOptions );
	}

	/* Ajaxify Prowl Form */
	var messageTextarea = jQuery( '#prowl-direct-message textarea' );
	var prowlFormOptions = {
		beforeSubmit: function formValidate( formData, jqForm, options ) { 
				for ( var i=0; i < formData.length; i++ ) { 
					if ( !formData[i].value ) { 
						alert( WPtouch.validation_message ); 
						return false; 
					}
				jQuery( '#prowl-direct-message' ).find( 'p' ).prepend( '<div id="prowl-spinner"></div>' );
				}
		},
		success: function() {
		jQuery( '#prowl-spinner' ).remove();
			messageTextarea.addClass( 'success' );
			setTimeout( function () { 
				jQuery( '#message' ).trigger( touchEndOrClick );
				messageTextarea.removeClass( 'success' );
			}, 1000 );
		},
		error: function() {
		jQuery( '#prowl-spinner' ).remove();
			messageTextarea.addClass( 'error' );
			jQuery( '#prowl-direct-message' ).prepend( '<div id="prowl-error-text">' + WPtouch.prowl_failure +'</div>' );
			setTimeout( function () { 
				messageTextarea.removeClass( 'error' );
				jQuery( '#prowl-error-text' ).remove();
			}, 4000 );
		},
		resetForm: true,
		timeout:   3500
	} 	//end options
	
	if ( jQuery.isFunction( jQuery.fn.ajaxForm ) ) {
		jQuery( '#prowl-direct-message' ).ajaxForm( prowlFormOptions );
	}

	/* Refresh the main iScroll when all page items are loaded */	
	jQuery( window ).load( function() {
		var welcomeMessage = jQuery( '#welcome-message' );
		if ( welcomeMessage.length ) { 
			welcomeMessage.show();
		}
		setTimeout( function() { scrollerRefresh(); }, 0 );
	});
	
	/* Set tabindex automagically */
	jQuery( function(){
	var tabindex = 1;
		jQuery( 'input, select, textarea' ).each( function() {
			if ( this.type != 'hidden' ) {
				var inputToTab = jQuery( this );
				inputToTab.attr( 'tabindex', tabindex );
				tabindex++;
			}
		});
	});
	
	/* New Toggle Switch JS */
	var onLabel = WPtouch.toggle_on;
	jQuery( '.on' ).text( onLabel );
	
	var offLabel = WPtouch.toggle_off;
	jQuery( '.off' ).text( offLabel );
	
	jQuery( '#switch' ).find( 'div' ).bind( touchEndOrClick, function(){ 
		var switchURL = jQuery( this ).attr( 'title' );
		jQuery( '.on' ).toggleClass( 'active' );
		jQuery( '.off' ).toggleClass( 'active' );
		setTimeout( function () { window.location = switchURL }, 500 );
		return false;
	});
	
	/* Functions to run onReady */
	classicUpdateOrientation();
	loadMoreEntries();
	commentReplyLinks();
	loadMoreComments();
	welcomeMessage();
	webAppLinks();
	webAppOnly();
	setupScrolls();
	classicHandleShortcodes();
}
/* End Document Ready */

/* Setup iScrolls */
function setupScrolls(){
	if ( !hasFixedPos() ) {
		jQuery( '.iscroller' ).each( function(){
			var scroller = jQuery( this ).attr( 'id' );
			activeScroller = new iScroll( scroller );
			jQuery( this ).data( 'scroller', activeScroller );
		});
	}
}

function scrollerRefresh() {
	if ( !hasFixedPos() ) {
			var currentScroller = jQuery( '.iscroller' ).filter( ':visible' ).data( 'scroller' );
			var homeScroller = jQuery( '#iscroll-wrapper' ).data( 'scroller' );
		setTimeout( function() { 
			currentScroller.refresh(); 
			homeScroller.refresh();
		}, 0 );
	} else {
		return true; // continue on
	}
}

/* Detect orientation and do some Voodoo with the menubar's menu */
function classicUpdateOrientation() {	
	var windowHeight = jQuery( window ).height() - 44;
	var imageHeight = jQuery( '#logo-area' ).height();
	var menuHeight = windowHeight - imageHeight;
	var orientationCookie = WPtouchReadCookie( 'wptouch-ipad-orientation' );
	switch( window.orientation ) {
		// Portrait
		case 0:
		case 180:
			jQuery( 'body' ).removeClass( 'landscape' ).addClass( 'portrait' );
			jQuery( '#iscroll-wrapper' ).css( 'height', windowHeight );
			jQuery( '#main-menu #pages-wrapper' ).detach().appendTo( '#pop-menu .pop-inner' ).css( 'height', 'auto' ).css( 'max-height', '500px' );
			jQuery( '.popover.open' ).each( function() { jQuery( this ).removeClass( 'open' ).hide(); });
			WPtouchCreateCookie( 'wptouch-ipad-orientation', 'portrait', 365 );
			handleVids();
		break;
		// Landscape & Browsers
		case 90:
		case -90:
		default:
			jQuery( 'body' ).removeClass( 'portrait' ).addClass( 'landscape' );
			jQuery( '#iscroll-wrapper' ).css( 'height', windowHeight );
			jQuery( '#pages-wrapper' ).detach().css( 'height', menuHeight ).css( 'max-height', 'none' ).appendTo( '#main-menu' );
			jQuery( '.popover.open' ).each( function() { jQuery( this ).removeClass( 'open' ).hide(); });
			WPtouchCreateCookie( 'wptouch-ipad-orientation', 'landscape', 365 );
			handleVids();
	}
	if ( !hasFixedPos() ) {
		setTimeout( function() { 
			var homeScroller = jQuery( '#iscroll-wrapper' ).data( 'scroller' );
			homeScroller.refresh();
		}, 550 );
	}
}

/* Create a dismiss span that will reverse open popovers when triggered */
function headerDismissSpan() {
	if ( !jQuery( '#dismiss-underlay' ).length ) {
		jQuery( 'body' ).append( '<span id="dismiss-underlay"></span>' );
		jQuery( '#dismiss-underlay' ).bind( touchStartOrClick, function( e ) {
			jQuery( this ).remove();
			jQuery( '#popovers-container .popover.open' ).removeClass( 'open' ).fadeOut( 350 );
			jQuery( '#share-popover' ).fadeOut( 350 );
			return false;
		});
	} else {
		jQuery( '#dismiss-underlay' ).remove();	
	}
}

function classicHandleShortcodes() {
	// For web application mode
	if ( WPtouchWebApp ) {
		var webAppDivs = jQuery( '.wptouch-shortcode-webapp-only' );
		if ( webAppDivs.length ) {
			webAppDivs.show();
		}
	}
}

function loadMoreEntries() {
	var loadMoreLink = jQuery( 'a.load-more-link' );
	var ajaxDiv = '.ajax-page-target';
	if ( loadMoreLink.length ) {
		loadMoreLink.unbind( 'click' ).live( 'click', function() {
			jQuery( 'a.load-more-link span' ).addClass( 'ajax-spinner' );
			var loadMoreURL = jQuery( this ).attr( 'href' );
			jQuery( '#content' ).append( "<div class='ajax-page-target'></div>" );
			jQuery( ajaxDiv ).hide().load( loadMoreURL + ' #content .post, #content .load-more-link', function() {
				jQuery( this ).replaceWith( jQuery( this ).html() );	
				jQuery( 'span.ajax-spinner' ).parent().fadeOut( 350 );
				webAppLinks();
				scrollerRefresh();
				handleVids();
			});
			return false;
		});	
	}	
}

/* Load More Comments */
function loadMoreComments() {
	var loadMoreLink = jQuery( 'ol.commentlist li.load-more-comments-link a' );
	if ( loadMoreLink.length ) {
		loadMoreLink.unbind( 'click' ).live( 'click', function() {
			var loadMoreURL = jQuery( this ).attr( 'href' );
			jQuery( this ).addClass( 'ajax-spinner' ).delay( 1250 ).fadeOut( 350 );
			jQuery( 'ol.commentlist' ).append( "<div class='ajax-page-target'></div>" );

			jQuery( 'div.ajax-page-target' ).hide().load( loadMoreURL + ' ol.commentlist > li', function() {
				jQuery( this ).replaceWith( jQuery( this ).html() );	
				commentReplyLinks();
				webAppLinks();
				scrollerRefresh();
			});
			return false;
		});	
	}	
}

/* Comment Reply Gravy - Not perfect yet  */	
function commentReplyLinks() {
	jQuery( '.commentlist a.comment-reply-link' ).bind( touchStartOrClick, function() {
		var CommentID = jQuery( this ).closest( 'li.comment' ).attr( 'ID' );
		var CommenterName = jQuery( '#' + CommentID ).find( 'span.fn:first' ).text();
		var PostID = jQuery( '.commentlist ol' ).attr( 'ID' );
		var CommentContent = jQuery( 'li#' + CommentID + ' .comment-content:first > p' ).text();

		jQuery( '.comment-reply-box' ).addClass( 'fly-in' ).flyInToggle();		
		jQuery( '#box-head h3' ).html( WPtouch.leave_a_reply + ' <span>' + CommenterName + '</span>');
		jQuery( '#peek' ).show();
		jQuery( 'input#comment_parent' ).val( CommentID );
		jQuery( '#container1 textarea' ).addClass( 'reply' );
		jQuery( '#container2' ).html( CommentContent );
		return false;
	});
}

function webAppLinks() {
	if ( WPtouchWebApp ) {
		// The New Sauce ( Nobody makes tasty gravy like mom )		
		// bind to all links, except UI controls and such
		var webAppLinks = jQuery( 'a' ).not( 
			'.no-ajax, .email a, .wptouch-button, .comment-buttons a, ul.menu-tabs a, #pages-wrapper .has_children > a, a.load-more-link, .load-more-comments-link a, #share-popover a, .GTTabs a' );

 		webAppLinks.each( function(){
			var targetUrl = jQuery( this ).attr( 'href' ); 		
			var targetLink = jQuery( this );
			var localDomain = location.protocol + '//' + location.hostname;
			var rootDomain = location.hostname.split( '.' );
			var masterDomain = rootDomain[1] + '.' + rootDomain[2];

			// link is local, but set to be non-mobile
			if ( typeof wptouch_ignored_urls != 'undefined' ) {
			   jQuery.each( wptouch_ignored_urls, function( i, value ) {
			       if ( targetUrl.match( value ) ) {
						targetLink.addClass( 'ignored' );
			       }
			   });
			}

		   // filetypes, images class name additions
	       if ( targetUrl.match( ( /[^\s]+(\.(pdf|numbers|pages|xls|xlsx|doc|docx|zip|tar|gz|csv|txt))$/i ) ) ) {
				targetLink.addClass( 'external' );
	       } else if ( targetUrl.match( ( /[^\s]+(\.(jpg|jpeg|gif|png|bmp|tiff))$/i ) ) ) {
				targetLink.addClass( 'img-link' );
	       }

			jQuery( targetLink ).unbind( 'click' ).bind( 'click', function( e ) {
				// is this an external link? Confirm to leave WAM
				if ( jQuery( targetLink ).hasClass( 'external' ) || jQuery( targetLink ).parent( 'li' ).hasClass( 'external' ) ) {
			       	confirmForExternal = confirm( WPtouch.external_link_text + ' \n' + WPtouch.open_browser_text );
					if ( confirmForExternal ) {
						return true;
					} else {			
						e.preventDefault();
						e.stopImmediatePropagation();
					}
				// prevent images with links to larger ones from opening in web-app mode
				} else if ( jQuery( targetLink ).hasClass( 'img-link' ) ) {
					return false;

				// local http link or no http present: 
				} else if ( targetUrl.match( localDomain ) || !targetUrl.match( 'http://' ) ) {
					// make sure it's not in the ignored list first
					if ( jQuery( targetLink ).hasClass( 'ignored' ) || jQuery( targetLink ).parent( 'li' ).hasClass( 'ignored' ) ) {
				       	confirmForExternal = confirm( WPtouch.wptouch_ignored_text + ' \n' + WPtouch.open_browser_text );
							if ( confirmForExternal ) {
								return true;	
							} else {
								return false;
							}
					// okay, it's passed the tests, this is a local link, fire WAM
					} else {
						WPtouchCreateCookie( 'wptouch-load-last-url', targetUrl, 365 );
						window.location = targetUrl;  
						e.preventDefault();
					} 
				// not local, not ignored, doesn't have no-ajax but it's got an external http domain url
				} else {
			       	confirmForExternal = confirm( WPtouch.external_link_text + ' \n' + WPtouch.open_browser_text );
					if ( confirmForExternal ) {
						return true;
					} else {			
						return false;
					}					
				}
			}); /* end click bindings */
		}); /* end .each loop */
	} else {
		// Do non web-app setup
		jQuery( 'li.target a' ).attr( 'target', '_blank' );
	}
}

function webAppOnly() {
	if ( WPtouchWebApp ) {
		var persistenceOn = jQuery( 'body.loadsaved' ).length;
		jQuery( 'body' ).addClass( 'web-app' );
		jQuery( '#account-link-area, #switch, #welcome-message' ).remove();
		if ( !persistenceOn ) {
			WPtouchEraseCookie( 'wptouch-load-last-url' );
		}
		/* prevent images with links to larger ones from opening in web-app mode */
		jQuery( '.post a' ).has( 'img' ).each( function(){ 
			jQuery( this ).click( function( e ) {
		  		var imgURL = jQuery( this ).attr( 'href' );
				if ( imgURL.match( '.jpg' ) || imgURL.match( '.png' ) || imgURL.match( '.jpeg' ) || imgURL.match( '.gif' ) ) {
					e.preventDefault();
					e.stopImmediatePropagation();
				}
			});
		});
	}
}

function welcomeMessage() {
	if ( !WPtouchWebApp ) {	
		jQuery( 'a#close-msg' ).unbind( 'click' ).bind( 'click', function() {
			WPtouchCreateCookie( 'wptouch_welcome', '1', 365 );
			jQuery( '#welcome-message' ).fadeOut( 350 );
			return false;
		});
	}
}

/* New jQuery function popOverToggle() for popover windows */
jQuery.fn.popOverToggle = function() { 
	if ( !this.hasClass( 'open' ) ) {
		this.show().addClass( 'open' );
	} else {
		this.removeClass( 'open' ).fadeOut( 350 );
	}
}

/* New jQuery function flyInToggle() for Message/Comment Windows */
jQuery.fn.flyInToggle = function() { 
//	var boxHeight = this.height() + 150;
	if ( this.hasClass( 'fly-in' ) ) {
		this.viewportCenter().css('-webkit-transform', 'scale(1)' ).css( 'opacity', '1' ).css( '-webkit-transition', '350ms' );
	} else {
		this.viewportCenter().css('-webkit-transform', 'scale(0)' ).css( 'opacity', '0' ).css( '-webkit-transition', '350ms' );
	}
}

/* New jQuery function viewportCenter() */
jQuery.fn.viewportCenter = function() {
    this.css( 'position', 'absolute' );
    this.css( 'top', ( ( jQuery( window ).height() - this.outerHeight() ) / 2 ) + jQuery( window ).scrollTop() + 'px' );
    this.css( 'left', ( ( jQuery( window ).width() - this.outerWidth() ) / 2 ) + jQuery( window ).scrollLeft() + 'px' );
	this.show();
    return this;
}

/* New jQuery function webkitSlideToggle() */
jQuery.fn.webkitSlideToggle = function() { 
	if ( !this.hasClass( 'slide-in' ) ) {
		this.show().addClass( 'slide-in' );
	} else {
		this.slideUp( 350 ).removeClass( 'slide-in' );
	}
}

function handleVids() {
	/* add dynamic automatic video resizing via fitVids or CoyierVids (if enabled) */

	if ( jQuery.isFunction( jQuery.fn.fitVids ) ) {	
		jQuery( '.content' ).fitVids();
	}
	
	if ( typeof window.coyierVids == 'function' ) {
		coyierVids();
	}
	
	/* If we have html5 videos, add controls for them if they're not specified */
	if ( jQuery( 'video' ).length ) {
		jQuery( 'video' ).attr( 'controls', 'controls' );
	}
}

/* Find out if it's iOS5+ */
function hasFixedPos() {
	return '-webkit-overflow-scrolling' in document.body.style;	
}

/* Cookie Functions */

function WPtouchCreateCookie( name, value, days ) {
	if ( days ) {
		var date = new Date();
		date.setTime( date.getTime() + ( days*24*60*60*1000 ) );
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path="+WPtouch.siteurl;
}

function WPtouchReadCookie( name ) {
	var nameEQ = name + "=";
	var ca = document.cookie.split( ';' );
	for( var i=0;i < ca.length;i++ ) {
		var c = ca[i];
		while ( c.charAt(0)==' ' ) c = c.substring( 1, c.length );
		if ( c.indexOf( nameEQ ) == 0 ) return c.substring( nameEQ.length, c.length );
	}
	return null;
}

function WPtouchEraseCookie( name ) {
	WPtouchCreateCookie( name,"",-1 );
}

jQuery( document ).ready( function() { doClassiciPadReady(); } );