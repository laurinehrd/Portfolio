
// burger menu

var burger = document.querySelector(".burger-menu");
var overlay = document.getElementById("overlay-content");

burger.addEventListener("click", function(){
  if(burger.classList.toggle("burger-menu--opened")){
    overlay.style.display = "flex";
  }else{
    overlay.style.display = "none";
  }
});

function lien(){
  overlay.style.display = "none";
  burger.classList.toggle("burger-menu--opened")
}


// hover icones compétences

// compétence 1
var globale1 = document.querySelector(".globale1");
var front1 = document.querySelector(".front1");
var back1 = document.querySelector(".back1");

globale1.addEventListener("mouseover", function(){
  back1.style.display = "block";
  front1.style.display = "none";
})

globale1.addEventListener("mouseout", function(){
  back1.style.display = "none";
  front1.style.display = "block";
})

// compétence 2
var globale2 = document.querySelector(".globale2");
var front2 = document.querySelector(".front2");
var back2 = document.querySelector(".back2");

globale2.addEventListener("mouseover", function(){
  back2.style.display = "block";
  front2.style.display = "none";
})

globale2.addEventListener("mouseout", function(){
  back2.style.display = "none";
  front2.style.display = "block";
})

// compétence 3
var globale3 = document.querySelector(".globale3");
var front3 = document.querySelector(".front3");
var back3 = document.querySelector(".back3");

globale3.addEventListener("mouseover", function(){
  back3.style.display = "block";
  front3.style.display = "none";
})

globale3.addEventListener("mouseout", function(){
  back3.style.display = "none";
  front3.style.display = "block";
})






