$(document).ready(function () {

    /***************** Video popups ******************/
    $('.magnific').magnificPopup({
    type:'image',
    removalDelay: 300,
    mainClass: 'mfp-fade'
  });

  $('.magnific-youtube').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 300,
    preloader: false,
    fixedContentPos: false,
    items: {
         src: 'https://www.youtube.com/watch?v=OuIwRg8BkqY'
       },
   iframe: {
         markup: '<div class="mfp-iframe-scaler">'+
                 '<div class="mfp-close"></div>'+
                 '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                 '</div>',
         patterns: {
             youtube: {
                 index: 'youtube.com/',
                 id: 'v=',
                 src: 'https://www.youtube.com/embed/%id%?autoplay=1'
             }
          },
          srcAction: 'iframe_src',
      }
  });

$('.magnific-all').each(function() {
  var $container = $(this);
  var $imageLinks = $container.find('.item');

  var items = [];
  $imageLinks.each(function() {
    var $item = $(this);
    var type = 'image';
    if ($item.hasClass('magnific-youtube')) {
      type = 'iframe';
    }
    var magItem = {
      src: $item.attr('href'),
      type: type
    };
    magItem.title = $item.data('title');
    items.push(magItem);
    });

  $imageLinks.magnificPopup({
    mainClass: 'mfp-fade',
    items: items,
    gallery:{
        enabled:true,
        tPrev: $(this).data('prev-text'),
        tNext: $(this).data('next-text')
    },
    type: 'image',
    callbacks: {
      beforeOpen: function() {
        var index = $imageLinks.index(this.st.el);
        if (-1 !== index) {
          this.goTo(index);
        }
      }
    }
  });
});


    /***************** Navbar-Collapse ******************/

    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    /***************** Page Scroll ******************/

    $(function () {
        $('a.page-scroll').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    /***************** Scroll Spy ******************/

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    /***************** Owl Carousel ******************/
    var totalItems = $('.carousel-picture').length;
    // If there is only one slide
    if (totalItems < 2) {
        // Set loop option variable to false
        var isLooped = false;
    } else {
        // Set loop option variable to true
        var isLooped = true;
    }

    $("#owl-hero").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 200,
        singleItem: true,
        transitionStyle: "fadeUp",
        autoPlay: isLooped,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]

    });


    /***************** Full Width Slide ******************/

    var slideHeight = $(window).height();

    $('#owl-hero .item').css('height', slideHeight);

    $(window).resize(function () {
        $('#owl-hero .item').css('height', slideHeight);
    });
    /***************** Owl Carousel Testimonials ******************/

    $("#owl-testi").owlCarousel({

        navigation: false, // Show next and prev buttons
        paginationSpeed: 700,
        singleItem: true,
        transitionStyle: "fadeUp",
        autoPlay: true

    });

    /***************** Wow.js ******************/

    new WOW().init();

    /***************** Preloader ******************/

    var preloader = $('.preloader');
    $(window).load(function () {
        preloader.remove();
    });
})
