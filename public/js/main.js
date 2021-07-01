$(document).ready(function() {
    $("#carrusel1").owlCarousel({
        loop: false,
        rewind: true,
        nav: false,
        dots: false,
        items: 6,
        margin: 30,
        autoplay: true,
        smartSpeed: 700,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            376: {
                items: 2,
                margin: 10
            },
            576: {
                items: 2,
                margin: 10
            },
            768: {
                items: 3,
                margin: 10
            },
            992: {
                items: 5,
                margin: 10
            },
            1200: {
                items: 6,
                margin: 10
            }
        }
    });

    $("#carrusel2").owlCarousel({
        loop: false,
        rewind: true,
        nav: false,
        dots: false,
        items: 1,
        margin: 30,
        autoplay: true,
        smartSpeed: 700,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            376: {
                items: 1,
                margin: 10
            },
            576: {
                items: 1,
                margin: 10
            },
            768: {
                items: 2,
                margin: 10
            },
            992: {
                items: 3,
                margin: 10
            },
            1200: {
                items: 3,
                margin: 10
            }
        }
    });

    $('.custom-prev1').click(function(e) {
        e.preventDefault();
        $('.carrusel2').trigger('prev.owl.carousel');
    });
    $('.custom-next1').click(function(e) {
        e.preventDefault();
        $('.carrusel2').trigger('next.owl.carousel');
    });

});