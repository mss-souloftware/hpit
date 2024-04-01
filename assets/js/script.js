

(function ($) {
    $('#spotLightSlide').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        // responsive: [
        //     {
        //         breakpoint: 768,
        //         settings: {
        //             arrows: false,
        //             dosts: true,
        //             slidesToShow: 3
        //         }
        //     },
        //     {
        //         breakpoint: 480,
        //         settings: {
        //             arrows: false,
        //             dosts: true,
        //             slidesToShow: 1
        //         }
        //     }
        // ]
    });

    $('#clientSlide').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
    })

    $(document).ready(function(){
        $(".language-switcher nav ul li a").click(function() {
            var language = $(this).data("lang"); // Get the value of data-lang attribute
            $("#lang-open option").text(language); // Insert the language value into the div
        });
        
        $("#lang-open").click(function(){
            $(".language-switcher").toggleClass("hide");
        });
        $("#menuToggler").click(function(){
            $("#mega-menu").css("display", "none"); // Hide the mega menu when toggling
            $(".navbar-nav li").removeClass("active");
            $(".top-menu").toggleClass("active");
            if ($(".top-menu").hasClass("active")) {
                $("div#menuToggler img").attr("src", "assets/img/icons/hamburger-colse.svg");
            } else {
                $("div#menuToggler img").attr("src", "assets/img/icons/hamburger-open.svg");
            }
        });
    });
    
 
   
}(jQuery));