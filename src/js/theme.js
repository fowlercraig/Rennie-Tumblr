// @codekit-append "_notifications.js"
// @codekit-append "_mobilemenu.js"

function waypoint(){
	var waypoint = new Waypoint({
	  element: document.getElementById('image'),
	  handler: function(direction) {
	    alert('Close that shit');
	    $.magnificPopup.close();
	  },
	  offset: function() {
	    return -this.element.clientHeight
	  }
	});
}

function imageZoom(){
	$('.photo_zoom').magnificPopup({
		type: 'ajax',
		alignTop: true,
		overflowY: 'auto',
		callbacks: {
		  parseAjax: function(mfpResponse) {
		    mfpResponse.data = $(mfpResponse.data).find('#image');
		    console.log('Ajax content loaded:', mfpResponse);
		  },
		  ajaxContentAdded: function() {
		    console.log(this.content);
		    waypoint();
		  }
		}
	});
}

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
		})
	});
}

function formstoneDefault(){
	$(".wallpaper").background();
	$(".carousel").carousel();
	$(".swap").swap();
}

$(document).ready(function(){

	imageZoom();
	packery();
	formstoneDefault();

});