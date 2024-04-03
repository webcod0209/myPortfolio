import "./style.scss"

// フェードイン
document.addEventListener("scroll" ,function(){
  for (let i = 0; i < document.querySelectorAll(".front-page .works__item, .blog__item").length; i++) {
    const element = document.querySelectorAll(".front-page .works__item, .blog__item")[i];
    if (element.getBoundingClientRect().top<606) {
      element.classList.add("fade");
    }
  }
})

// ドロワーメニュー
document.getElementById("about").addEventListener("click" ,function(){
  this.classList.toggle("active");
  document.getElementById("drawer").classList.toggle("active");
})

// スムーススクロール
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()

    const target = document.querySelector(link.hash),
          adjust = 290,
          offsetTop = window.pageYOffset + target.getBoundingClientRect().top - adjust

    window.scrollTo({
      top: offsetTop,
      behavior: "smooth"
    })
  })
})

// バーガーメニュー
document.getElementById("menu-button").addEventListener("click" ,function(){
  this.classList.toggle("active");
  document.getElementById("header__nav").classList.toggle("active");
  document.getElementById("mask").classList.toggle("active");
  document.querySelector("body").classList.toggle("active");
})

for (let i = 0; i < document.querySelectorAll(".nav__link").length; i++) {
  const element = document.querySelectorAll(".nav__link")[i];
  element.addEventListener("click", function(){
    document.getElementById("menu-button").classList.toggle("active")
    document.getElementById("header__nav").classList.toggle("active")
    document.getElementById("mask").classList.toggle("active")
    document.querySelector("body").classList.toggle("active");
  })
}

// スワイプ機能
jQuery(function($) {

  $(function() {
    var checkExistPostsPrev = false;
    var checkExistPostsNext = false;
    var direction, position;

    function ExistPosts() {
      
      if ($('body').hasClass('has-prev')) {
        checkExistPostsPrev = true;
      }

      if ($('body').hasClass('has-next')) {
        checkExistPostsNext = true;
      }
    }

    function onTouchStart(event) {
      position = getPosition(event);
    }

    function onTouchMove(event) {
      if (position < getPosition(event)) {
        if ((position - getPosition(event)) < -70) {
          direction = 'left';
        }
      } else {
        if ((position - getPosition(event)) > 70) {
          direction = 'right';
        }
      }
    }

    function onTouchEnd(event) {
      if ((direction == 'left') && (checkExistPostsPrev)) {

        var prevPostUri = $('.touch').data('prev-post');
        $('.touch').addClass('to-prev');
        setTimeout(function () {
          window.location.href = prevPostUri;
        }, 1000);
      } else if ((direction == 'right') && (checkExistPostsNext)) {

        var nextPostUri = $('.touch').data('next-post');
        $('.touch').addClass('to-next');
        setTimeout(function () {
          window.location.href = nextPostUri;
        }, 1000);
      }
    }

    function getPosition(event) {
      return event.originalEvent.touches[0].pageX;
    }

    ExistPosts();

    $('.touch').on('touchstart', onTouchStart);
    $('.touch').on('touchmove', onTouchMove);
    $('.touch').on('touchend', onTouchEnd);
  });
  // worksページフェードイン
  $(window).on("load", function() {
    $('.archive__works__item').addClass('fade');
    $('.single__works__item').addClass('fade');
    $('.single__blog__item').addClass('fade');
  });

});
gsap.from(".logo__stagger", {
  y: 30,
  opacity: 0,
  rotate: 90,
  skewX: 90,
  duration: .5,
  stagger: .1
});