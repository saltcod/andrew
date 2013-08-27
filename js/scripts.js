jQuery(function($) {

 		 
// For next/prev navigation in the sidebar
// If on the first image when there's only a "next" link 
// and no previous link, nudge that image out to the left

	if ( $('.nav-next').length == 0 ) {
		$('.nav-previous').addClass('no-previous');
	};

	$(window).load(function(){
		init();
	});


	function init() {
		var illustrations = $('#illustrations');
 		
 		illustrations.fadeIn();
 		$('#loader').fadeOut(700);

		filters = {};

		illustrations.imagesLoaded( function(){ 
			illustrations.isotope({
				itemSelector : '.post-thumbnail',
				transformsEnabled: false,
				masonry: {
					columnWidth: 165,
					gutterWidth: 20
				}
			});
		});
	}
	 

}); //Last
 