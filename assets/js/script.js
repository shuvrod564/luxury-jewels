 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) {
  // $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        // console.log(scroll_top);
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        if (scroll_top === 0) {
          $('.smart-scroll').removeClass('scrolled-down').removeClass('scrolled-up');
        }
        last_scroll_top = scroll_top;
    });
  }



  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");

  AOS.init({
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 70, // offset (in px) from the original trigger point
    delay: 100, // values from 0 to 3000, with step 50ms
    duration: 800, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

  });
 
  $('.productSlider').slick({
    centerMode: false, 
    slidesToShow: 4,
    autoplay:true,
    mobileFirst:true,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      },
      {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      },
      {
          breakpoint: 300,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }
    ]
  });
  $('.testimonialCarousel').slick({
    centerMode: false, 
    slidesToShow: 3,
    autoplay:true,
    mobileFirst:true,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
      },
      {
          breakpoint: 600,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      },
      {
          breakpoint: 300,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
      }
    ]
  });
    
   
 
})(jQuery);
 
// Open Close Responsive Search MEnu
let menu = document.querySelector("#searchMenu");
function openSearchBar() {
  menu.classList.add("js--open");
}
function closeSearchBar() {
  menu.classList.remove("js--open");
}


var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"], .hasTooltip'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl, {
    html: true
  });
});

 