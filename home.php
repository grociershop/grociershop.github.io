<div class="container-fluid">
  <main id="content">
  <section class="hero">
  <div class="slider">
    <div class="slide">
      <img src="11.png" class="w-75" alt="Banner 1">
    </div>
    <div class="slide">
      <img src="12.png" class="w-75" alt="Banner 2">
    </div>
    <div class="slide">
      <img src="14.png" class="w-75" alt="Banner 3">
    </div>
  </div>
  <div class="container">
    <h1>Welcome to Grocier Shop</h1>
    <p>Discover the Best Products for You</p>
    <a href="#" class="btn" href="#" onclick="loadContent('product.php')">Shop Now</a>
  </div>
</div>
</section>
  </main>
<script>
    // JavaScript code to handle the slide functionality

const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const slideWidth = slides[0].clientWidth;
let slideIndex = 0;

function nextSlide() {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  updateSlider();
}

function updateSlider() {
  slider.style.transform = `translateX(-${slideWidth * slideIndex}px)`;
}

// Automatically transition to the next slide every 3 seconds
setInterval(nextSlide, 3000);

</script>