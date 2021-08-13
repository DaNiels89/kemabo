jQuery(document).ready(function ($) {
	$(".first-slider").slick({
		centerMode: true,
		centerPadding: "60px",
		slidesToShow: 3,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					dots: true,
					infinite: true,
					arrows: false,
					centerMode: true,
					centerPadding: "40px",
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 768,
				settings: {
					dots: true,
					infinite: false,
					arrows: false,
					centerMode: true,
					centerPadding: "40px",
					slidesToShow: 1,
				},
			},
		],
	});

	$(".team-members-slider").slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	$(window).scroll(function () {
		if (
			$(window).scrollTop() + $(window).height() >
			$(document).height() - 100
		) {
			$(".footer-upper-row").addClass("animation-hide");
		} else {
			$(".footer-upper-row").removeClass("animation-hide");
		}
	});
});
