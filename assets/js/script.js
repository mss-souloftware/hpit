

(function ($) {
    $('#heroslider').slick({
        infinite: true,
        slidesToShow: 1,
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


document.addEventListener("DOMContentLoaded", function() {
    // Get all navigation items
    const navigationItems = document.querySelectorAll(".fullpage-navigation__item button");

    // Add click event listener to each navigation item
    navigationItems.forEach(item => {
        item.addEventListener("click", function() {
            // Remove 'active' class from all navigation items
            navigationItems.forEach(navItem => {
                navItem.parentNode.classList.remove("fullpage-navigation__item--active");
            });

            // Add 'active' class to the clicked navigation item
            this.parentNode.classList.add("fullpage-navigation__item--active");

            // Get the section ID to scroll to
            const sectionId = this.getAttribute("data-section");

            // Scroll to the corresponding section
            const section = document.getElementById(`section${sectionId}`);
            section.scrollIntoView({ behavior: 'smooth' });
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const img = document.querySelector('.videoplay');
    const video = document.getElementById('videoPlayer');

    // Add click event listener to the image
    img.addEventListener('click', function() {
        // Hide the image
        img.classList.add('hide');
        // Show the video
        video.classList.remove('hide');
        // Play the video
        video.play();
    });

    // Add pause event listener to the video
    video.addEventListener('pause', function() {
        // Show the image
        img.classList.remove('hide');
        // Hide the video
        video.classList.add('hide');
    });
});


(function($) {
    $(document.body).on('click', 'ul#megamenu1 li a', function() {
      // Get the inner text content of the clicked anchor element
      $('ul#megamenu1 li a').removeClass('active'); 
      $(this).addClass('active'); 
            const anchorText = $(this).text().trim();
          
            // Check if the anchorText matches a condition
            if (anchorText === 'Business') {
                $('#megamenu3').removeClass('hide');   
                $('#megamenu2').addClass('hide');  
                $('#megamenu4').addClass('hide');
                $('#megamenu5').addClass('hide');
             
            }

          else if (anchorText === 'Engineering'){
            $('#megamenu3').addClass('hide');   
                $('#megamenu2').addClass('hide');  
                $('#megamenu4').removeClass('hide');
                $('#megamenu5').addClass('hide');
            }


            else if (anchorText === 'Mission'){
                $('#megamenu3').addClass('hide');   
                    $('#megamenu2').addClass('hide');  
                    $('#megamenu4').addClass('hide');
                    $('#megamenu5').removeClass('hide');
                }

                else if (anchorText === 'Technology'){
                    $('#megamenu3').addClass('hide');   
                        $('#megamenu2').removeClass('hide');  
                        $('#megamenu4').addClass('hide');
                        $('#megamenu5').addClass('hide');
                    }

           
    })
}
)(jQuery);
