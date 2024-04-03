window.addEventListener("scroll", function(){
  const header = document.getElementById("header")
  if(document.getElementById("swiper").getBoundingClientRect().bottom<92){
    header.style.backgroundColor="#282F35"
  }else{
    header.style.cssText=""
  }
});

document.getElementById("menubutton").addEventListener("click", function(){
  this.classList.toggle("active")
  document.getElementById("nav").classList.toggle("active")
  document.getElementById("header-left").classList.toggle("active")
})

for (let i = 0; i < document.querySelectorAll("nav a").length; i++) {
  const element = document.querySelectorAll("nav a")[i];
  element.addEventListener("click", function(){
    document.getElementById("menubutton").classList.toggle("active")
    document.getElementById("nav").classList.toggle("active")
    document.getElementById("header-left").classList.toggle("active")
  })
}

const swiper = new Swiper('.swiper', {
  // Optional parameters
  // direction: 'vertical',
  loop: true,

  autoplay: {
    delay:3000
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault()

    const target = document.querySelector(link.hash),
          adjust = 100,
          offsetTop = window.pageYOffset + target.getBoundingClientRect().top - adjust

    window.scrollTo({
      top: offsetTop,
      behavior: "smooth"
    })
  })
})