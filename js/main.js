jQuery(function () {
	var adminbar = jQuery("#wpadminbar");
	var nav = jQuery(".main-nav");
	var logged = jQuery("html").data("logged");
	var featured_posts = jQuery(".featured-posts");
	var _window = jQuery(window);
	var hero = jQuery("#hero");
	var parallax_container = jQuery(".parallax-container");
	var main_sidebar = jQuery("#main-sidebar");

	featured_posts.css("height", jQuery(window).height() * .7);

	if (!logged) {
		hero.css("height", _window.innerHeight() - nav.innerHeight());
	} else {
		hero.css("height", _window.innerHeight() - (nav.innerHeight() + adminbar.innerHeight()));
	}

	_window.resize(function () {
		featured_posts.css("height", jQuery(window).height() * .7);
		if (!logged) {
			hero.css("height", _window.innerHeight() - nav.innerHeight());
		} else {
			hero.css("height", _window.innerHeight() - (nav.innerHeight() + adminbar.innerHeight()));
		}
	});

	_window.scroll(function (e) {
		parallax_container.css("background-position", "50% -" + (_window.scrollTop() ) + "px");
	});

});
