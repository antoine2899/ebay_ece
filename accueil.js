$(document).ready(function () {
    $('.header').height($(window).width()*0.35);
  })
  $(window).on('resize', function () {
    $('.header').height($(window).width()*0.35);
});
  $(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 50,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          renderBullet: function (index, className) {
          return '<span class="' + className + '"></span>';
        },
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          1000: {
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 4
          },

          500: {
            slidesPerView: 2,
            spaceBetween: 40,
            slidesPerGroup: 2
          },

          800: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3
          }
        }
      });
  })

  