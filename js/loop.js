jQuery(window).on('load', function () {
	jQuery('.posts-container').masonry({
		itemSelector: '.post-container',
		gutter: 0,
		percentPosition: true
	});
});
