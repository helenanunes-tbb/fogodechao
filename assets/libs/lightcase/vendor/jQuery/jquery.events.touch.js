/*
* jQuery Mobile v1.5.0-alpha.1
* https://jquerymobile.com
*
* Copyright jQuery Foundation, Inc. and other contributors
* Released under the MIT license.
* https://jquery.org/license
*
*/

(function ( root, doc, factory ) {
	if ( typeof define === "function" && define.amd ) {
		// AMD. Register as an anonymous module.
		define( [ "jquery" ], function ( $ ) {
			factory( $, root, doc );
			return $.mobile;
		});
	} else {
		// Browser globals
		factory( root.jQuery, root, doc );
	}
}( this, document, function ( jQuery, window, document, undefined ) {/*!
 * jQuery Mobile Namespace @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Namespace
//>>group: Core
//>>description: The mobile namespace on the jQuery object

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'ns',[ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

$.mobile = { version: "@VERSION" };

return $.mobile;
} );

/*!
 * jQuery Mobile Defaults @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Defaults
//>>group: Core
//>>description: Default values for jQuery Mobile
//>>css.structure: ../css/structure/jquery.mobile.core.css
//>>css.theme: ../css/themes/default/jquery.mobile.theme.css

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'defaults',[
			"jquery",
			"./ns" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

return $.extend( $.mobile, {

	hideUrlBar: true,

	// Keepnative Selector
	keepNative: ":jqmData(role='none'), :jqmData(role='nojs')",

	// Automatically handle clicks and form submissions through Ajax, when same-domain
	ajaxEnabled: true,

	// Automatically load and show pages based on location.hash
	hashListeningEnabled: true,

	// disable to prevent jquery from bothering with links
	linkBindingEnabled: true,

	// Set default page transition - 'none' for no transitions
	defaultPageTransition: "fade",

	// Set maximum window width for transitions to apply - 'false' for no limit
	maxTransitionWidth: false,

	// Set default dialog transition - 'none' for no transitions
	defaultDialogTransition: "pop",

	// Error response message - appears when an Ajax page request fails
	pageLoadErrorMessage: "Error Loading Page",

	// For error messages, which theme does the box use?
	pageLoadErrorMessageTheme: "a",

	// replace calls to window.history.back with phonegaps navigation helper
	// where it is provided on the window object
	phonegapNavigationEnabled: false,

	//automatically initialize the DOM when it's ready
	autoInitializePage: true,

	pushStateEnabled: true,

	// allows users to opt in to ignoring content by marking a parent element as
	// data-ignored
	ignoreContentEnabled: false,

	// default the property to remove dependency on assignment in init module
	pageContainer: $(),

	//enable cross-domain page support
	allowCrossDomainPages: false,

	dialogHashKey: "&ui-state=dialog"
} );
} );

/*!
 * jQuery Mobile Data @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: jqmData
//>>group: Core
//>>description: Mobile versions of Data functions to allow for namespaceing
//>>css.structure: ../css/structure/jquery.mobile.core.css
//>>css.theme: ../css/themes/default/jquery.mobile.theme.css

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'data',[
			"jquery",
			"./ns" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var nsNormalizeDict = {},
	oldFind = $.find,
	rbrace = /(?:\{[\s\S]*\}|\[[\s\S]*\])$/,
	jqmDataRE = /:jqmData\(([^)]*)\)/g;

$.extend( $.mobile, {

	// Namespace used framework-wide for data-attrs. Default is no namespace

	ns: $.mobileBackcompat === false ? "ui-" : "",

	// Retrieve an attribute from an element and perform some massaging of the value

	getAttribute: function( element, key ) {
		var data;

		element = element.jquery ? element[ 0 ] : element;

		if ( element && element.getAttribute ) {
			data = element.getAttribute( "data-" + $.mobile.ns + key );
		}

		// Copied from core's src/data.js:dataAttr()
		// Convert from a string to a proper data type
		try {
			data = data === "true" ? true :
				data === "false" ? false :
					data === "null" ? null :
						// Only convert to a number if it doesn't change the string
						+data + "" === data ? +data :
							rbrace.test( data ) ? window.JSON.parse( data ) :
								data;
		} catch ( err ) {}

		return data;
	},

	// Expose our cache for testing purposes.
	nsNormalizeDict: nsNormalizeDict,

	// Take a data attribute property, prepend the namespace
	// and then camel case the attribute string. Add the result
	// to our nsNormalizeDict so we don't have to do this again.
	nsNormalize: function( prop ) {
		return nsNormalizeDict[ prop ] ||
			( nsNormalizeDict[ prop ] = $.camelCase( $.mobile.ns + prop ) );
	},

	// Find the closest javascript page element to gather settings data jsperf test
	// https://jsperf.com/single-complex-selector-vs-many-complex-selectors/edit
	// possibly naive, but it shows that the parsing overhead for *just* the page selector vs
	// the page and dialog selector is negligable. This could probably be speed up by
	// doing a similar parent node traversal to the one found in the inherited theme code above
	closestPageData: function( $target ) {
		return $target
			.closest( ":jqmData(role='page'), :jqmData(role='dialog')" )
				.data( "mobile-page" );
	}

} );

// Mobile version of data and removeData and hasData methods
// ensures all data is set and retrieved using jQuery Mobile's data namespace
$.fn.jqmData = function( prop, value ) {
	var result;
	if ( typeof prop !== "undefined" ) {
		if ( prop ) {
			prop = $.mobile.nsNormalize( prop );
		}

		// undefined is permitted as an explicit input for the second param
		// in this case it returns the value and does not set it to undefined
		if ( arguments.length < 2 || value === undefined ) {
			result = this.data( prop );
		} else {
			result = this.data( prop, value );
		}
	}
	return result;
};

$.jqmData = function( elem, prop, value ) {
	var result;
	if ( typeof prop !== "undefined" ) {
		result = $.data( elem, prop ? $.mobile.nsNormalize( prop ) : prop, value );
	}
	return result;
};

$.fn.jqmRemoveData = function( prop ) {
	return this.removeData( $.mobile.nsNormalize( prop ) );
};

$.jqmRemoveData = function( elem, prop ) {
	return $.removeData( elem, $.mobile.nsNormalize( prop ) );
};

$.find = function( selector, context, ret, extra ) {
	if ( selector.indexOf( ":jqmData" ) > -1 ) {
		selector = selector.replace( jqmDataRE, "[data-" + ( $.mobile.ns || "" ) + "$1]" );
	}

	return oldFind.call( this, selector, context, ret, extra );
};

$.extend( $.find, oldFind );

return $.mobile;
} );

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'jquery-ui/version',[ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} ( function( $ ) {

$.ui = $.ui || {};

return $.ui.version = "1.12.1";

} ) );

/*!
 * jQuery UI Keycode 1.12.1
 * https://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Keycode
//>>group: Core
//>>description: Provide keycodes as keynames
//>>docs: https://api.jqueryui.com/jQuery.ui.keyCode/

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'jquery-ui/keycode',[ "jquery", "./version" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} ( function( $ ) {
return $.ui.keyCode = {
	BACKSPACE: 8,
	COMMA: 188,
	DELETE: 46,
	DOWN: 40,
	END: 35,
	ENTER: 13,
	ESCAPE: 27,
	HOME: 36,
	LEFT: 37,
	PAGE_DOWN: 34,
	PAGE_UP: 33,
	PERIOD: 190,
	RIGHT: 39,
	SPACE: 32,
	TAB: 9,
	UP: 38
};

} ) );

/*!
 * jQuery Mobile Helpers @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Helpers
//>>group: Core
//>>description: Helper functions and references
//>>css.structure: ../css/structure/jquery.mobile.core.css
//>>css.theme: ../css/themes/default/jquery.mobile.theme.css

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'helpers',[
			"jquery",
			"./ns",
			"jquery-ui/keycode" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

// Subtract the height of external toolbars from the page height, if the page does not have
// internal toolbars of the same type. We take care to use the widget options if we find a
// widget instance and the element's data-attributes otherwise.
var compensateToolbars = function( page, desiredHeight ) {
	var pageParent = page.parent(),
		toolbarsAffectingHeight = [],

		// We use this function to filter fixed toolbars with option updatePagePadding set to
		// true (which is the default) from our height subtraction, because fixed toolbars with
		// option updatePagePadding set to true compensate for their presence by adding padding
		// to the active page. We want to avoid double-counting by also subtracting their
		// height from the desired page height.
		noPadders = function() {
			var theElement = $( this ),
				widgetOptions = $.mobile.toolbar && theElement.data( "mobile-toolbar" ) ?
					theElement.toolbar( "option" ) : {
						position: theElement.attr( "data-" + $.mobile.ns + "position" ),
						updatePagePadding: ( theElement.attr( "data-" + $.mobile.ns +
								"update-page-padding" ) !== false )
					};

			return !( widgetOptions.position === "fixed" &&
				widgetOptions.updatePagePadding === true );
		},
		externalHeaders = pageParent.children( ":jqmData(type='header')" ).filter( noPadders ),
		internalHeaders = page.children( ":jqmData(type='header')" ),
		externalFooters = pageParent.children( ":jqmData(type='footer')" ).filter( noPadders ),
		internalFooters = page.children( ":jqmData(type='footer')" );

	// If we have no internal headers, but we do have external headers, then their height
	// reduces the page height
	if ( internalHeaders.length === 0 && externalHeaders.length > 0 ) {
		toolbarsAffectingHeight = toolbarsAffectingHeight.concat( externalHeaders.toArray() );
	}

	// If we have no internal footers, but we do have external footers, then their height
	// reduces the page height
	if ( internalFooters.length === 0 && externalFooters.length > 0 ) {
		toolbarsAffectingHeight = toolbarsAffectingHeight.concat( externalFooters.toArray() );
	}

	$.each( toolbarsAffectingHeight, function( index, value ) {
		desiredHeight -= $( value ).outerHeight();
	} );

	// Height must be at least zero
	return Math.max( 0, desiredHeight );
};

$.extend( $.mobile, {
	// define the window and the document objects
	window: $( window ),
	document: $( document ),

	// TODO: Remove and use $.ui.keyCode directly
	keyCode: $.ui.keyCode,

	// Place to store various widget extensions
	behaviors: {},

	// Custom logic for giving focus to a page
	focusPage: function( page ) {

		// First, look for an element explicitly marked for page focus
		var focusElement = page.find( "[autofocus]" );

		// If we do not find an element with the "autofocus" attribute, look for the page title
		if ( !focusElement.length ) {
			focusElement = page.find( ".ui-title" ).eq( 0 );
		}

		// Finally, fall back to focusing the page itself
		if ( !focusElement.length ) {
			focusElement = page;
		}

		focusElement.focus();
	},

	// Scroll page vertically: scroll to 0 to hide iOS address bar, or pass a Y value
	silentScroll: function( ypos ) {

		// If user has already scrolled then do nothing
		if ( $.mobile.window.scrollTop() > 0 ) {
			return;
		}

		if ( $.type( ypos ) !== "number" ) {
			ypos = $.mobile.defaultHomeScroll;
		}

		// prevent scrollstart and scrollstop events
		$.event.special.scrollstart.enabled = false;

		setTimeout( function() {
			window.scrollTo( 0, ypos );
			$.mobile.document.trigger( "silentscroll", { x: 0, y: ypos } );
		}, 20 );

		setTimeout( function() {
			$.event.special.scrollstart.enabled = true;
		}, 150 );
	},

	getClosestBaseUrl: function( ele ) {
		// Find the closest page and extract out its url.
		var url = $( ele ).closest( ".ui-page" ).jqmData( "url" ),
			base = $.mobile.path.documentBase.hrefNoHash;

		if ( !$.mobile.base.dynamicBaseEnabled || !url || !$.mobile.path.isPath( url ) ) {
			url = base;
		}

		return $.mobile.path.makeUrlAbsolute( url, base );
	},
	removeActiveLinkClass: function( forceRemoval ) {
		if ( !!$.mobile.activeClickedLink &&
				( !$.mobile.activeClickedLink.closest( ".ui-page-active" ).length ||
				forceRemoval ) ) {

			$.mobile.activeClickedLink.removeClass( "ui-button-active" );
		}
		$.mobile.activeClickedLink = null;
	},

	enhanceable: function( elements ) {
		return this.haveParents( elements, "enhance" );
	},

	hijackable: function( elements ) {
		return this.haveParents( elements, "ajax" );
	},

	haveParents: function( elements, attr ) {
		if ( !$.mobile.ignoreContentEnabled ) {
			return elements;
		}

		var count = elements.length,
			$newSet = $(),
			e, $element, excluded,
			i, c;

		for ( i = 0; i < count; i++ ) {
			$element = elements.eq( i );
			excluded = false;
			e = elements[ i ];

			while ( e ) {
				c = e.getAttribute ? e.getAttribute( "data-" + $.mobile.ns + attr ) : "";

				if ( c === "false" ) {
					excluded = true;
					break;
				}

				e = e.parentNode;
			}

			if ( !excluded ) {
				$newSet = $newSet.add( $element );
			}
		}

		return $newSet;
	},

	getScreenHeight: function() {
		// Native innerHeight returns more accurate value for this across platforms,
		// jQuery version is here as a normalized fallback for platforms like Symbian
		return window.innerHeight || $.mobile.window.height();
	},

	//simply set the active page's minimum height to screen height, depending on orientation
	resetActivePageHeight: function( height ) {
		var page = $( ".ui-page-active" ),
			pageHeight = page.height(),
			pageOuterHeight = page.outerHeight( true );

		height = compensateToolbars( page,
			( typeof height === "number" ) ? height : $( window ).height() );

		// Remove any previous min-height setting
		page.css( "min-height", "" );

		// Set the minimum height only if the height as determined by CSS is insufficient
		if ( page.height() < height ) {
			page.css( "min-height", height - ( pageOuterHeight - pageHeight ) );
		}
	},

	loading: function() {
		// If this is the first call to this function, instantiate a loader widget
		var loader = this.loading._widget || $.mobile.loader().element,

			// Call the appropriate method on the loader
			returnValue = loader.loader.apply( loader, arguments );

		// Make sure the loader is retained for future calls to this function.
		this.loading._widget = loader;

		return returnValue;
	},

	isElementCurrentlyVisible: function( el ) {
		el = typeof el === "string" ? $( el )[ 0 ] : el[ 0 ];

		if( !el ) {
			return true;
		}

		var rect = el.getBoundingClientRect();

		return (
			rect.bottom > 0 &&
			rect.right > 0 &&
			rect.top <
			( window.innerHeight || document.documentElement.clientHeight ) &&
			rect.left <
			( window.innerWidth || document.documentElement.clientWidth ) );
	}
} );

$.addDependents = function( elem, newDependents ) {
	var $elem = $( elem ),
		dependents = $elem.jqmData( "dependents" ) || $();

	$elem.jqmData( "dependents", $( dependents ).add( newDependents ) );
};

// plugins
$.fn.extend( {
	removeWithDependents: function() {
		$.removeWithDependents( this );
	},

	addDependents: function( newDependents ) {
		$.addDependents( this, newDependents );
	},

	// note that this helper doesn't attempt to handle the callback
	// or setting of an html element's text, its only purpose is
	// to return the html encoded version of the text in all cases. (thus the name)
	getEncodedText: function() {
		return $( "<a>" ).text( this.text() ).html();
	},

	// fluent helper function for the mobile namespaced equivalent
	jqmEnhanceable: function() {
		return $.mobile.enhanceable( this );
	},

	jqmHijackable: function() {
		return $.mobile.hijackable( this );
	}
} );

$.removeWithDependents = function( nativeElement ) {
	var element = $( nativeElement );

	( element.jqmData( "dependents" ) || $() ).remove();
	element.remove();
};
$.addDependents = function( nativeElement, newDependents ) {
	var element = $( nativeElement ),
		dependents = element.jqmData( "dependents" ) || $();

	element.jqmData( "dependents", $( dependents ).add( newDependents ) );
};

$.find.matches = function( expr, set ) {
	return $.find( expr, null, null, set );
};

$.find.matchesSelector = function( node, expr ) {
	return $.find( expr, null, null, [ node ] ).length > 0;
};

return $.mobile;
} );

/*!
 * jQuery Mobile Core @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>group: exclude

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'core',[
			"./defaults",
			"./data",
			"./helpers" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function() {} );

/*!
 * jQuery Mobile Match Media Polyfill @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Match Media Polyfill
//>>group: Utilities
//>>description: A workaround for browsers without window.matchMedia

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'media',[
			"jquery",
			"./core" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
window.matchMedia = window.matchMedia || ( function( doc, undefined ) {

	var bool,
		docElem = doc.documentElement,
		refNode = docElem.firstElementChild || docElem.firstChild,
		// fakeBody required for <FF4 when executed in <head>
		fakeBody = doc.createElement( "body" ),
		div = doc.createElement( "div" );

	div.id = "mq-test-1";
	div.style.cssText = "position:absolute;top:-100em";
	fakeBody.style.background = "none";
	fakeBody.appendChild( div );

	return function( q ) {

		div.innerHTML = "&shy;<style media=\"" + q + "\"> #mq-test-1 { width: 42px; }</style>";

		docElem.insertBefore( fakeBody, refNode );
		bool = div.offsetWidth === 42;
		docElem.removeChild( fakeBody );

		return {
			matches: bool,
			media: q
		};

	};

}( document ) );

// $.mobile.media uses matchMedia to return a boolean.
$.mobile.media = function( q ) {
	var mediaQueryList = window.matchMedia( q );
	// Firefox returns null in a hidden iframe
	return mediaQueryList && mediaQueryList.matches;
};

return $.mobile.media;

} );

/*!
 * jQuery Mobile Touch Support Test @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Touch support test
//>>group: Core
//>>description: Touch feature test

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'support/touch',[
			"jquery",
			"../ns" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var support = {
	touch: "ontouchend" in document
};

$.mobile.support = $.mobile.support || {};
$.extend( $.support, support );
$.extend( $.mobile.support, support );

return $.support;
} );

/*!
 * jQuery Mobile Orientation @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Orientation support test
//>>group: Core
//>>description: Feature test for orientation

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'support/orientation',[ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

$.extend( $.support, {
	orientation: "orientation" in window && "onorientationchange" in window
} );

return $.support;
} );


/*!
 * jQuery Mobile Support Tests @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>description: Assorted tests to qualify browsers by detecting features
//>>label: Support Tests
//>>group: Core

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'support',[
			"jquery",
			"./core",
			"./media",
			"./support/touch",
			"./support/orientation" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var fakeBody = $( "<body>" ).prependTo( "html" ),
	fbCSS = fakeBody[ 0 ].style,
	vendors = [ "Webkit", "Moz", "O" ],
	webos = "palmGetResource" in window, //only used to rule out scrollTop
	operamini = window.operamini && ( {} ).toString.call( window.operamini ) === "[object OperaMini]",
	nokiaLTE7_3;

// thx Modernizr
function propExists( prop ) {
	var uc_prop = prop.charAt( 0 ).toUpperCase() + prop.substr( 1 ),
		props = ( prop + " " + vendors.join( uc_prop + " " ) + uc_prop ).split( " " ),
		v;

	for ( v in props ) {
		if ( fbCSS[ props[ v ] ] !== undefined ) {
			return true;
		}
	}
}
var bb = window.blackberry && !propExists( "-webkit-transform" ); //only used to rule out box shadow, as it's filled opaque on BB 5 and lower

// inline SVG support test
function inlineSVG() {
	// Thanks Modernizr & Erik Dahlstrom
	var w = window,
		svg = !!w.document.createElementNS && !!w.document.createElementNS( "https://www.w3.org/2000/svg", "svg" ).createSVGRect && !( w.opera && navigator.userAgent.indexOf( "Chrome" ) === -1 ),
		support = function( data ) {
			if ( !( data && svg ) ) {
				$( "html" ).addClass( "ui-nosvg" );
			}
		},
		img = new w.Image();

	img.onerror = function() {
		support( false );
	};
	img.onload = function() {
		support( img.width === 1 && img.height === 1 );
	};
	img.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
}

function transform3dTest() {
	var mqProp = "transform-3d",
		// Because the `translate3d` test below throws false positives in Android:
		ret = $.mobile.media( "(-" + vendors.join( "-" + mqProp + "),(-" ) + "-" + mqProp + "),(" + mqProp + ")" ),
		el, transforms, t;

	if ( ret ) {
		return !!ret;
	}

	el = document.createElement( "div" );
	transforms = {
		// We’re omitting Opera for the time being; MS uses unprefixed.
		"MozTransform": "-moz-transform",
		"transform": "transform"
	};

	fakeBody.append( el );

	for ( t in transforms ) {
		if ( el.style[ t ] !== undefined ) {
			el.style[ t ] = "translate3d( 100px, 1px, 1px )";
			ret = window.getComputedStyle( el ).getPropertyValue( transforms[ t ] );
		}
	}
	return ( !!ret && ret !== "none" );
}

// Thanks Modernizr
function cssPointerEventsTest() {
	var element = document.createElement( "x" ),
		documentElement = document.documentElement,
		getComputedStyle = window.getComputedStyle,
		supports;

	if ( !( "pointerEvents" in element.style ) ) {
		return false;
	}

	element.style.pointerEvents = "auto";
	element.style.pointerEvents = "x";
	documentElement.appendChild( element );
	supports = getComputedStyle &&
		getComputedStyle( element, "" ).pointerEvents === "auto";
	documentElement.removeChild( element );
	return !!supports;
}

function boundingRect() {
	var div = document.createElement( "div" );
	return typeof div.getBoundingClientRect !== "undefined";
}

// non-UA-based IE version check by James Padolsey, modified by jdalton - from https://gist.github.com/527683
// allows for inclusion of IE 6+, including Windows Mobile 7
$.extend( $.mobile, { browser: {} } );
$.mobile.browser.oldIE = ( function() {
	var v = 3,
		div = document.createElement( "div" ),
		a = div.all || [];

	do {
		div.innerHTML = "<!--[if gt IE " + ( ++v ) + "]><br><![endif]-->";
	} while ( a[ 0 ] );

	return v > 4 ? v : !v;
} )();
$.mobile.browser.newIEMobile = ( function() {
	var div = document.createElement( "div" );
	return ( ( !$.mobile.browser.oldIE ) &&
		"onmsgesturehold" in div &&
		"ontouchstart" in div &&
		"onpointerdown" in div );
} )();

function fixedPosition() {
	var w = window,
		ua = navigator.userAgent,
		platform = navigator.platform,
		// Rendering engine is Webkit, and capture major version
		wkmatch = ua.match( /AppleWebKit\/([0-9]+)/ ),
		wkversion = !!wkmatch && wkmatch[ 1 ],
		ffmatch = ua.match( /Fennec\/([0-9]+)/ ),
		ffversion = !!ffmatch && ffmatch[ 1 ],
		operammobilematch = ua.match( /Opera Mobi\/([0-9]+)/ ),
		omversion = !!operammobilematch && operammobilematch[ 1 ];

	if (
			// iOS 4.3 and older : Platform is iPhone/Pad/Touch and Webkit version is less than 534 (ios5)
			( ( platform.indexOf( "iPhone" ) > -1 || platform.indexOf( "iPad" ) > -1 || platform.indexOf( "iPod" ) > -1 ) && wkversion && wkversion < 534 ) ||
			// Opera Mini
			( w.operamini && ( {} ).toString.call( w.operamini ) === "[object OperaMini]" ) ||
			( operammobilematch && omversion < 7458 ) ||
			//Android lte 2.1: Platform is Android and Webkit version is less than 533 (Android 2.2)
			( ua.indexOf( "Android" ) > -1 && wkversion && wkversion < 533 ) ||
			// Firefox Mobile before 6.0 -
			( ffversion && ffversion < 6 ) ||
			// WebOS less than 3
			( "palmGetResource" in window && wkversion && wkversion < 534 ) ||
			// MeeGo
			( ua.indexOf( "MeeGo" ) > -1 && ua.indexOf( "NokiaBrowser/8.5.0" ) > -1 ) ) {
		return false;
	}

	return true;
}

$.extend( $.support, {
	// Note, Chrome for iOS has an extremely quirky implementation of popstate.
	// We've chosen to take the shortest path to a bug fix here for issue #5426
	// See the following link for information about the regex chosen
	// https://developers.google.com/chrome/mobile/docs/user-agent#chrome_for_ios_user-agent
	pushState: "pushState" in history &&
		"replaceState" in history &&
		// When running inside a FF iframe, calling replaceState causes an error
		!( window.navigator.userAgent.indexOf( "Firefox" ) >= 0 && window.top !== window ) &&
		( window.navigator.userAgent.search( /CriOS/ ) === -1 ),

	mediaquery: $.mobile.media( "only all" ),
	cssPseudoElement: !!propExists( "content" ),
	touchOverflow: !!propExists( "overflowScrolling" ),
	cssTransform3d: transform3dTest(),
	boxShadow: !!propExists( "boxShadow" ) && !bb,
	fixedPosition: fixedPosition(),
	scrollTop: ( "pageXOffset" in window ||
		"scrollTop" in document.documentElement ||
		"scrollTop" in fakeBody[ 0 ] ) && !webos && !operamini,

	cssPointerEvents: cssPointerEventsTest(),
	boundingRect: boundingRect(),
	inlineSVG: inlineSVG
} );

fakeBody.remove();

// $.mobile.ajaxBlacklist is used to override ajaxEnabled on platforms that have known conflicts with hash history updates (BB5, Symbian)
// or that generally work better browsing in regular http for full page refreshes (Opera Mini)
// Note: This detection below is used as a last resort.
// We recommend only using these detection methods when all other more reliable/forward-looking approaches are not possible
nokiaLTE7_3 = ( function() {

	var ua = window.navigator.userAgent;

	//The following is an attempt to match Nokia browsers that are running Symbian/s60, with webkit, version 7.3 or older
	return ua.indexOf( "Nokia" ) > -1 &&
		( ua.indexOf( "Symbian/3" ) > -1 || ua.indexOf( "Series60/5" ) > -1 ) &&
		ua.indexOf( "AppleWebKit" ) > -1 &&
		ua.match( /(BrowserNG|NokiaBrowser)\/7\.[0-3]/ );
} )();

// Support conditions that must be met in order to proceed
// default enhanced qualifications are media query support OR IE 7+

$.mobile.gradeA = function() {
	return ( ( $.support.mediaquery && $.support.cssPseudoElement ) || $.mobile.browser.oldIE && $.mobile.browser.oldIE >= 8 ) && ( $.support.boundingRect || $.fn.jquery.match( /1\.[0-7+]\.[0-9+]?/ ) !== null );
};

$.mobile.ajaxBlacklist =
	// BlackBerry browsers, pre-webkit
	window.blackberry && !window.WebKitPoint ||
	// Opera Mini
	operamini ||
	// Symbian webkits pre 7.3
	nokiaLTE7_3;

// Lastly, this workaround is the only way we've found so far to get pre 7.3 Symbian webkit devices
// to render the stylesheets when they're referenced before this script, as we'd recommend doing.
// This simply reappends the CSS in place, which for some reason makes it apply
if ( nokiaLTE7_3 ) {
	$( function() {
		$( "head link[rel='stylesheet']" ).attr( "rel", "alternate stylesheet" ).attr( "rel", "stylesheet" );
	} );
}

// For ruling out shadows via css
if ( !$.support.boxShadow ) {
	$( "html" ).addClass( "ui-noboxshadow" );
}

return $.support;

} );

/*!
 * jQuery Mobile Navigate Event @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Navigate
//>>group: Events
//>>description: Provides a wrapper around hashchange and popstate
//>>docs: https://api.jquerymobile.com/navigate/
//>>demos: https://api.jquerymobile.com/@VERSION/navigation/

// TODO break out pushstate support test so we don't depend on the whole thing
( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'events/navigate',[
			"jquery",
			"./../ns",
			"./../support" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var $win = $.mobile.window, self,
	dummyFnToInitNavigate = function() {};

$.event.special.beforenavigate = {
	setup: function() {
		$win.on( "navigate", dummyFnToInitNavigate );
	},

	teardown: function() {
		$win.off( "navigate", dummyFnToInitNavigate );
	}
};

$.event.special.navigate = self = {
	bound: false,

	pushStateEnabled: true,

	originalEventName: undefined,

	// If pushstate support is present and push state support is defined to
	// be true on the mobile namespace.
	isPushStateEnabled: function() {
		return $.support.pushState &&
			$.mobile.pushStateEnabled === true &&
			this.isHashChangeEnabled();
	},

	// !! assumes mobile namespace is present
	isHashChangeEnabled: function() {
		return $.mobile.hashListeningEnabled === true;
	},

	// TODO a lot of duplication between popstate and hashchange
	popstate: function( event ) {
		var newEvent, beforeNavigate, state;

		if ( event.isDefaultPrevented() ) {
			return;
		}

		newEvent = new $.Event( "navigate" );
		beforeNavigate = new $.Event( "beforenavigate" );
		state = event.originalEvent.state || {};

		beforeNavigate.originalEvent = event;
		$win.trigger( beforeNavigate );

		if ( beforeNavigate.isDefaultPrevented() ) {
			return;
		}

		if ( event.historyState ) {
			$.extend( state, event.historyState );
		}

		// Make sure the original event is tracked for the end
		// user to inspect incase they want to do something special
		newEvent.originalEvent = event;

		// NOTE we let the current stack unwind because any assignment to
		//      location.hash will stop the world and run this event handler. By
		//      doing this we create a similar behavior to hashchange on hash
		//      assignment
		setTimeout( function() {
			$win.trigger( newEvent, {
				state: state
			} );
		}, 0 );
	},

	hashchange: function( event /*, data */ ) {
		var newEvent = new $.Event( "navigate" ),
			beforeNavigate = new $.Event( "beforenavigate" );

		beforeNavigate.originalEvent = event;
		$win.trigger( beforeNavigate );

		if ( beforeNavigate.isDefaultPrevented() ) {
			return;
		}

		// Make sure the original event is tracked for the end
		// user to inspect incase they want to do something special
		newEvent.originalEvent = event;

		// Trigger the hashchange with state provided by the user
		// that altered the hash
		$win.trigger( newEvent, {
			// Users that want to fully normalize the two events
			// will need to do history management down the stack and
			// add the state to the event before this binding is fired
			// TODO consider allowing for the explicit addition of callbacks
			//      to be fired before this value is set to avoid event timing issues
			state: event.hashchangeState || {}
		} );
	},

	// TODO We really only want to set this up once
	//      but I'm not clear if there's a beter way to achieve
	//      this with the jQuery special event structure
	setup: function( /* data, namespaces */ ) {
		if ( self.bound ) {
			return;
		}

		self.bound = true;

		if ( self.isPushStateEnabled() ) {
			self.originalEventName = "popstate";
			$win.bind( "popstate.navigate", self.popstate );
		} else if ( self.isHashChangeEnabled() ) {
			self.originalEventName = "hashchange";
			$win.bind( "hashchange.navigate", self.hashchange );
		}
	}
};

return $.event.special.navigate;
} );

