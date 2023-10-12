//----------------------------------------------------------EFECT SCROLL
AOS.init();
//----------------------------------------------------------TOGGLE MENU
//JavaScript for toogle menu
var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-200px";
}
//----------------------------------------------------------VIDEO
var myVideo = document.getElementById("myVideo");
var playBtn = document.getElementById("playBtn");

function toggleVideo() {
  if (myVideo.paused) {
    myVideo.play();
    playBtn.innerHTML = "Pause";
    playBtn.classList.add("hide");
  } else {
    myVideo.pause();
    playBtn.innerHTML = "Play";
    playBtn.classList.remove("hide");
  }
}

myVideo.addEventListener("play", function() {
  playBtn.classList.add("hide");
});

myVideo.addEventListener("pause", function() {
  playBtn.classList.remove("hide");
});

function restartVideo() {
  myVideo.currentTime = 0;
  myVideo.play();
  playBtn.innerHTML = "Pause";
}

//----------------------------------------------------------AUDIO
function playSound() {
  var audio = document.getElementById("myAudio");
  audio.play();
}

