// @codekit-append "_notifications.js"
// @codekit-append "_mobilemenu.js"
// @codekit-append "_photoswipe.js"

function packery(){
	var $container = $('.photo_grid');
	$container.imagesLoaded( function() {
		$container.isotope({
  			itemSelector: '.photo_grid--cell',
  			percentPosition: true,
  			masonry: {
    			columnWidth: '.photo_grid--cell',
    			//gutter: 10
  			}
		});
		infiniteScroll();
	});
}

function infiniteScroll(){

	var infinite = new Waypoint.Infinite({
		element: $('.infinite-container')[0],
		onAfterPageLoad: function(){
			console.log('boom');
			$('.photo_grid').isotope('appended');
		},
	});

}

function formstoneDefault(){
	$(".wallpaper").background();
	$(".carousel").carousel();
	$(".swap").swap();
}

$(document).ready(function(){
	packery();
	formstoneDefault();
});