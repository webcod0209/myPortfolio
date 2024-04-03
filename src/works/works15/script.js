document.getElementById("menu-bottun").addEventListener("click",function(){
  this.classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
});

document.addEventListener("scroll",function(){
  if(document.getElementById("slide-left").getBoundingClientRect().top<606){
    document.getElementById("slide-left").classList.add("active-left");
  }
});

document.addEventListener("scroll",function(){
  if(document.getElementById("slide-right").getBoundingClientRect().top<606){
    document.getElementById("slide-right").classList.add("active-right");
  }
});

document.addEventListener("scroll",function(){
    if(document.getElementById("scale1").getBoundingClientRect().top<700){
      document.getElementById("scale1").classList.add("scale");
    }
    if(document.getElementById("scale2").getBoundingClientRect().top<700){
      document.getElementById("scale2").classList.add("scale");
    }
    if(document.getElementById("scale3").getBoundingClientRect().top<700){
      document.getElementById("scale3").classList.add("scale");
    }
});