/*!
 * jQuery Mobile Virtual Mouse @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Virtual Mouse (vmouse) Bindings
//>>group: Core
//>>description: Normalizes touch/mouse events.
//>>docs: https://api.jquerymobile.com/?s=vmouse

// This plugin is an experiment for abstracting away the touch and mouse
// events so that developers don't have to worry about which method of input
// the device their document is loaded on supports.
//
// The idea here is to allow the developer to register listeners for the
// basic mouse events, such as mousedown, mousemove, mouseup, and click,
// and the plugin will take care of registering the correct listeners
// behind the scenes to invoke the listener at the fastest possible time
// for that device, while still retaining the order of event firing in
// the traditional mouse environment, should multiple handlers be registered
// on the same element for different events.
//
// The current version exposes the following virtual events to jQuery bind methods:
// "vmouseover vmousedown vmousemove vmouseup vclick vmouseout vmousecancel"

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'vmouse',[ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var dataPropertyName = "virtualMouseBindings",
	touchTargetPropertyName = "virtualTouchID",
	touchEventProps = "clientX clientY pageX pageY screenX screenY".split( " " ),
	virtualEventNames = "vmouseover vmousedown vmousemove vmouseup vclick vmouseout vmousecancel".split( " " ),
	generalProps = ( "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase " +
		"metaKey relatedTarget shiftKey target timeStamp view which" ).split( " " ),
	mouseHookProps = $.event.mouseHooks ? $.event.mouseHooks.props : [],
	mouseEventProps = generalProps.concat( mouseHookProps ),
	activeDocHandlers = {},
	resetTimerID = 0,
	startX = 0,
	startY = 0,
	didScroll = false,
	clickBlockList = [],
	blockMouseTriggers = false,
	blockTouchTriggers = false,
	eventCaptureSupported = "addEventListener" in document,
	$document = $( document ),
	nextTouchID = 1,
	lastTouchID = 0, threshold,
	i;

$.vmouse = {
	moveDistanceThreshold: 10,
	clickDistanceThreshold: 10,
	resetTimerDuration: 1500,
	maximumTimeBetweenTouches: 100
};

function getNativeEvent( event ) {

	while ( event && typeof event.originalEvent !== "undefined" ) {
		event = event.originalEvent;
	}
	return event;
}

function createVirtualEvent( event, eventType ) {

	var t = event.type,
		oe, props, ne, prop, ct, touch, i, j, len;

	event = $.Event( event );
	event.type = eventType;

	oe = event.originalEvent;
	props = generalProps;

	// addresses separation of $.event.props in to $.event.mouseHook.props and Issue 3280
	// https://github.com/jquery/jquery-mobile/issues/3280
	if ( t.search( /^(mouse|click)/ ) > -1 ) {
		props = mouseEventProps;
	}

	// copy original event properties over to the new event
	// this would happen if we could call $.event.fix instead of $.Event
	// but we don't have a way to force an event to be fixed multiple times
	if ( oe ) {
		for ( i = props.length; i; ) {
			prop = props[ --i ];
			event[ prop ] = oe[ prop ];
		}
	}

	// make sure that if the mouse and click virtual events are generated
	// without a .which one is defined
	if ( t.search( /mouse(down|up)|click/ ) > -1 && !event.which ) {
		event.which = 1;
	}

	if ( t.search( /^touch/ ) !== -1 ) {
		ne = getNativeEvent( oe );
		t = ne.touches;
		ct = ne.changedTouches;
		touch = ( t && t.length ) ? t[ 0 ] : ( ( ct && ct.length ) ? ct[ 0 ] : undefined );

		if ( touch ) {
			for ( j = 0, len = touchEventProps.length; j < len; j++ ) {
				prop = touchEventProps[ j ];
				event[ prop ] = touch[ prop ];
			}
		}
	}

	return event;
}

function getVirtualBindingFlags( element ) {

	var flags = {},
		b, k;

	while ( element ) {

		b = $.data( element, dataPropertyName );

		for ( k in b ) {
			if ( b[ k ] ) {
				flags[ k ] = flags.hasVirtualBinding = true;
			}
		}
		element = element.parentNode;
	}
	return flags;
}

function getClosestElementWithVirtualBinding( element, eventType ) {
	var b;
	while ( element ) {

		b = $.data( element, dataPropertyName );

		if ( b && ( !eventType || b[ eventType ] ) ) {
			return element;
		}
		element = element.parentNode;
	}
	return null;
}

function enableTouchBindings() {
	blockTouchTriggers = false;
}

function disableTouchBindings() {
	blockTouchTriggers = true;
}

function enableMouseBindings() {
	lastTouchID = 0;
	clickBlockList.length = 0;
	blockMouseTriggers = false;

	// When mouse bindings are enabled, our
	// touch bindings are disabled.
	disableTouchBindings();
}

function disableMouseBindings() {
	// When mouse bindings are disabled, our
	// touch bindings are enabled.
	enableTouchBindings();
}

function clearResetTimer() {
	if ( resetTimerID ) {
		clearTimeout( resetTimerID );
		resetTimerID = 0;
	}
}

function startResetTimer() {
	clearResetTimer();
	resetTimerID = setTimeout( function() {
		resetTimerID = 0;
		enableMouseBindings();
	}, $.vmouse.resetTimerDuration );
}

function triggerVirtualEvent( eventType, event, flags ) {
	var ve;

	if ( ( flags && flags[ eventType ] ) ||
			( !flags && getClosestElementWithVirtualBinding( event.target, eventType ) ) ) {

		ve = createVirtualEvent( event, eventType );

		$( event.target ).trigger( ve );
	}

	return ve;
}

function mouseEventCallback( event ) {
	var touchID = $.data( event.target, touchTargetPropertyName ),
		ve;

	// It is unexpected if a click event is received before a touchend
	// or touchmove event, however this is a known behavior in Mobile
	// Safari when Mobile VoiceOver (as of iOS 8) is enabled and the user
	// double taps to activate a link element. In these cases if a touch
	// event is not received within the maximum time between touches,
	// re-enable mouse bindings and call the mouse event handler again.
	if ( event.type === "click" && $.data( event.target, "lastTouchType" ) === "touchstart" ) {
		setTimeout( function() {
			if ( $.data( event.target, "lastTouchType" ) === "touchstart" ) {
				enableMouseBindings();
				delete $.data( event.target ).lastTouchType;
				mouseEventCallback( event );
			}
		}, $.vmouse.maximumTimeBetweenTouches );
	}

	if ( !blockMouseTriggers && ( !lastTouchID || lastTouchID !== touchID ) ) {
		ve = triggerVirtualEvent( "v" + event.type, event );
		if ( ve ) {
			if ( ve.isDefaultPrevented() ) {
				event.preventDefault();
			}
			if ( ve.isPropagationStopped() ) {
				event.stopPropagation();
			}
			if ( ve.isImmediatePropagationStopped() ) {
				event.stopImmediatePropagation();
			}
		}
	}
}

function handleTouchStart( event ) {

	var touches = getNativeEvent( event ).touches,
		target, flags, t;

	if ( touches && touches.length === 1 ) {

		target = event.target;
		flags = getVirtualBindingFlags( target );

		$.data( event.target, "lastTouchType", event.type );

		if ( flags.hasVirtualBinding ) {

			lastTouchID = nextTouchID++;
			$.data( target, touchTargetPropertyName, lastTouchID );

			clearResetTimer();

			disableMouseBindings();
			didScroll = false;

			t = getNativeEvent( event ).touches[ 0 ];
			startX = t.pageX;
			startY = t.pageY;

			triggerVirtualEvent( "vmouseover", event, flags );
			triggerVirtualEvent( "vmousedown", event, flags );
		}
	}
}

function handleScroll( event ) {
	if ( blockTouchTriggers ) {
		return;
	}

	if ( !didScroll ) {
		triggerVirtualEvent( "vmousecancel", event, getVirtualBindingFlags( event.target ) );
	}

	$.data( event.target, "lastTouchType", event.type );

	didScroll = true;
	startResetTimer();
}

function handleTouchMove( event ) {
	if ( blockTouchTriggers ) {
		return;
	}

	var t = getNativeEvent( event ).touches[ 0 ],
		didCancel = didScroll,
		moveThreshold = $.vmouse.moveDistanceThreshold,
		flags = getVirtualBindingFlags( event.target );

	$.data( event.target, "lastTouchType", event.type );

	didScroll = didScroll ||
		( Math.abs( t.pageX - startX ) > moveThreshold ||
		Math.abs( t.pageY - startY ) > moveThreshold );

	if ( didScroll && !didCancel ) {
		triggerVirtualEvent( "vmousecancel", event, flags );
	}

	triggerVirtualEvent( "vmousemove", event, flags );
	startResetTimer();
}

function handleTouchEnd( event ) {
	if ( blockTouchTriggers || $.data( event.target, "lastTouchType" ) === undefined ) {
		return;
	}

	disableTouchBindings();
	delete $.data( event.target ).lastTouchType;

	var flags = getVirtualBindingFlags( event.target ),
		ve, t;
	triggerVirtualEvent( "vmouseup", event, flags );

	if ( !didScroll ) {
		ve = triggerVirtualEvent( "vclick", event, flags );
		if ( ve && ve.isDefaultPrevented() ) {
			// The target of the mouse events that follow the touchend
			// event don't necessarily match the target used during the
			// touch. This means we need to rely on coordinates for blocking
			// any click that is generated.
			t = getNativeEvent( event ).changedTouches[ 0 ];
			clickBlockList.push( {
				touchID: lastTouchID,
				x: t.clientX,
				y: t.clientY
			} );

			// Prevent any mouse events that follow from triggering
			// virtual event notifications.
			blockMouseTriggers = true;
		}
	}
	triggerVirtualEvent( "vmouseout", event, flags );
	didScroll = false;

	startResetTimer();
}

function hasVirtualBindings( ele ) {
	var bindings = $.data( ele, dataPropertyName ),
		k;

	if ( bindings ) {
		for ( k in bindings ) {
			if ( bindings[ k ] ) {
				return true;
			}
		}
	}
	return false;
}

function dummyMouseHandler() {
}

function getSpecialEventObject( eventType ) {
	var realType = eventType.substr( 1 );

	return {
		setup: function( /* data, namespace */ ) {
			// If this is the first virtual mouse binding for this element,
			// add a bindings object to its data.

			if ( !hasVirtualBindings( this ) ) {
				$.data( this, dataPropertyName, {} );
			}

			// If setup is called, we know it is the first binding for this
			// eventType, so initialize the count for the eventType to zero.
			var bindings = $.data( this, dataPropertyName );
			bindings[ eventType ] = true;

			// If this is the first virtual mouse event for this type,
			// register a global handler on the document.

			activeDocHandlers[ eventType ] = ( activeDocHandlers[ eventType ] || 0 ) + 1;

			if ( activeDocHandlers[ eventType ] === 1 ) {
				$document.bind( realType, mouseEventCallback );
			}

			// Some browsers, like Opera Mini, won't dispatch mouse/click events
			// for elements unless they actually have handlers registered on them.
			// To get around this, we register dummy handlers on the elements.

			$( this ).bind( realType, dummyMouseHandler );

			// For now, if event capture is not supported, we rely on mouse handlers.
			if ( eventCaptureSupported ) {
				// If this is the first virtual mouse binding for the document,
				// register our touchstart handler on the document.

				activeDocHandlers[ "touchstart" ] = ( activeDocHandlers[ "touchstart" ] || 0 ) + 1;

				if ( activeDocHandlers[ "touchstart" ] === 1 ) {
					$document.bind( "touchstart", handleTouchStart )
						.bind( "touchend", handleTouchEnd )

						// On touch platforms, touching the screen and then dragging your finger
						// causes the window content to scroll after some distance threshold is
						// exceeded. On these platforms, a scroll prevents a click event from being
						// dispatched, and on some platforms, even the touchend is suppressed. To
						// mimic the suppression of the click event, we need to watch for a scroll
						// event. Unfortunately, some platforms like iOS don't dispatch scroll
						// events until *AFTER* the user lifts their finger (touchend). This means
						// we need to watch both scroll and touchmove events to figure out whether
						// or not a scroll happenens before the touchend event is fired.

						.bind( "touchmove", handleTouchMove )
						.bind( "scroll", handleScroll );
				}
			}
		},

		teardown: function( /* data, namespace */ ) {
			// If this is the last virtual binding for this eventType,
			// remove its global handler from the document.

			--activeDocHandlers[eventType];

			if ( !activeDocHandlers[ eventType ] ) {
				$document.unbind( realType, mouseEventCallback );
			}

			if ( eventCaptureSupported ) {
				// If this is the last virtual mouse binding in existence,
				// remove our document touchstart listener.

				--activeDocHandlers["touchstart"];

				if ( !activeDocHandlers[ "touchstart" ] ) {
					$document.unbind( "touchstart", handleTouchStart )
						.unbind( "touchmove", handleTouchMove )
						.unbind( "touchend", handleTouchEnd )
						.unbind( "scroll", handleScroll );
				}
			}

			var $this = $( this ),
				bindings = $.data( this, dataPropertyName );

			// teardown may be called when an element was
			// removed from the DOM. If this is the case,
			// jQuery core may have already stripped the element
			// of any data bindings so we need to check it before
			// using it.
			if ( bindings ) {
				bindings[ eventType ] = false;
			}

			// Unregister the dummy event handler.

			$this.unbind( realType, dummyMouseHandler );

			// If this is the last virtual mouse binding on the
			// element, remove the binding data from the element.

			if ( !hasVirtualBindings( this ) ) {
				$this.removeData( dataPropertyName );
			}
		}
	};
}

