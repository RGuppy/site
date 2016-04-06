$(function() {

	//Slider START
	var owl = $(".slider");
	owl.owlCarousel({
		itemClass: "slide-wrap",
		items: 1,
		autoplay: true,
		loop: true,
		nav: true,
		dots: true,
		autoplayTimeout: 8000,
		autoplaySpeed: 800,
	});
	$(".next").click(function() {
		owl.trigger('next.owl.carousel');
	});
	$(".prev").click(function() {
		owl.trigger('prev.owl.carousel');
	});
	//Slider END


	//PSlider START
	var powl = $(".pslider");
	powl.owlCarousel({
		itemClass: "pslide-wrap",
		items: 1,
		autoplay: true,
		loop: true,
		nav: true,
		dots: true,
		autoplayTimeout: 8000,
		autoplaySpeed: 800,
	});
	$(".pnext").click(function() {
		powl.trigger('next.owl.carousel');
	});
	$(".pprev").click(function() {
		powl.trigger('prev.owl.carousel');
	});
	//PSlider END


	$("#range_25").ionRangeSlider({
    type: "double",
    min: 1000,
    max: 3000,
    grid: true
});

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	$(".preloader").fadeOut();

});
