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
});
