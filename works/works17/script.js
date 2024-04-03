document.getElementById("menubottun").addEventListener("click",function(){
  document.getElementById("menubottun").classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
  document.getElementById("mask").classList.toggle("active");
})

window.addEventListener("scroll",function(){
  for (let i = 0; i < document.querySelectorAll(".feature-contents img").length; i++) {
    const element = document.querySelectorAll(".feature-contents img")[i];
    if(element.getBoundingClientRect().top<470){
      element.classList.add("slide");
    }
  }
})