// *********************TYPPING EFFECT********************************
let wrapper
const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms))

async function writingAll (stringTarget, container){
  wrapper = document.querySelector('['+container+']')
  const stringsContainer = document.getElementsByClassName(stringTarget)

  while(wrapper){
    for (i=0; i <  stringsContainer.length ; i++){
      const string = stringsContainer[i].textContent
      await write(string)
      await sleep(1000)
      await erase()
      await sleep(1000)
    };
  }
};

async function write(text){
  let index = 0
  while(index < text.length){
    const timeout = 100
    await sleep(timeout)
    index++
    wrapper.innerHTML = text.substring(0, index)
  }
};

async function erase() {
  while(wrapper.textContent.length){
    const timeout = 100
    await sleep(timeout)
    wrapper.textContent = wrapper.textContent.substring(0, wrapper.textContent.length - 2)
  }
};

writingAll('item1', 'data-text');

// typping effect qui apparait au bout de 5s
window.onload = function(){
  setTimeout(function(){
    document.getElementById("typping-effect").style.display = "block";
  }, 5000);
}

// apparition du logo fixe
window.onscroll = showLogo;
function showLogo(){
  var windowScroll = document.documentElement.scrollTop;
  console.log(windowScroll);
  if(windowScroll > 620){
    document.getElementById('logosvg').style.top = "0";
  }else{
    document.getElementById('logosvg').style.top = "-150px";
  }
}

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



