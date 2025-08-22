let currentSlide = 1;
const totalSlides = 4;

function showSlide(slide) {
  for (let i = 1; i <= totalSlides; i++) {
    document.getElementById("slide" + i).classList.add("opacity-0");
    document.getElementById("slide" + i).classList.remove("opacity-100");
  }
  document.getElementById("slide" + slide).classList.remove("opacity-0");
  document.getElementById("slide" + slide).classList.add("opacity-100");
  currentSlide = slide;
}

function nextSlide() {
  let next = currentSlide + 1 > totalSlides ? 1 : currentSlide + 1;
  showSlide(next);
}

function prevSlide() {
  let prev = currentSlide - 1 < 1 ? totalSlides : currentSlide - 1;
  showSlide(prev);
}

// Auto slide tiap 5 detik
setInterval(() => {
  nextSlide();
}, 5000);

showSlide(1); // initial
