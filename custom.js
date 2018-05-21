// blinking of the down arrow
function blink(){
    $('#chevron').delay(100).fadeTo(100,0.5).delay(100).fadeTo(100,1, blink);
}


// typewriter
var i = 0;
var txt = 'Discover it. Explore it. Take a Chance.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typed").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

function move() {
  var elem = document.getElementById("myBar");  
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 50) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      //elem.innerHTML = width * 1  + '%';
    }
  }
}

$(document).ready(function() {

	"use strict";

	blink();

	typeWriter();

	move();

	// -------------- Scroll to content animation -------------- 

  $(".banner-info a[href^='#']").on('click', function(e) {
  	e.preventDefault();
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top-80
    }, 1000);
  });

});