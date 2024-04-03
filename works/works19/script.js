document.getElementById("menubutton").addEventListener("click" , function(){
  this.classList.toggle("active")
  document.getElementById("nav").classList.toggle("active")
  document.getElementById("header-left").classList.toggle("active")
})