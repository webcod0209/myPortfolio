document.getElementById("menubutton").addEventListener("click",function(){
  this.classList.toggle("active");
  document.getElementById("nav").classList.toggle("active");
})

window.addEventListener("scroll",function(){
  if(this.scrollY<500){
    const header=document.getElementById("header");
    header.style.cssText="opacity: 0; visibility:hidden;";
  }else{
    header.style.cssText="";
  }

  for (let i = 0; i < document.querySelectorAll(".wrapper").length; i++) {
    const element = document.querySelectorAll(".wrapper")[i];
    if(element.getBoundingClientRect().top<500){
      element.classList.add("fade");
    }
  }

  const bg=document.querySelector(".bg");
  if(document.getElementById("access").getBoundingClientRect().top>window.innerHeight){
    bg.style.cssText="opacity:0; visibility:hidden;";
  }else if(document.getElementById("contact").getBoundingClientRect().top<window.innerHeight){
    bg.style.cssText="opacity:0; visibility:hidden;";
  }else{
    bg.style.cssText="";
  }

  const sideBar=document.querySelector(".side-bar");
  if(this.scrollY<500){
    sideBar.style.cssText="right:-20%;";
  }else if(this.scrollY>4900){
    sideBar.style.cssText="right:-20%;";
  }else{
    sideBar.style.cssText="";
  }

  let scrollimg=window.scrollY/10;
  if(this.innerWidth<880){
    document.getElementById("center").style.width=100-scrollimg+"%";
    document.getElementById("left").style.width=100-scrollimg+"%";
    document.getElementById("right").style.width=100-scrollimg+"%";
  }else{
    document.getElementById("center").style.width=33+scrollimg+"%";
    document.getElementById("left").style.width=33+scrollimg+"%";
    document.getElementById("right").style.width=33+scrollimg+"%";
  }
})

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