// Expose our custom events to the jQuery bind/unbind mechanism.

for ( i = 0; i < virtualEventNames.length; i++ ) {
	$.event.special[ virtualEventNames[ i ] ] = getSpecialEventObject( virtualEventNames[ i ] );
}

// Add a capture click handler to block clicks.
// Note that we require event capture support for this so if the device
// doesn't support it, we punt for now and rely solely on mouse events.
if ( eventCaptureSupported ) {
	document.addEventListener( "click", function( e ) {
		var cnt = clickBlockList.length,
			target = e.target,
			x, y, ele, i, o, touchID;

		if ( cnt ) {
			x = e.clientX;
			y = e.clientY;
			threshold = $.vmouse.clickDistanceThreshold;

			// The idea here is to run through the clickBlockList to see if
			// the current click event is in the proximity of one of our
			// vclick events that had preventDefault() called on it. If we find
			// one, then we block the click.
			//
			// Why do we have to rely on proximity?
			//
			// Because the target of the touch event that triggered the vclick
			// can be different from the target of the click event synthesized
			// by the browser. The target of a mouse/click event that is synthesized
			// from a touch event seems to be implementation specific. For example,
			// some browsers will fire mouse/click events for a link that is near
			// a touch event, even though the target of the touchstart/touchend event
			// says the user touched outside the link. Also, it seems that with most
			// browsers, the target of the mouse/click event is not calculated until the
			// time it is dispatched, so if you replace an element that you touched
			// with another element, the target of the mouse/click will be the new
			// element underneath that point.
			//
			// Aside from proximity, we also check to see if the target and any
			// of its ancestors were the ones that blocked a click. This is necessary
			// because of the strange mouse/click target calculation done in the
			// Android 2.1 browser, where if you click on an element, and there is a
			// mouse/click handler on one of its ancestors, the target will be the
			// innermost child of the touched element, even if that child is no where
			// near the point of touch.

			ele = target;

			while ( ele ) {
				for ( i = 0; i < cnt; i++ ) {
					o = clickBlockList[ i ];
					touchID = 0;

					if ( ( ele === target && Math.abs( o.x - x ) < threshold && Math.abs( o.y - y ) < threshold ) ||
							$.data( ele, touchTargetPropertyName ) === o.touchID ) {
						// XXX: We may want to consider removing matches from the block list
						//      instead of waiting for the reset timer to fire.
						e.preventDefault();
						e.stopPropagation();
						return;
					}
				}
				ele = ele.parentNode;
			}
		}
	}, true );
}
} );

