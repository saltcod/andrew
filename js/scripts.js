jQuery(function($) {

	$(document).ready(init);

	function init() {
		var illustrations = $('#illustrations');
		filters = {};

		illustrations.imagesLoaded( function(){ 
			illustrations.isotope({
				itemSelector : '.post-thumbnail',
				transformsEnabled: false,
				masonry: {
					columnWidth: 0,
					gutterWidth: 0
				}
			});
		});
	}

}); //Last
