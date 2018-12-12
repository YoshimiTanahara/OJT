$(function(){
  let mySwiper = new Swiper('.swiper-container',{
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
  effect: 'fade',
  })
});