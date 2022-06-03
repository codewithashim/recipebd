$(".hero-carousel").owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	autoplay: true,
	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 1,
		},
		1000: {
			items: 1,
		},
	},
});

$(".recipe-carousel").owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: false,

	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 2,
		},
		1000: {
			items: 3,
		},
	},
});
// /* -------------------------------- DashBoard ------------------------------- */

// /* ----------------------------- Menu Show Hide ----------------------------- */
