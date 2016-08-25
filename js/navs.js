jQuery(function () {
	var mobile_nav = jQuery(".mobile-nav");
	var logged = jQuery("html").data("logged");
	var button = jQuery(".menu-button");
	var adminbar = jQuery("#wpadminbar");
	var main_nav = jQuery(".main-nav");
	var main_wrapper = jQuery(".main-wrapper");

	if (logged) {
		main_nav.css("top", adminbar.innerHeight());
		mobile_nav.css("top", main_nav.innerHeight() + adminbar.innerHeight());
	} else {
		mobile_nav.css("top", main_nav.innerHeight());
	}

	main_wrapper.css("padding-top", main_nav.innerHeight());

	button.click(function () {
		if (jQuery(this).hasClass("close-nav")) {
			mobile_nav.css({"transform": "translateX(-100%)"});
			main_wrapper.css({"transform": "translateX(0)"});
			jQuery("body").css("overflow", "visible");
			jQuery(this).removeClass("close-nav");
			main_nav.removeClass("side-nav-open");
		} else {
			mobile_nav.css({"transform": "translateX(0)"});
			main_wrapper.css({"transform": "translateX(100%)"});
			jQuery("body").css("overflow", "hidden");
			jQuery(this).addClass("close-nav");
			main_nav.addClass("side-nav-open");
		}
	});
});
