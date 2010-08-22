$(document).ready(function () {

	/* switch logo image on hover */
	$('#logo').hover(
		function () {
			$('a img', this).attr('src', 'img/mc-logo-hover.png');
		},
		function () {
			$('a img', this).attr('src', 'img/mc-logo.png');
		}
	);

	/* switch logo image on hover */
	$('.bwswitch').hover(
		function () {
//			$('.bw', this).fadeOut();
			$('.color', this).fadeIn();
		},
		function () {
			$('.color', this).fadeOut();
//			$('.bw', this).fadeOut();
		}
	);

	
	add_hovered('#menu ul.menu li');
	add_hovered('#works a');
	add_hovered('.lang li a');
	add_hovered('.pager a');
	add_hovered('.social-icons a');
	add_hovered('.author');

//	add_img_hoverchange('.social-icons a img');
	add_img_hoverchange('.footer-logo');
	add_img_hoverchange('.lang a img');
//	add_img_hoverchange('#works a img');
	
	set_ul_width('.pager ul');


	$('.contact input,.contact textarea').click(function () {
		$(this).val('');
	});
	
	$(".lava").lavaLamp({
		fx: "backout", 
		speed: 700
	});
	
	$('.colorbox').colorbox();
});

/* prida hover nad vybrany selektor */
function add_hovered(selector) {
	
	$(selector).hover(
		function () {
			$(this).addClass('hovered');
		},
		function () {
			$(this).removeClass('hovered');
		}
	);
}

function add_img_hoverchange (selector) {
	$(selector).hover(
		function () {
			var src = $(this).attr('src').replace(/\./g, "-hover.");
			$(this).attr('src', src);
		},
		function () {
			var src = $(this).attr('src').replace(/-hover\./g, ".");
			$(this).attr('src', src);
		}
	);
}


/**
 *	Nastavi menu spravnou sirku a na nej pak jde aplikovat margin:auto
 */
function set_ul_width(selector) {
	/* spocita sirku menu a nastavi ji aby se na nej mohlo pouzit margin:auto */
	var width = 0;
	$(selector+'>li').each(function () {
		width = width + parseInt($(this).outerWidth(true));
//		console.log(selector+' - '+parseInt($(this).outerWidth(true)));
	})
	$(selector).width(width);

}

/**
 * Image preloading script
 *
 * credits: http://engineeredweb.com/blog/09/12/preloading-images-jquery-and-javascript
 */
(function($) {
  var cache = [];
  // Arguments are image paths relative to the current page.
  $.preLoadImages = function() {
    var args_len = arguments.length;
    for (var i = args_len; i--;) {
      var cacheImage = document.createElement('img');
      cacheImage.src = arguments[i];
      cache.push(cacheImage);
    }
  }
})(jQuery)