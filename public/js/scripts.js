/*!
* Start Bootstrap - New Age v6.0.7 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
// 

jQuery(document).ready(function ($) {
    var alterClass = function () {
        var ww = document.body.clientWidth;
        if (ww < 600) {
            $("#judul").attr('style', 'font-size: 25px !important');
            $("#phone-screen").css("display", "block");
            $("#desktop-screen").css("display", "none");
            $("#supporter-mobile").css("display", "block");
            $("#supporter-desktop").css("display", "none");
            $(".phone-feature").css("padding-top", "35px");
            $(".features-repsonsive").attr('style', 'margin-bottom: 0px !important');
            $('.phone-feature').addClass('text-center');
        } else if (ww >= 601) {
            // $('#judul').addClass('display-10');
            // $('#judul').removeClass('display-6');
            $("#judul").attr('style', 'font-size: 65px !important');
            $("#phone-screen").css("display", "none");
            $("#desktop-screen").css("display", "block");
            $("#supporter-mobile").css("display", "none");
            $("#supporter-desktop").css("display", "block");
            $(".phone-feature").css("margin-top", "0px");
            $(".features-repsonsive").attr('style', 'margin-bottom: 150px !important');
            $('.phone-feature').removeClass('text-center');
        };

    };
    $(window).resize(function () {
        alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
});

jQuery(document).ready(function ($) {
    var alterClass = function () {
        var ww = document.body.clientWidth;
        if (ww < 1350) {
            $("#phone-team").css("display", "block");
            $("#desktop-team").css("display", "none");
        } else if (ww >= 1351) {
            $("#phone-team").css("display", "none");
            $("#desktop-team").css("display", "block");
        };
    };
    $(window).resize(function () {
        alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
});

(function ($) {
    "use strict";
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 0) {
            $(".fixed-top").addClass("shadow-sm");
        } else {
            $(".fixed-top").removeClass("shadow-sm");
        }
    });

    $(".navbar-toggler").on("click", function () {
        $(".fixed-top").addClass("shadow-sm");
        box.removeClass("box");
    })
})(jQuery);

window.addEventListener('DOMContentLoaded', event => {

    var swiper = new Swiper(".slide-content", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
            950: {
                slidesPerView: 4,
            },
        },
    });

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


