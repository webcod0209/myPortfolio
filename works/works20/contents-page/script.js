window.addEventListener("scroll", function(){
  const header = document.getElementById("header")
  if(document.getElementById("top-wrapper").getBoundingClientRect().bottom<92){
    header.style.backgroundColor="#282F35"
  }else{
    header.style.cssText=""
  }
});

document.getElementById("menubutton").addEventListener("click", function(){
  this.classList.toggle("active")
  document.getElementById("nav").classList.toggle("active")
  document.getElementById("header-left").classList.toggle("active")
});

