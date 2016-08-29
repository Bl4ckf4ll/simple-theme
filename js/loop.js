jQuery(window).on('load', function () {
	jQuery('.posts-container').masonry({
		itemSelector: '.post-container',
		percentPosition: true,
		originLeft: true
	});

	jQuery(".features-container").masonry({
		itemSelector: ".feature-container",
		percentPosition: true,
		originLeft: true
	});
});
