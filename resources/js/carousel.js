$(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 4000,
    });

    var clickEvent = false;
    $('#myCarousel')
        .on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this)
                .parent()
                .addClass('active');
        })
        .on('slid.bs.carousel', function(e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current
                    .removeClass('active')
                    .next()
                    .addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li')
                        .first()
                        .addClass('active');
                }
            }
            clickEvent = false;
        });
    //Events that reset and restart the timer animation when the slides change
    $('#transition-timer-carousel')
        .on('slide.bs.carousel', function(event) {
            $('.transition-timer-carousel-progress-bar', this)
                .removeClass('animate')
                .css('width', '0%');
        })
        .on('slid.bs.carousel', function(event) {
            $('.transition-timer-carousel-progress-bar', this)
                .addClass('animate')
                .css('width', '100%');
        });
    //Kick off the initial slide animation when the document is ready
    $('.transition-timer-carousel-progress-bar', '#transition-timer-carousel').css('width', '100%');
});
$(document).ready(function() {
    function left_trigger() {
        $('#carousel3').owlCarousel({
            autoPlay: 3000,
            stopOnHover: true,
            navigation: false,
            paginationSpeed: 1000,
            goToFirstSpeed: 2000,
            singleItem: true,
        });
        $('#carousel1').owlCarousel({
            autoPlay: 3000,
            stopOnHover: true,
            navigation: true,
            paginationSpeed: 1000,
            goToFirstSpeed: 2000,
            singleItem: true,
            autoHeight: true,
            transitionStyle: 'fade',
        });
    }
    left_trigger();

    $("[data-toggle='offcanvas']").click(function(e) {
        setTimeout(function() {
            $('#carousel1')
                .data('owlCarousel')
                .destroy();
            $('#carousel3')
                .data('owlCarousel')
                .destroy();
            left_trigger();
        }, 100);
    });
    $('#carousel4').owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
    });
});
