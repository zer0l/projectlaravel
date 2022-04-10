var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,4000);

function nextSlide(){
  slides[currentSlide].className = 'slide';
  currentSlide = (currentSlide+1)%slides.length;
  slides[currentSlide].className = 'slide showing';
}

let col = document.getElementById('col');
let plus = document.getElementById('plus');
let minus = document.getElementById('minus');

plus.onclick = function() {
  col.value = parseInt(col.value) + 1;
}

minus.onclick = function() {
  col.value = parseInt(col.value) - 1;
}