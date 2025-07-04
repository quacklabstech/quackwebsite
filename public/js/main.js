(function ($) {
    
    "use strict";
    // desktop menu start 
    // changes by Alok Kumar Gochhyat || date - 4/1/2023 
    // opn menu 
    $('#desktopHumburger').on('click', function(){
         $('.desktop-burger-menu').addClass('desktop-burger-menu-active');

    });
    // close menu 
    $('#menuCrossIcon').on('click', function(){
        $('#desktopMenuContainer').removeClass('desktop-burger-menu-active');
    });
    $('.right-menu-overlayer').on('click', function(){
        $('#desktopMenuContainer').removeClass('desktop-burger-menu-active');
    });
    // desktop menu end 

    // mobile menu start 
    var zeynep = $('.zeynep').zeynep();
 
    // handle zeynepjs overlay click
    $('.zeynep-overlay').on('click', function () {
      zeynep.close()
    })
  
    // open zeynepjs side menu
    $('#MobileHumburger').on('click', function () {
      zeynep.open()
    })
    //dropdown menu
    $('.productmenu').on('click', function(){
        $('.solutions').hide(200);
        $('.product').toggle(300);
    });
    $('.solutionsmenu').on('click', function(){
        $('.product').hide(200);
        $('.solutions').toggle(300);
    });
    // mobile menu end 

    window.addEventListener("load", function () {
        var preloadpage = document.getElementById("page-load");
        preloadpage.style.display = "none";
    });
    var Nav = new hcOffcanvasNav("#main-nav", {
        disableAt: false,
        customToggle: ".toggle",
        levelSpacing: 40,
        navTitle: "Navigation Menu",
        levelTitles: true,
        labelClose: false,
        levelTitleAsBack: true,
        closeOnClick: true,
        insertClose: true,
        closeActiveLevel: true,
        insertBack: true,
        swipeGestures: true,
    });
    function updateScroll() {
        if ($(window).scrollTop() >= 80) {
            $(".ree-header").addClass("sticky");
        } else {
            $(".ree-header").removeClass("sticky");
        }
    }
    $(function () {
        $(window).scroll(updateScroll);
        updateScroll();
    });
    $('[data-toggle="tooltip"]').tooltip();
    $(window).on("load", function () {
        $(".hero-brands").owlCarousel({
            items: 6,
            nav: false,
            dots: false,
            autoplay: true,
            loop: true,
            center: false,
            margin: 10,
            autoplayTimeout: 300000,
            autoplayHoverPause: true,
            autoHeight: true,
            smartSpeed: 2000,
            responsive: { 0: { items: 2 }, 520: { items: 3 }, 768: { items: 4 }, 1200: { items: 6 }, 1400: { items: 6 }, 1600: { items: 6 } },
        });
    });
    $(window).on("load", function () {
        $(".full-work-block").owlCarousel({
            items: 3,
            nav: true,
            dots: false,
            autoplay: false,
            loop: true,
            center: false,
            margin: 20,
            autoplayTimeout: 35000,
            autoplayHoverPause: true,
            autoHeight: true,
            smartSpeed: 1000,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: { 0: { items: 1 }, 520: { items: 1 }, 768: { items: 2 }, 1200: { items: 3 }, 1400: { items: 3 }, 1600: { items: 3 } },
        });
    });
    $(window).on("load", function () {
        $(".home-review-slider").owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            autoplay: false,
            loop: true,
            center: true,
            margin: 20,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            autoHeight: true,
            smartSpeed: 2000,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        });
    });
    $(window).on("load", function () {
        $(".testimonial-card-b").owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: true,
            dotsContainer: "#testimonials-avatar",
            smartSpeed: 500,
            responsive: { 0: { items: 1 }, 768: { items: 1 }, 1024: { items: 1 }, 1400: { items: 1 } },
        });
    });
    $(window).on("load", function () {
        $(".trust-review ").owlCarousel({ items: 1, nav: false, dots: true, autoplay: true, loop: true, center: true, margin: 20, autoplayTimeout: 6000, autoplayHoverPause: true, autoHeight: true, smartSpeed: 2000 });
    });
    $(window).on("load", function () {
        $(".full-work-app").owlCarousel({
            items: 4,
            nav: true,
            dots: false,
            autoplay: false,
            loop: true,
            center: false,
            margin: 20,
            stagePadding: 90,
            autoplayTimeout: 35000,
            autoplayHoverPause: true,
            autoHeight: true,
            smartSpeed: 1000,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: { 0: { items: 1, stagePadding: 40 }, 520: { items: 1, stagePadding: 40 }, 768: { items: 2 }, 1200: { items: 3 }, 1400: { items: 4 }, 1600: { items: 4 } },
        });
    });
    $(window).on("load", function () {
        $(".ree-ca-service").owlCarousel({
            items: 3,
            nav: false,
            dots: false,
            autoplay: false,
            loop: true,
            center: false,
            margin: 20,
            autoplayTimeout: 2500000,
            autoplayHoverPause: true,
            autoHeight: true,
            smartSpeed: 1500,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: { 0: { items: 1 }, 520: { items: 1 }, 768: { items: 2 }, 1200: { items: 3 }, 1400: { items: 3 }, 1600: { items: 3 } },
        });
    });
    $(window).on("load", function () {
        $(".hero-owl").owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            autoplay: true,
            loop: true,
            center: false,
            margin: 20,
            autoplayTimeout: 6000,
            autoplayHoverPause: false,
            autoHeight: true,
            smartSpeed: 800,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        });
    });
    $(window).on("load", function () {
        $(".app-screenss").owlCarousel({
            items: 5,
            nav: false,
            dots: true,
            autoplay: true,
            loop: true,
            center: false,
            margin: 30,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            autoHeight: true,
            smartSpeed: 2000,
            responsive: { 0: { items: 2 }, 520: { items: 3 }, 768: { items: 4 }, 1200: { items: 4 }, 1400: { items: 5 }, 1600: { items: 5 } },
        });
    });
    $(window).on("load", function () {
        $(".counter").counterUp({ delay: 10, time: 3000 });
    });
    $(window).on("load", function () {
        $(".video-popup").magnificPopup({ type: "iframe", mainClass: "mfp-fade", removalDelay: 160 });
    });
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
    });
    AOS.init({ offset: 10, delay: 0, duration: 1000, easing: "ease", once: true, mirror: true, anchorPlacement: "top-bottom" });
    var $nav = $("li.megamenu");
    $nav.hover(
        function () {
            $(this).addClass("hover");
        },
        function () {
            $(this).removeClass("hover");
        }
    );
})(jQuery);


