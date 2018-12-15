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





// ハンバーガーメニュー
   console.log('app.jpチェック');

   $('.js-hamburger').on('click', function() {
    let isActive = $(this).hasClass('on');
    if (isActive) {
        $('.js-hamburger').toggleClass('on');
    } else {
        $('.js-hamburger').toggleClass('on');
    };

    



   }); //ハンバーガーメニュークリックの時の挙動





}); //jQuery閉じタグ