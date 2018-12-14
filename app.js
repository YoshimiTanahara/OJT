$(function(){
  let mySwiper = new Swiper('.swiper-container',{
      slidesPerView: 4,
      loop: true,
      autoplay: {
        delay:3000,
        stopOnLast: false,
      },
      effect: 'fade',
      })
    });