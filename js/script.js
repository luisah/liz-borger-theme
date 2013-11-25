(function($) {
	$(document).ready(function() {
		var $container = $('.home #main');

		var ar = $container.children();
		ar.sort(function(a,b){
			// Get a random number between 0 and 10
			var temp = parseInt( Math.random() * 10 );
			// Get 1 or 0, whether temp is odd or even
			var isOddOrEven = temp % 2;
			// Get +1 or -1, whether temp greater or smaller than 5
			var isPosOrNeg = temp > 5 ? 1 : -1;
			// Return -1, 0, or +1
			return( isOddOrEven * isPosOrNeg );
		});
		$container.html(ar);

		$container.isotope({
			masonry: {
				columnWidth: 176
			}
		});

		$( ".about-menu" ).click(function() {
			$( ".about-menu ul" ).hide();
			$( ".about-content" ).show();
		});

		$( ".about-close" ).click(function() {
			$( ".about-menu ul" ).show();
			$( ".about-content" ).hide();
		});

		$( ".list-menu" ).click(function() {
			$( ".list-menu ul" ).hide();
			$( ".list-content" ).show();
		});

		$( ".projects-list-close" ).click(function() {
			$( ".list-menu ul" ).show();
			$( ".list-content" ).hide();
		});

		$( ".single-menu" ).click(function() {
			$( ".single-menu ul" ).hide();
			$( ".entry-content" ).show();
		});

		$( ".single-close" ).click(function() {
			$( ".single-menu ul" ).show();
			$( ".entry-content" ).hide();
		});

		$("a[href='#top']").click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

	});
})(jQuery);