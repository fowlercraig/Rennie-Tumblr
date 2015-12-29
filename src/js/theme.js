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

	//var infinite = new Waypoint.Infinite({
	//	element: $('.infinite-container')[0],
	//	onAfterPageLoad: function(){
	//		console.log('boom');
	//		$('.photo_grid').isotope('appended');
	//	},
	//});

  new Waypoint.Infinite({
      element: $(".infinite-container")[0],
      more: ".infinite-more-link",
      items: ".infinite-container > .infinite-item",
      onBeforePageLoad: function () {
          $("#loading").fadeIn(200)
      },
      onBeforeInsertItems: function ($items) {
          $items.css({opacity: 0, transform: 'scale(0.001)'})
      },
      onAfterPageLoad: function ($items) {
          $("#loading").fadeOut(200)
          $('.photo_grid').imagesLoaded(function () {
              $('.photo_grid').isotope("appended", $items)
          })
      },
  })

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