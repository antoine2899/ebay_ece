$(document).ready(function () {
    $('.header').height($(window).width()*0.35);
  })
  $(window).on('resize', function () {
    $('.header').height($(window).width()*0.35);
});
  $(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
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
      });
  })

  