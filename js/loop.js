jQuery(window).on('load', function () {
	jQuery('.posts-container').isotope({
		itemSelector: '.post-container',
		percentPosition: true,
		originLeft: true
	});

	jQuery(".features-container").isotope({
		layoutMode: "fitRows",
		itemSelector: ".feature-container",
		percentPosition: true,
		originLeft: true
	});
});