/*!
 * jQuery Mobile Touch Events @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Touch
//>>group: Events
//>>description: Touch events including: touchstart, touchmove, touchend, tap, taphold, swipe, swipeleft, swiperight

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'events/touch',[
			"jquery",
			"../vmouse",
			"../support/touch" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {
var $document = $( document ),
	supportTouch = $.mobile.support.touch,
	touchStartEvent = supportTouch ? "touchstart" : "mousedown",
	touchStopEvent = supportTouch ? "touchend" : "mouseup",
	touchMoveEvent = supportTouch ? "touchmove" : "mousemove";

// setup new event shortcuts
$.each( ( "touchstart touchmove touchend " +
"tap taphold " +
"swipe swipeleft swiperight" ).split( " " ), function( i, name ) {

	$.fn[ name ] = function( fn ) {
		return fn ? this.bind( name, fn ) : this.trigger( name );
	};

	// jQuery < 1.8
	if ( $.attrFn ) {
		$.attrFn[ name ] = true;
	}
} );

function triggerCustomEvent( obj, eventType, event, bubble ) {
	var originalType = event.type;
	event.type = eventType;
	if ( bubble ) {
		$.event.trigger( event, undefined, obj );
	} else {
		$.event.dispatch.call( obj, event );
	}
	event.type = originalType;
}

// also handles taphold
$.event.special.tap = {
	tapholdThreshold: 750,
	emitTapOnTaphold: true,
	setup: function() {
		var thisObject = this,
			$this = $( thisObject ),
			isTaphold = false;

		$this.bind( "vmousedown", function( event ) {
			isTaphold = false;
			if ( event.which && event.which !== 1 ) {
				return true;
			}

			var origTarget = event.target,
				timer, clickHandler;

			function clearTapTimer() {
				if ( timer ) {
					$this.bind( "vclick", clickHandler );
					clearTimeout( timer );
				}
			}

			function clearTapHandlers() {
				clearTapTimer();

				$this.unbind( "vclick", clickHandler )
					.unbind( "vmouseup", clearTapTimer );
				$document.unbind( "vmousecancel", clearTapHandlers );
			}

			clickHandler = function( event ) {
				clearTapHandlers();

				// ONLY trigger a 'tap' event if the start target is
				// the same as the stop target.
				if ( !isTaphold && origTarget === event.target ) {
					triggerCustomEvent( thisObject, "tap", event );
				} else if ( isTaphold ) {
					event.preventDefault();
				}
			};

			$this.bind( "vmouseup", clearTapTimer );

			$document.bind( "vmousecancel", clearTapHandlers );

			timer = setTimeout( function() {
				if ( !$.event.special.tap.emitTapOnTaphold ) {
					isTaphold = true;
				}
				timer = 0;
				triggerCustomEvent( thisObject, "taphold", $.Event( "taphold", { target: origTarget } ) );
			}, $.event.special.tap.tapholdThreshold );
		} );
	},
	teardown: function() {
		$( this ).unbind( "vmousedown" ).unbind( "vclick" ).unbind( "vmouseup" );
		$document.unbind( "vmousecancel" );
	}
};

// Also handles swipeleft, swiperight
$.event.special.swipe = {

	// More than this horizontal displacement, and we will suppress scrolling.
	scrollSupressionThreshold: 30,

	// More time than this, and it isn't a swipe.
	durationThreshold: 1000,

	// Swipe horizontal displacement must be more than this.
	horizontalDistanceThreshold: window.devicePixelRatio >= 2 ? 15 : 30,

	// Swipe vertical displacement must be less than this.
	verticalDistanceThreshold: window.devicePixelRatio >= 2 ? 15 : 30,

	getLocation: function( event ) {
		var winPageX = window.pageXOffset,
			winPageY = window.pageYOffset,
			x = event.clientX,
			y = event.clientY;

		if ( event.pageY === 0 && Math.floor( y ) > Math.floor( event.pageY ) ||
				event.pageX === 0 && Math.floor( x ) > Math.floor( event.pageX ) ) {

			// iOS4 clientX/clientY have the value that should have been
			// in pageX/pageY. While pageX/page/ have the value 0
			x = x - winPageX;
			y = y - winPageY;
		} else if ( y < ( event.pageY - winPageY ) || x < ( event.pageX - winPageX ) ) {

			// Some Android browsers have totally bogus values for clientX/Y
			// when scrolling/zooming a page. Detectable since clientX/clientY
			// should never be smaller than pageX/pageY minus page scroll
			x = event.pageX - winPageX;
			y = event.pageY - winPageY;
		}

		return {
			x: x,
			y: y
		};
	},

	start: function( event ) {
		var data = event.originalEvent.touches ?
				event.originalEvent.touches[ 0 ] : event,
			location = $.event.special.swipe.getLocation( data );
		return {
			time: ( new Date() ).getTime(),
			coords: [ location.x, location.y ],
			origin: $( event.target )
		};
	},

	stop: function( event ) {
		var data = event.originalEvent.touches ?
				event.originalEvent.touches[ 0 ] : event,
			location = $.event.special.swipe.getLocation( data );
		return {
			time: ( new Date() ).getTime(),
			coords: [ location.x, location.y ]
		};
	},

	handleSwipe: function( start, stop, thisObject, origTarget ) {
		if ( stop.time - start.time < $.event.special.swipe.durationThreshold &&
				Math.abs( start.coords[ 0 ] - stop.coords[ 0 ] ) > $.event.special.swipe.horizontalDistanceThreshold &&
				Math.abs( start.coords[ 1 ] - stop.coords[ 1 ] ) < $.event.special.swipe.verticalDistanceThreshold ) {
			var direction = start.coords[ 0 ] > stop.coords[ 0 ] ? "swipeleft" : "swiperight";

			triggerCustomEvent( thisObject, "swipe", $.Event( "swipe", { target: origTarget, swipestart: start, swipestop: stop } ), true );
			triggerCustomEvent( thisObject, direction, $.Event( direction, { target: origTarget, swipestart: start, swipestop: stop } ), true );
			return true;
		}
		return false;

	},

	// This serves as a flag to ensure that at most one swipe event event is
	// in work at any given time
	eventInProgress: false,

	setup: function() {
		var events,
			thisObject = this,
			$this = $( thisObject ),
			context = {};

		// Retrieve the events data for this element and add the swipe context
		events = $.data( this, "mobile-events" );
		if ( !events ) {
			events = { length: 0 };
			$.data( this, "mobile-events", events );
		}
		events.length++;
		events.swipe = context;

		context.start = function( event ) {

			// Bail if we're already working on a swipe event
			if ( $.event.special.swipe.eventInProgress ) {
				return;
			}
			$.event.special.swipe.eventInProgress = true;

			var stop,
				start = $.event.special.swipe.start( event ),
				origTarget = event.target,
				emitted = false;

			context.move = function( event ) {
				if ( !start || event.isDefaultPrevented() ) {
					return;
				}

				stop = $.event.special.swipe.stop( event );
				if ( !emitted ) {
					emitted = $.event.special.swipe.handleSwipe( start, stop, thisObject, origTarget );
					if ( emitted ) {

						// Reset the context to make way for the next swipe event
						$.event.special.swipe.eventInProgress = false;
					}
				}
				// prevent scrolling
				if ( Math.abs( start.coords[ 0 ] - stop.coords[ 0 ] ) > $.event.special.swipe.scrollSupressionThreshold ) {
					event.preventDefault();
				}
			};

			context.stop = function() {
				emitted = true;

				// Reset the context to make way for the next swipe event
				$.event.special.swipe.eventInProgress = false;
				$document.off( touchMoveEvent, context.move );
				context.move = null;
			};

			$document.on( touchMoveEvent, context.move )
				.one( touchStopEvent, context.stop );
		};
		$this.on( touchStartEvent, context.start );
	},

	teardown: function() {
		var events, context;

		events = $.data( this, "mobile-events" );
		if ( events ) {
			context = events.swipe;
			delete events.swipe;
			events.length--;
			if ( events.length === 0 ) {
				$.removeData( this, "mobile-events" );
			}
		}

		if ( context ) {
			if ( context.start ) {
				$( this ).off( touchStartEvent, context.start );
			}
			if ( context.move ) {
				$document.off( touchMoveEvent, context.move );
			}
			if ( context.stop ) {
				$document.off( touchStopEvent, context.stop );
			}
		}
	}
};
$.each( {
	taphold: "tap",
	swipeleft: "swipe.left",
	swiperight: "swipe.right"
}, function( event, sourceEvent ) {

	$.event.special[ event ] = {
		setup: function() {
			$( this ).bind( sourceEvent, $.noop );
		},
		teardown: function() {
			$( this ).unbind( sourceEvent );
		}
	};
} );

return $.event.special;
} );


/*!
 * jQuery Mobile Scroll Events @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Scroll
//>>group: Events
//>>description: Scroll events including: scrollstart, scrollstop

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'events/scroll',[ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var scrollEvent = "touchmove scroll";

// setup new event shortcuts
$.each( [ "scrollstart", "scrollstop" ], function( i, name ) {

	$.fn[ name ] = function( fn ) {
		return fn ? this.bind( name, fn ) : this.trigger( name );
	};

	// jQuery < 1.8
	if ( $.attrFn ) {
		$.attrFn[ name ] = true;
	}
} );

// also handles scrollstop
$.event.special.scrollstart = {

	enabled: true,
	setup: function() {

		var thisObject = this,
			$this = $( thisObject ),
			scrolling,
			timer;

		function trigger( event, state ) {
			var originalEventType = event.type;

			scrolling = state;

			event.type = scrolling ? "scrollstart" : "scrollstop";
			$.event.dispatch.call( thisObject, event );
			event.type = originalEventType;
		}

		var scrollStartHandler = $.event.special.scrollstart.handler = function ( event ) {

			if ( !$.event.special.scrollstart.enabled ) {
				return;
			}

			if ( !scrolling ) {
				trigger( event, true );
			}

			clearTimeout( timer );
			timer = setTimeout( function() {
				trigger( event, false );
			}, 50 );
		};

		// iPhone triggers scroll after a small delay; use touchmove instead
		$this.on( scrollEvent, scrollStartHandler );
	},
	teardown: function() {
		$( this ).off( scrollEvent, $.event.special.scrollstart.handler );
	}
};

$.each( {
	scrollstop: "scrollstart"
}, function( event, sourceEvent ) {

	$.event.special[ event ] = {
		setup: function() {
			$( this ).bind( sourceEvent, $.noop );
		},
		teardown: function() {
			$( this ).unbind( sourceEvent );
		}
	};
} );

return $.event.special;
} );

/*!
 * jQuery Mobile Throttled Resize @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Throttled Resize
//>>group: Events
//>>description: Fires a resize event with a slight delay to prevent excessive callback invocation
//>>docs: https://api.jquerymobile.com/throttledresize/

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'events/throttledresize',[ "jquery" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var throttle = 250,
	lastCall = 0,
	heldCall,
	curr,
	diff,
	handler = function() {
		curr = ( new Date() ).getTime();
		diff = curr - lastCall;

		if ( diff >= throttle ) {

			lastCall = curr;
			$( this ).trigger( "throttledresize" );

		} else {

			if ( heldCall ) {
				clearTimeout( heldCall );
			}

			// Promise a held call will still execute
			heldCall = setTimeout( handler, throttle - diff );
		}
	};

// throttled resize event
$.event.special.throttledresize = {
	setup: function() {
		$( this ).bind( "resize", handler );
	},
	teardown: function() {
		$( this ).unbind( "resize", handler );
	}
};

return $.event.special.throttledresize;
} );

/*!
 * jQuery Mobile Orientation Change Event @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Orientation Change
//>>group: Events
//>>description: Provides a wrapper around the inconsistent browser implementations of orientationchange
//>>docs: https://api.jquerymobile.com/orientationchange/

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'events/orientationchange',[
			"jquery",
			"../support/orientation",
			"./throttledresize" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function( $ ) {

var win = $( window ),
	event_name = "orientationchange",
	get_orientation,
	last_orientation,
	initial_orientation_is_landscape,
	initial_orientation_is_default,
	portrait_map = { "0": true, "180": true },
	ww, wh, landscape_threshold;

// It seems that some device/browser vendors use window.orientation values 0 and 180 to
// denote the "default" orientation. For iOS devices, and most other smart-phones tested,
// the default orientation is always "portrait", but in some Android and RIM based tablets,
// the default orientation is "landscape". The following code attempts to use the window
// dimensions to figure out what the current orientation is, and then makes adjustments
// to the to the portrait_map if necessary, so that we can properly decode the
// window.orientation value whenever get_orientation() is called.
//
// Note that we used to use a media query to figure out what the orientation the browser
// thinks it is in:
//
//     initial_orientation_is_landscape = $.mobile.media("all and (orientation: landscape)");
//
// but there was an iPhone/iPod Touch bug beginning with iOS 4.2, up through iOS 5.1,
// where the browser *ALWAYS* applied the landscape media query. This bug does not
// happen on iPad.

if ( $.support.orientation ) {

	// Check the window width and height to figure out what the current orientation
	// of the device is at this moment. Note that we've initialized the portrait map
	// values to 0 and 180, *AND* we purposely check for landscape so that if we guess
	// wrong, , we default to the assumption that portrait is the default orientation.
	// We use a threshold check below because on some platforms like iOS, the iPhone
	// form-factor can report a larger width than height if the user turns on the
	// developer console. The actual threshold value is somewhat arbitrary, we just
	// need to make sure it is large enough to exclude the developer console case.

	ww = window.innerWidth || win.width();
	wh = window.innerHeight || win.height();
	landscape_threshold = 50;

	initial_orientation_is_landscape = ww > wh && ( ww - wh ) > landscape_threshold;

	// Now check to see if the current window.orientation is 0 or 180.
	initial_orientation_is_default = portrait_map[ window.orientation ];

	// If the initial orientation is landscape, but window.orientation reports 0 or 180, *OR*
	// if the initial orientation is portrait, but window.orientation reports 90 or -90, we
	// need to flip our portrait_map values because landscape is the default orientation for
	// this device/browser.
	if ( ( initial_orientation_is_landscape && initial_orientation_is_default ) || ( !initial_orientation_is_landscape && !initial_orientation_is_default ) ) {
		portrait_map = { "-90": true, "90": true };
	}
}

// If the event is not supported natively, this handler will be bound to
// the window resize event to simulate the orientationchange event.
function handler() {
	// Get the current orientation.
	var orientation = get_orientation();

	if ( orientation !== last_orientation ) {
		// The orientation has changed, so trigger the orientationchange event.
		last_orientation = orientation;
		win.trigger( event_name );
	}
}

$.event.special.orientationchange = $.extend( {}, $.event.special.orientationchange, {
	setup: function() {
		// If the event is supported natively, return false so that jQuery
		// will bind to the event using DOM methods.
		if ( $.support.orientation && !$.event.special.orientationchange.disabled ) {
			return false;
		}

		// Get the current orientation to avoid initial double-triggering.
		last_orientation = get_orientation();

		// Because the orientationchange event doesn't exist, simulate the
		// event by testing window dimensions on resize.
		win.bind( "throttledresize", handler );
	},
	teardown: function() {
		// If the event is not supported natively, return false so that
		// jQuery will unbind the event using DOM methods.
		if ( $.support.orientation && !$.event.special.orientationchange.disabled ) {
			return false;
		}

		// Because the orientationchange event doesn't exist, unbind the
		// resize event handler.
		win.unbind( "throttledresize", handler );
	},
	add: function( handleObj ) {
		// Save a reference to the bound event handler.
		var old_handler = handleObj.handler;

		handleObj.handler = function( event ) {
			// Modify event object, adding the .orientation property.
			event.orientation = get_orientation();

			// Call the originally-bound event handler and return its result.
			return old_handler.apply( this, arguments );
		};
	}
} );

// Get the current page orientation. This method is exposed publicly, should it
// be needed, as jQuery.event.special.orientationchange.orientation()
$.event.special.orientationchange.orientation = get_orientation = function() {
	var isPortrait = true,
		elem = document.documentElement;

	// prefer window orientation to the calculation based on screensize as
	// the actual screen resize takes place before or after the orientation change event
	// has been fired depending on implementation (eg android 2.3 is before, iphone after).
	// More testing is required to determine if a more reliable method of determining the new screensize
	// is possible when orientationchange is fired. (eg, use media queries + element + opacity)
	if ( $.support.orientation ) {
		// if the window orientation registers as 0 or 180 degrees report
		// portrait, otherwise landscape
		isPortrait = portrait_map[ window.orientation ];
	} else {
		isPortrait = elem && elem.clientWidth / elem.clientHeight < 1.1;
	}

	return isPortrait ? "portrait" : "landscape";
};

$.fn[ event_name ] = function( fn ) {
	return fn ? this.bind( event_name, fn ) : this.trigger( event_name );
};

// jQuery < 1.8
if ( $.attrFn ) {
	$.attrFn[ event_name ] = true;
}

return $.event.special;
} );

/*!
 * jQuery Mobile Events @VERSION
 * https://jquerymobile.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * https://jquery.org/license
 */

//>>label: Events
//>>group: Events
//>>description: Custom events and shortcuts.

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( 'events',[
			"jquery",
			"./events/navigate",
			"./events/touch",
			"./events/scroll",
			"./events/orientationchange" ], factory );
	} else {

		// Browser globals
		factory( jQuery );
	}
} )( function() {} );


}));
