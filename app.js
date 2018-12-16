$(function(){

//Swiper Plugin
  let mySwiper = new Swiper('.swiper-container',{
      slidesPerView: 4,
      loop: true,
      autoplay: {
        delay:3000,
        stopOnLast: false,
      },
      effect: 'fade',
      })


// ハンバーガーメニュー
   console.log('app.jpチェック');
   $('.js-hamburger').on('click', function() {
        let isActive = $(this).hasClass('on');
        if (isActive) {
            $('#drower-bg').fadeOut(600);
        } else {
            $('#drower-bg').fadeIn(600);
        };
        $(document.body).toggleClass('scroll-prevent');
        $('.js-hamburger').toggleClass('on');
        $('.js-drower').toggleClass('on');
        $('#drower-bg').toggleClass('on');
   }); //ハンバーガーメニュークリックの時の挙動

}); //jQuery閉じタグ