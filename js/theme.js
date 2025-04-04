(function ($) {
    "use strict";

    //* Sticky Navbar
    function stickyNavbar() {
        if ($('#main_navbar').length) {
            $('#main_navbar').affix({
                offset: {
                    top: 10,
                    bottom: function () {
                        return (this.bottom = $('.footer_area').outerHeight(true));
                    }
                }
            });
        }
    }

    //* Change Navbar Background on Scroll
    function changeNavbarBg() {
        if ($('.navbar.navbar-default').length) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll >= 120) {
                    $(".navbar.navbar-default").addClass("menu_bg");
                } else {
                    $(".navbar.navbar-default").removeClass("menu_bg");
                }
            });
        }
    }

    //* Book Search Form Toggle
    function bookSearchForm() {
        if ($('.nav_searchFrom').length) {
            $('.nav_searchFrom').on('click', function () {
                $('.searchForm').toggleClass('show');
                return false;
            });
            $('.form_hide').on('click', function () {
                $('.searchForm').removeClass('show');
            });
        }
    }

    //* Counter for Stats (e.g., Books Sold, Happy Customers)
    function statsCounter() {
        if ($('.counter').length) {
            $('.counter').counterUp({
                delay: 10,
                time: 400
            });
        }
    }

    // Parallax Effect for Banners
    $(function () {
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 40
        });
    });

    //* Customer Reviews Carousel
    function customerReviews() {
        if ($('.customer_reviews_area').length) {
            $('.customer_reviews_area').owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                navText: [
                    '<i class="lnr lnr-arrow-left"></i><h5>Previous</h5>',
                    '<h5>Next</h5><i class="lnr lnr-arrow-right"></i>'
                ]
            });
        }
    }

    //* Featured Books Carousel
    function featuredBooksCarousel() {
        if ($('.featured_books_area').length) {
            $('.featured_books_area').owlCarousel({
                loop: true,
                margin: 20,
                items: 3,
                nav: true,
                navText: [
                    '<i class="lnr lnr-arrow-left"></i>',
                    '<i class="lnr lnr-arrow-right"></i>'
                ],
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
        }
    }

    //* Function Calls
    stickyNavbar();
    changeNavbarBg();
    bookSearchForm();
    new WOW().init(); // Initialize animations
    statsCounter();
    customerReviews();
    featuredBooksCarousel();

})(jQuery);
