$(document).ready(function () {
    $('#slider .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ["<div class='carousel-control-prev-icon'></div>", "<div class='carousel-control-next-icon'></div>"],
        dots: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3800,
        autoplayHoverPause: false,
    });
});

$(document).ready(function () {
    $('#series-list .list .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3800,
        autoplayHoverPause: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                center: false,
                dots: true,
                dotsEach: 1,
            },
            968: {
                items: 1,
                center: false,
                dots: true,
                dotsEach: 2,
            },
            1000: {
                items: 4,
                center: true,
                dots: true,
                dotsEach: 1,
            }
        }
    });
});
