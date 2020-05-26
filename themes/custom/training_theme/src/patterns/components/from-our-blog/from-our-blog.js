!((document, Drupal, $) => {
  'use strict';

  /**
   * Use this to describe what your behavior does.
   */
  Drupal.behaviors.blogSlider = {
    attach: function(context) {
      $('.from-our-blog__items', context).slick({
        autoplay: false,
        arrows: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true,
        mobileFirst: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: 'unslick'
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 440,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    }
  };
})(document, Drupal, jQuery);
