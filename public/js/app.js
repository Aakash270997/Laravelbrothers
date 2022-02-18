// const { forEach } = require("lodash");

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');
if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active')
    })
}
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active')
    })
}


// --------------read more-----------------

function readMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
function readMore1() {
    var dots = document.getElementById("dots-1");
    var moreText = document.getElementById("more-1");
    var btnText = document.getElementById("myBtn-1");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

// Auth page
function singin(){
    var auth = document.getElementById("auth");
    var redioInput = document.getElementById("client-student");
    var btnRedio = document.getElementById("btnradio");
    if(auth.style.display==="none"){
        redioInput.style.display="block";
        auth.style.display="none";
    }else{
        redioInput.style.display="none";
        auth.style.display="block";
    }
}

// ------------user select section-------------------
function onlyOne(checkbox) {
  var checkboxes = document.getElementsByName('check')
  checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked = false
  })
}