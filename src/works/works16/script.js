// console.log("test"); 



document.getElementById("menu-bottun").addEventListener("click",function(){
  document.getElementById("menu-bottun").classList.toggle("active");
  document.getElementById("mask").classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
  document.getElementById("header").classList.toggle("active");
});

console.log(document.getElementById("page-top"));

window.addEventListener("scroll",function(){
  if(700 < window.scrollY){
    document.getElementById("page-top").classList.add("view");
  }else{
    document.getElementById("page-top").classList.remove("view");
  }
});