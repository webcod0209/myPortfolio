document.getElementById("menu-button").addEventListener("click", function(){
  this.classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
  document.getElementById("mask").classList.toggle("active");
});

for (let i = 0; i < document.querySelectorAll("nav li").length; i++) {
  const element = document.querySelectorAll("nav li")[i];
  element.addEventListener("click", function(){
    document.getElementById("menu-button").classList.toggle("active");
    document.getElementById("nav").classList.toggle("active");
    document.getElementById("mask").classList.toggle("active");
  })
}

window.addEventListener("scroll", function(){
  const headerBg = document.getElementById("header")
  if (document.getElementById("main-visual").getBoundingClientRect().bottom<90) {
    headerBg.style.backgroundColor="#525252";
  }else{
    headerBg.style.backgroundColor="";
  }
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