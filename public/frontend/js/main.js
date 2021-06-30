$(document).ready(function() {
    $("#aboutcarrusel").owlCarousel({
        loop: true,
        rewind: false,
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
                margin: 0
            },
            460: {
                items: 1,
                margin: 0
            },
            576: {
                items: 1,
                margin: 20
            },
            992: {
                items: 1,
                margin: 30
            }
        }
    });

    $("#aboutcarrusel2").owlCarousel({
        loop: true,
        rewind: false,
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
                margin: 0
            },
            460: {
                items: 1,
                margin: 0
            },
            576: {
                items: 1,
                margin: 20
            },
            992: {
                items: 1,
                margin: 30
            }
        }
    });

    $('#servicescarrusel').owlCarousel({
        loop: true,
        rewind: false,
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
                margin: 0
            },
            460: {
                items: 1,
                margin: 0
            },
            576: {
                items: 2,
                margin: 20
            },
            992: {
                items: 3,
                margin: 30
            }
        }
    });

    $('#galerycarrusel').owlCarousel({
        loop: true,
        rewind: false,
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
                margin: 0
            },
            576: {
                items: 2,
                margin: 20
            },
            992: {
                items: 3,
                margin: 30
            }
        }
    });

    $('.testimonials-slider').owlCarousel({
        loop: true,
        rewind: false,
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
                margin: 0
            },
            768: {
                items: 1
            }
        }
    });


    $('.custom-prev1').click(function(e) {
        e.preventDefault();
        $('#aboutcarrusel').trigger('prev.owl.carousel');
    });
    $('.custom-next1').click(function(e) {
        e.preventDefault();
        $('#aboutcarrusel').trigger('next.owl.carousel');
    });

    $('.custom-prev2').click(function(e) {
        e.preventDefault();
        $('#servicescarrusel').trigger('prev.owl.carousel');
    });
    $('.custom-next2').click(function(e) {
        e.preventDefault();
        $('#servicescarrusel').trigger('next.owl.carousel');
    });

    $('.custom-prev3').click(function(e) {
        e.preventDefault();
        $('#galerycarrusel').trigger('prev.owl.carousel');
    });
    $('.custom-next3').click(function(e) {
        e.preventDefault();
        $('#galerycarrusel').trigger('next.owl.carousel');
    });

});